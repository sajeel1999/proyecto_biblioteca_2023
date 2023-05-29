<?php

session_start();

require_once('../assets/libs/tcpdf/tcpdf.php');
include_once("../functions/getUser.php");
include_once("../functions/getLibros.php");
include "../functions/config.php";
include_once("../functions/listaPrestaciones.php");


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


$pdf->setAutoPageBreak(true,3);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetCellPadding(0);
$pdf->setCellHeightRatio(1.25);

$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(0);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->setFontSubsetting(true);

$pdf->SetFont('dejavusans', '', 14, '', true);

$pdf->AddPage();

//Datos Empresa
$nameUser = $_SESSION['userLogeado']['name'];
$city = "46183, VALENCIA";
date_default_timezone_set('Europe/Madrid');
$fechaActual = date('d/m/Y');
$horaActual = date('H:i');
// header("refresh:60");


$rowHeader = '<img class = "imgPortada" src ="../assets/images/portada.webp"><br>'.
 '<h1 class = "g--text-center">Registros</h1><br><br><br> '. 
 '<h4>GBM La ELIANA '. $city . '</h4>'. 
 '<h5>Ficha usuario: '. $nameUser .'</h5>'.
 '<h6>'. $fechaActual .'</h6>'

 ;

$rowProduct = '';


$rowEncabezado = '<tr>

<th class ="g--font-infoproduct">Fecha inicio</th>
<th class ="g--font-infoproduct g--text-center g--salto-100px">Fecha devolución</th>
<th class ="g--font-infoproduct"></th>
<th class ="g--font-infoproduct">Libro prestado</th>
<th class ="g--font-infoproduct"></th>
<th class="g--font-infoproduct g--text-center ">Estado de registro</th>

</tr> <br> <br>';

for ($posRegistro = 0; $posRegistro < count($prestaciones); $posRegistro++) {
   for ($posLibro = 0; $posLibro < count($libros); $posLibro++) {
      if($libros[$posLibro]['id'] == $prestaciones[$posRegistro]['id_libro']){
         $rowProduct .= '<tr> 
            <td class= "g--font-infoproduct g--border-top ">'.$prestaciones [$posRegistro] ["fecha_prestacion"] .'</td>
            <td class= "g--font-infoproduct g--border-top ">    '.$prestaciones [$posRegistro] ["fecha_devolucion"] . '</td>
            <td class = "g--border-top"></td>
            <td class= "g--font-infoproduct g--border-top g--salto-210px">'. $libros[$posLibro]['name'] . '</td>
            <td class = "g--salto-40px g--border-top"></td>
            <td class= "g--font-infoproduct g--border-top">'. $prestaciones[$posRegistro]['estado'] .'</td>
         </tr>';
      }
   }
}

$html = '
<style>

   .g--text-center{
      text-align: center;
   }

   .imgPortada{
      width: 800px;
      height: 240vh;
      border-radius: 4px;
   }

   .g--border-top{
      border-top: 1px solid rgb(236, 126, 0);
   }

   .g--border-bottom{
      border-bottom: 1px solid rgb(236, 126, 0);
   }

   .g--font-infoproduct{
      color: rgb(85, 141, 166);
      font-size: 14px;

   }

    .g--salto-50px{
       width: 50px;
    }

    .g--salto-60px{
       width: 60px;
    }

    .g--salto-64px{
      width: 64px;
   }

    .g--salto-80px{
       width: 80px;
    }

    .g--salto-40px{
      width: 40px;
   }

    .g--salto-200px{
       width: 200px;
    }

    .g--salto-210px{
      width: 210px;
   }

   .g--prueba-width{
      width: 150px;
   }

    .g--salto-100px{
      width: 100px;
   }

   .g--salto-30px{
      width: 30px;
   }

   .g--salto-130px{
      width: 130px;
   }
   

    .g--salto-150px{
       width: 150px;
    }
    .g--salto-160px{
      width: 160px;
   }
   .g--salto-170px{
      width: 170px;
   }
   .g--salto-180px{
      width: 180px;
   }

</style>
'

.


'




'

.
'

<div >
    ' . 
    
       $rowHeader
    
    .'

</div>

<div class ="g--border-bottom">
    <table style="padding: 10px 3px 3px 3px;">' . 
      $rowEncabezado.
      $rowProduct
    .'</table>

    <br><br><br>

</div>



'
;

$pdf->writeHTMLCell(0, 50, '', '', $html, 0, 1, 0, true, '', true);
$pdf->SetCellMargins(null, null, null, 1); 
header("Content-Type: application/pdf");
$pdf->Output('prestaciones.pdf', 'I');
