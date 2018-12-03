<?php
require 'vendor/autoload.php';
$inputFileName = '/home/otbafrica/Documents/data/sportpesa.xls';

$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($inputFileName);
$reader->setReadDataOnly(true);
$loadSheets = array('Sheet1');
$reader->setLoadSheetsOnly($loadSheets);
//the default behavior is to load all sheets
$reader->setLoadAllSheets();

class SampleReadFilter implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter
{
    public function readCell($column, $row, $worksheetName = '') {
        // Read rows 1 to 10 and columns A to C only
        if ($row >= 1 && $row <= 7) {
           if (in_array($column,range('A','C'))) {
             return true;
           }
        }
        return false;
    }
}

$sampleFilter = new SampleReadFilter();
$reader->setReadFilter($sampleFilter);

$excelObj = $reader->load($reader);
var_dump(($excelObj));

