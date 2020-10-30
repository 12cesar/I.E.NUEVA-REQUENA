<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'inc/funciones/funciones.php';
$id=$_GET['id'];


$html='<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="img/LOGO-I.E.N.R.png">
      </div>
      <div id="company">
        <h2 class="name">INSTITUCION EDUCATIVA NUEVA REQUENA</h2>
        <div>Codigo Modular, 25000</div>
        <div>(602) 519-0450</div>
        <div><a href="https://gmail.com">ienuevarequena.12@gmail.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">ACTA DE ASISTENCIA</div>
          </div>
            <div id="invoice">';

                    $titulo=mostraractasid($id);
                    if ($titulo->num_rows) {
                    foreach ($titulo as $titulo1) {
                    $html.='<h1>'.$titulo1["titulo"].'</h1>
                    <div class="date">FECHA: '.$titulo1["fecha"].'</div>
                    </div>
                    </div>
                    <div id="notices">
                        <div class="notice">'.$titulo1['contenido'] .'</div>
                    </div>';
        }
    }
  $html.='
      <br>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="total">PARTICIPANTES</th>
            <th class="desc">FIRMA</th>
          </tr>
        </thead>
        <tbody>';
        
        $usuario=mostrarusuarioid($id);
    if ($usuario->num_rows) {
        foreach ($usuario as $usuario1) {
            
           $html.='<tr>
                   <td class="total"><h3>'. strtoupper($usuario1['nombre']).' '. strtoupper($usuario1['apellido']) .'</h3></td>
                   <td class="desc"><img src="img/firma1juliocalderon.png" class="edit"></td>
          </tr>';
            
        }
    }
   

    $html.='    </tbody>
      </table>
    </main>
    <footer>
    La firma digital fue creada en una computadora y es válida .
    </footer>
  </body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$css=file_get_contents('css/style.css');

$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html);
$mpdf->Output();
