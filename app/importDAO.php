<?php

require '../src/phpoffice/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function renderListImport($file)
{
    if ($file == NULL) {
        return 'ARQUIVO INVALIDO';
    } else {
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
        return $spreadsheet->getActiveSheet()->toArray();
    }
}

function removeRowNull($array)
{
    foreach ($array as $key => $value) {
        if (count(array_unique($value)) === 1) {
            $empty = 1;
        } else {
            $empty = 0;
        }

        if ($empty === 0) {
            $result[] = $value;
        }
        $empty = 0;
    }

    return $result;
}

function appendDefaultsValues($array)
{
    $arrayAppended = [];
    $max = 0;
    foreach ($array as $index => $value) {
        if (count($value) > 25) {
            $max = count($value);
        } else {
            $max = 25;
        }
        for ($i = 0; $i < $max; $i++) {
            $arrayAppended[$index][] = $value[$i];
        }
        array_splice($arrayAppended[$index], 5, 0, array('Abaco'));
        array_splice($arrayAppended[$index], 6, 0, array('-----'));
        array_splice($arrayAppended[$index], 7, 0, array('Em Negociação'));
        array_splice($arrayAppended[$index], 14, 0, array('0'));
        array_splice($arrayAppended[$index], 20, 0, array(''));
        array_splice($arrayAppended[$index], 21, 0, array(''));
        array_splice($arrayAppended[$index], 22, 0, array(''));
        array_splice($arrayAppended[$index], 23, 0, array(''));
        array_splice($arrayAppended[$index], 24, 0, array(date('d/m/Y')));
    }

    return $arrayAppended;
}
