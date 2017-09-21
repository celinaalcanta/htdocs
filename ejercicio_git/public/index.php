<?php
require_once '../src/app/db/mysql.php';
$conexion =new app\db\mysql();
var_dump($conexion);
//$a = 10;
//$b = 2;
//$c = $a * $b;
//$a = true;// true=1 false=0
//$b= 'cadena';

echo 'valor de $a ='.$a.', $b = '.$b.', $c = '.$c;

//$conexion = mysqli_connect('127.0.0.1','root','1234','biblioteca',3306);
//print_r($conexion);
//$cnn = new conexion();