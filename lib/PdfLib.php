
<?php

require_once 'mpdf/mpdf.php';

class PdfLib extends mPDF {

    public function PdfLib($mode = '', $format = 'A4', $default_font_size = 12, $default_font = 'Lucida', $mgl = 5, $mgr = 5, $mgt = 10, $mgb = 11, $mgh = 7, $mgf = 7, $orientation = 'L') {
        parent::mPDF($mode, $format, $default_font_size, $default_font, $mgl, $mgr, $mgt, $mgb, $mgh, $mgf, $orientation);

        $this->defaultheaderfontsize = 10;  /* in pts */
        $this->defaultheaderfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultheaderline = 0;   /* 1 to include line below header/above footer */


        $this->setAutoTopMargin = true;

        $this->defaultfooterfontsize = 8;  /* in pts */
        $this->defaultfooterfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultfooterline = 0;   /* 1 to include line below header/above footer */

        $h = '<div class="row-fluid" style="margin-top: -100px;">              
              <div id="cabecalho" class="span2 pull-left">
              
                <img src="img/pensaoLogo.png" alt="pensao"/>
                
                <p></p>
                
              </div>
            </div><br>';

        $this->SetHtmlHeader($h);
        $this->SetFooter('||Página {PAGENO} de {nb}');
    }

}
