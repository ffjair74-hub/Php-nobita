<?php
 //aqui va php
 //imprimir informacion

echo "Hola mundo";
echo "<h1>Hola desde PHP </h1>";
echo "<p>Esto lo genera el servidor</p>";

//variables
//todas las variables empizan con signo de dolar
$nombre = "nobita"; //string
$edad = 10; //int
$activo = true; //boolean
$decimal = 3.4; //float
$nulo = null; //null
echo $nombre; 
echo "<br>"; 
echo $edad;
var_dump($edad); //elegir informacion de la que quiero ver
echo "<br>";
//concatenacion de strings
echo "Hola" . $nombre;
//operadores basicos 
$suma = 5 + 3;
$resta = 5 - 3;
$multi = 5 * 3;
$div =  5 / 3;
//operadores de comparacion 
$a = 5;
$b = 3;
$a == $b; //igiul valor
$a === $b; // igual valor o tipo
$a != $b; //diferente de 
$a < $b;
$a > $b;
echo "<br>";
//estructuras condicionales 
$edad = 10;
if ($edad >= 18) {
    echo "Mayor de edad";
}else{
    echo "Menor de edad";
}
echo "<br>";
//if / elseif / else
$nota = 8;
if($nota >=9){
    echo "Exelente";
}elseif ($nota >= 7) {
    echo "Aprobado";
}else {
    echo "Reprobado";
}
echo "<br>";
//Estructuras repititivas
//while
$i = 0;
while($i < 5 ){
    echo $i . "<br>";
    $i++;
}
echo "<br>";
//for
for ($i = 0 ; $i < 5; $i++ ){
    echo "Numero :    $i   <br>";  
}
//arreglo en php
//array indexado
$colores = ["rojo", "verde", "amarillo" , "negro", "blanco"];
echo $colores[0];
//recorrer array
foreach($colores as $color){
    echo $color . "<br>";
} 
//array asociativa
$persona = [
    "nombre" => "angie",
    "edad" => 27,
    "Ciudad" => "guayas"
];
echo $persona["ciudad"];