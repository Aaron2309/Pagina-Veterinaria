<?php 
    
    require "../tcpdf_include.php";

    //crear objeto
    $pdf=new TCPDF();

    //definir propiedades del documento
    $pdf->SetMargins(20,20,20);

    //definir los margenes de la cabecera
    $pdf->setHeaderMargin(1);

    //margnes de pie
    $pdf->setFooterMargin(10);

    //definir el encabezado
    $pdf->setHeaderData("logo.jpg",10,"Titulo del PDF","Subtitulo");

    //crear pagina
    $pdf->AddPage();

    //escribir en el documento
    $pdf->Write(0,"Hola Mundo desde un PDF");

    //cambiar color
    $pdf->SetTextColor(150,200,75);
    $pdf->Write(0,"Hola Mundo desde un PDF");

    //cambiar fuente
    $pdf->SetFont("helvetica","BU",20);
    $pdf->Write(0,"Hola Mundo desde un PDF");

    $pdf->AddPage();
    $pdf->Write(0,"Hola Mundo desde un PDF");


    //mostrar el pdf
    $pdf->Output("nombrePDF.pdf","I"); //D descargar




?>