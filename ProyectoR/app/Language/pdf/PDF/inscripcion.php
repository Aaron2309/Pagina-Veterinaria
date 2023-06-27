<?php

//ocultar cualquier notificacion
error_reporting(0);

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$deporte = $_POST["deporte"];

require "../tcpdf_include.php";

//crear objeto
$pdf = new TCPDF();

//definir propiedades del documento
$pdf->SetMargins(20, 20, 20);

//definir los margenes de la cabecera
$pdf->setHeaderMargin(1);

//margnes de pie
$pdf->setFooterMargin(10);

//definir el encabezado
$pdf->setHeaderData(
    "logo.jpg",
    10,
    "Boleta de Inscripción",
    "Olimpiadas Patito 2022"
);

//crear pagina
$pdf->AddPage();
$html = "
    <table cellpadding=\"5\" width='400' border=\"1\">
      <tbody>
        <tr  style=\"text-align:center; background-color:green;color:white\">
          <td>Cedula</td>
          <td>Nombre</td>
          <td>Deporte</td>
        </tr>
        <tr style=\"text-align:center;\">
          <td>$cedula</td>
          <td>$nombre</td>
          <td>$deporte</td>
        </tr>
      </tbody>
    </table>";

//escribir html en un pdf
$pdf->writeHTML($html);


//mostrar el documento pdf I o D
$pdf->Output("Inscripcion-$cedula.pdf", "I");
