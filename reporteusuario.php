<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'inc/funciones/funciones.php';
$id=$_GET['id'];


$html='hola';


$mpdf = new \Mpdf\Mpdf();
$css=file_get_contents('css/style.css');

$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html);
$mpdf->Output();
