#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>
#include "DHT.h"
#define DHTTYPE DHT11

//Pines GPIO ojo no son pines fisicos sino logicos
// Ejemplo GPIO 0 es el D3(el pin fisico digital 3 del nodeMCU)
#define dht_pin 14
const char *ssid = "TORNADO";       //nombre de la red
const char *password = "3795723CB"; //contraseña
String server = "192.168.1.2";      //ip de la maquina servidor
//retardo entre lecturas en milisegundos
int retardo = 200;

//inicializacion de la variable dht con los valores
DHT dht(dht_pin, DHTTYPE);

float temp;
float hum;

WiFiClient client;

void setup()
{
  /*******/
  dht.begin();
  Serial.begin(9600);
  delay(retardo);
  /*******/
  Serial.begin(9600);
  Serial.print("Conectando a red ");
  Serial.print(ssid);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }
  Serial.println("WiFi conectada");
  //server.begin();
  Serial.println("Iniciando el Servidor... ");
  Serial.println(WiFi.localIP());
  delay(retardo);
  Serial.println("Conectado con éxito...");
}

void loop()
{
  temp = dht.readTemperature();  
  hum = dht.readHumidity();

  envioDeDatosDHT11(temp,hum, "DHT11");
  
  delay(retardo);
}
int envioDeDatosDHT11(float temp,float hum,String modelo)
{
  int res = 0;
  if (WiFi.status() == WL_CONNECTED)
  {
    HTTPClient http;

    String result = "Temperatura: " + String(temp) + " Humedad: " + String(hum) + " modelo: " + modelo;
    Serial.println(result);

    String pagina = "http://" + server + "/riego/hardware/recibirDatos.php?temp=" + temp + "&hum=" + hum + "&modelo=" + modelo;
    WiFiClient cliente;
    http.begin(cliente, pagina);
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");
    res = http.POST("");
    http.end();
  }
  else
  {
    Serial.println("Error en la conexion Wifi..");
  }
  return res;
}
