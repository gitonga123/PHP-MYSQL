<?php
// Test CVS
ini_set("display_errors",1);
require_once 'Excel/reader.php';
$inputFileName = '/home/otbafrica/Documents/data/sportpesa.xls';

// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader($inputFileName);

echo "Total Sheets in this xls file: ".count($data->sheets)."<br /><br />";
