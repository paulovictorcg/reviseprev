<?php

require_once 'phpoffice_phpword/index.php';
// include_once 'modelos/Sample_Header.php';

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('modelos/buraconegro.docx');

// Variables on different parts of document
$templateProcessor->setValue('teste', htmlspecialchars('Pluto'));

$templateProcessor->saveAs('peticaoGerada/peticao001.docx');

