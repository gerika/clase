<?php
namespace Library\Pdf;
use DOMPDF;

class Pdf
{
    public static function create($hmtl, $nameFile)
    {
        // disable DOMPDF's internal autoloader if you are using Composer
        define('DOMPDF_ENABLE_AUTOLOAD', false);

        // include DOMPDF's default configuration
        require_once '../../vendor/dompdf/dompdf/dompdf_config.inc.php';

        $dompdf = new DOMPDF();
        $dompdf->load_html($hmtl);
        $dompdf->render();
        $dompdf->stream("$nameFile.pdf");
    }
}