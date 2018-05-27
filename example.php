<?php 

require 'vendor/autoload.php';

use App\TextFileExcelReader;
use App\TextFileReader;

define('PATH_DOCUMENT_XLS', "users.xls");
define('PATH_DOCUMENT_TXT', "users.txt");
define('FILE_TYPE_EXCEL', 'application/vnd.ms-excel');
define('FILE_TYPE_TEXT', 'text/plain');

$file = PATH_DOCUMENT_TXT;  
$content = null;

if(mime_content_type($file) == FILE_TYPE_EXCEL)
{
    $content = new TextFileExcelReader();
}

if(mime_content_type($file) == FILE_TYPE_TEXT)
{
    $content = new TextFileReader();
}

$content->setFile($file);

echo "<pre>";
print_r($content->render());
echo "</pre>";

/* --------------------------------------------------------------- */