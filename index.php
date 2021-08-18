<?php
    
    use Source\Pdf;
    
    require_once $_SERVER['DOCUMENT_ROOT']."/createPdf/vendor/autoload.php";
    
    $pdf = new Pdf("createPdf/","createPdf/");
    $pdf->createPdf("createPdf/","template.html","A4","portrait", "template");
?>
