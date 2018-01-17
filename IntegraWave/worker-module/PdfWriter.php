<?php
//use Knp\Snappy\Chrome\Pdf;
use Knp\Snappy\Wkhtmltox\Pdf;
//use Knp\Snappy\Wkhtmltox\AbstractGenerator;
use Knp\Snappy\Wkhtmltox\Image;

require '../vendor/autoload.php';

include "../vendor/knplabs/knp-snappy/src/Knp/Snappy/Wkhtmltox/Pdf.php";
//include "../vendor/knplabs/knp-snappy/src/Knp/Snappy/Wkhtmltox/AbstractGenerator.php";
include "../vendor/knplabs/knp-snappy/src/Knp/Snappy/Wkhtmltox/Image.php";
class PdfWriter
{
    private $binaryPath;

    public function __construct()
    {
        $this->binaryPath = __DIR__ . '/../vendor/wemersonjanuario/wkhtmltox-windows-64bit/bin/wkhtmltopdf';

    }

    public function write($template)
    {
        $generatedPdfFilename = sprintf('export-%s.pdf', time());

        $generatedPdfFilePath = __DIR__ . DIRECTORY_SEPARATOR . $generatedPdfFilename;

        $snappy = new Pdf($this->binaryPath);

        $snappy->generateFromHtml($template, $generatedPdfFilePath);

        return $generatedPdfFilePath;
    }
}
//$pdfWriter = new PDFWriter();
//$outputFilePath = $pdfWriter->write('resume-print-complete.php');
//echo $outputFilePath;