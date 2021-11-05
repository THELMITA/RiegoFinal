#include <ESP8266WiFi.h>

const char *ssid = "Tigo Romero";
const char *password = "CAROPA123";

const char *host = "192.168.0.16";

String linea = "";


#define PIN_RELE 0 //D0;
// deshabilitamos la inversión del relé
#define INVERT_LOGIC true

boolean estado;

void setup()
{
  Serial.begin(9600);
  Serial.println();

  Serial.printf("Conectando con %s ", ssid);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }
  Serial.println();
  Serial.print("Conectado a red WiFi: ");
  Serial.print(ssid);

  //Definimos el Relé como OUTPUT
  pinMode(PIN_RELE, OUTPUT);
}

void loop()
{  
  // Declaramos o instanciamos un cliente que se conectará al Host
  WiFiClient client;

  Serial.printf("\n[Conectando con %s ... ", host);
  // Intentamos conectarnos
  if (client.connect(host, 80))
  {
    Serial.println("Conectado]");

    Serial.println("[Enviando una solicitud]");
    client.print(String("GET /riego/hardware/mandarDatos.php") + " HTTP/1.1\r\n" +
                 "Host: " + host + "\r\n" +
                 "Conexion: close\r\n" +
                 "\r\n");

    Serial.println("[Respuesta:]");
    // Mientras la conexion perdure
    linea = "";
    while (client.connected())
    {
      // Si existen datos disponibles
      if (client.available())
      {
        String lineaTemp = client.readStringUntil('\n');
        Serial.println(lineaTemp);
        linea = linea + lineaTemp;
      }
    }
    int pos = linea.indexOf("REGAR");
    estado = estadoRele();
    if (pos >= 0)
    {
      Serial.print("Se inicia el riego.....");
      //activar reles
      activarRele();
    }
    else
    {
      Serial.print("Se detiene el riego.....");
      //parar reles
      desactivarRele();
    }
    // Una vez el servidor envia todos los datos requeridos se desconecta y el programa continua
    client.stop();
    Serial.println("\n[Desconectado]");
  }
  else
  {
    Serial.println("Fallo Conexion!]");
    client.stop();
  }
  delay(10000);
}

void activarRele()
{
  Serial.print("Activa Relé orden:");
  if (INVERT_LOGIC)
  {
    //Invertimos la logica del relé
    digitalWrite(PIN_RELE, LOW);
    Serial.println("LOW");
  }
  else
  {
    digitalWrite(PIN_RELE, HIGH);
    Serial.println("HIGH");
  }
}

void desactivarRele()
{
  Serial.print("Desactiva Relé orden: ");
  if (INVERT_LOGIC)
  {
    //Invertimos la logica del relé
    digitalWrite(PIN_RELE, HIGH);
    Serial.println("HIGH");
  }
  else
  {
    digitalWrite(PIN_RELE, LOW);
    Serial.println("LOW");
  }
}

boolean estadoRele()
{
  if (digitalRead(PIN_RELE) == LOW)
  {
    if (INVERT_LOGIC)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
  else
  {
    if (INVERT_LOGIC)
    {
      return false;
    }
    else
    {
      return true;
    }
  }
}
