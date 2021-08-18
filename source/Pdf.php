<?php
    
    
    namespace Source;
    
    use Dompdf\Options;
    use Dompdf\Dompdf;

    /**
     *
     */
    Class Pdf
    {
    
        /**
         * @param $setChroot // diretorio Raiz
         * @param $setBasePath // diretorio Raiz para css e imagems
         */
        public function __construct($setChroot,$setBasePath)
        {
            $pdf = new Dompdf();
            $pdf->setBasePath($_SERVER['DOCUMENT_ROOT']."/".$setBasePath);
            $options = new Options();
            $options->setChroot($_SERVER['DOCUMENT_ROOT']."/".$setChroot);
        }
    
        /**
         * @param      $setRootPatch - (require) com caminho para pasta root do arquivo
         * @param      $htmlFile  - arquivo a sr convertido em pdf.
         * @param      $paperSize - tamanho do papel - exemplo: A4.
         * @param      $orientation - oroentação do papel (portrait - retrato / landscape - paisagem)
         * @param null $fileName
         */
        public function createPdf($setRootPatch,$htmlFile, $paperSize,$orientation,$fileName = null): ?string
        {
            ob_start();
            $pdf = new Dompdf();
            require $_SERVER['DOCUMENT_ROOT']."/".$setRootPatch.$htmlFile;
            $pdf->loadHtml(ob_get_clean());
            $pdf->setPaper($paperSize,$orientation);
            $pdf->render();
            
            if (empty($fileName)){
                $fileName = date('d-m-Y').'.pdf';
                $pdf->stream($fileName,false);
            } else{
                $pdf->stream($fileName,false);
            }
            return $pdf->output();
        }
    }