 <?php

  function tipo($n)

  {
  	if ($n==1) 
  	{
  		
  		$estado="Riego";
  	}
  	else
  	 {
  		$estado="cosecha";
  	}
  	return $estado;


  } 


  function fechaAgregar($anio,$mes,$dia,$hora)
    /*2012-06-18 19:10:56*/
/*2021-08-21 13:29:39*/
  {
  
  
   $anio=substr($fecha,0,4);
   $mes=substr($fecha,5,2);
   $dia=substr($fecha,8,2);
   $hora=substr($fecha,11,5);
   $fech=$anio."-".$mes."-".$dia." ".$hora.":00:00";
 //$this->session->set_userdata('idAgenda',);

  }

   function fechaHora($fecha,$hora)
    /*2012-06-18 19:10:56*/
/*2021-08-21 13:29:39*/
  {
  
  
 
   $fech=$fecha." ".$hora.":00:00";


  }

    function fechaConvertir($fecha)
    /*2012-06-18 19:10:56*/
/*2021-08-21 13:29:39*/

//2021-08-25 00:00:00   2021-08-25  type="datetime-local"
  {
  
   
   
    $cambio=substr($fecha,0,10);
	return $cambio;


  }
  function idAgenda($id)
    
  {
  
  
 $d=$id;
   return $d;


  }
     
  
  function login($Apellido,$ci)
 

  {
  
   $n=substr($Apellido,0,2);
    
   

   $login=$n.$ci;
  
  
    

    return $login;
  }

   

  function limiteHora($inicio,$fin) 

  {
    $i1=substr($inicio,0,2);
    $i2=substr($inicio,4,2);
    $i=$i1.$i2;
    $f1=substr($fin,0,2);
    $f2=substr($fin,4,2);
    $f=$f1.$f2;
   if($i<$f){

    $mensaje="si";
   }else
   {
    $mensaje="no";
   }
  
   

    return $mensaje; 
  }


  function compararH($inicioH,$finH,$inicioB,$finB) 

  {
    $i1=substr($inicioH,0,2);
    $i2=substr($inicioH,4,2);
    $iH=$i1.$i2;

    $f1=substr($finH,0,2);
    $f2=substr($finH,4,2);
    $fH=$f1.$f2;

    $i3=substr($inicioB,0,2);
    $i4=substr($inicioB,4,2);
    $iB=$i3.$i4;

    $f3=substr($finB,0,2);
    $f4=substr($finB,4,2);
    $fB=$f3.$f4;

    

    
   if($fH<$iB ||  $iH >$fB )
   {

    $mensaje="si";

   }else{

    $mensaje="no";
   }
  
   

    return $mensaje;
  }

  
  function realizado($n)

  {
  	if ($n==1) 
  	{
  		
  		$estado="Riego Realizado";
  	}
  	else
  	 {
  		$estado="No  Realizado";
  	}
  	return $estado;



  } 




  ?>