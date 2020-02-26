<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
</body>
</html>


<?php
  
  $nombre ="jesus";
    
  $dias =["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];
 
  echo $nombre."<br>";// imprimir nombre
  var_dump($dias);//imprimir todo el array horisontal
  echo "<br>";
  echo $dias[0]."<br>"; // imprimir un lugar del array
  echo count($dias)."<br>";// imprimir la cantidad del array


for($i=0;$i<count($dias);$i++)
{
  echo"dia $i = ".$dias[$i]."<br>";
}

echo "<br>";

echo "#########################################################################"."<br>";
echo "TAREA DE ORDENAMIENTO";
echo "<br>";

$numerosdesorden=array(5,9,4,7,3,8,2,1,6);
 
echo "Valores iniciales<br>";
for($i=0;$i<count($numerosdesorden);$i++)
    echo $numerosdesorden[$i]."\n";
 
$numerosordenados=burbuja($numerosdesorden);
 
echo "<br><br>Valores ordenados<br>";
for($i=0;$i<count($numerosordenados);$i++)
    echo $numerosordenados[$i]."\n";

function burbuja($array)
{
    for($i=1;$i<count($array);$i++)
    {
        for($j=0;$j<count($array)-$i;$j++)
        {
            if($array[$j]>$array[$j+1])
            {
                $k=$array[$j+1];
                $array[$j+1]=$array[$j];
                $array[$j]=$k;
            }
        }
    }
 
    return $array;
}
 


  
 