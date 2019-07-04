<?php

include_once '../../../cfg/conexao.php';
include_once '../../../script/gerais.php';
include_once './formatSQL.php';
session_start();

function saveAreaFiles($files, $sessaoId)
{
    $conDB = new conDB();
    $format = formatAreaFiles($files, $sessaoId);
    $SQLfiles = "INSERT INTO ABACO_INTRANET.DBO.nnUploadAreaTmp";
    $SQLfiles .= " VALUES(" . $format['VALUES'] . ")";

    $resSQL = $conDB->ExecutaSQL($SQLfiles);
    return $conDB->NumRegistros($resSQL);
}

function selectAllFiles($session)
{
    $conDB = new conDB();
    $SQL = "SELECT * FROM ABACO_INTRANET.dbo.nnUploadAreaTmp";
    $SQL .= " WHERE SESSAO = '$session' ";
    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result[] = $rstSQL;
    }
    return $result;
}

function selectFilesAreas($session)
{
    $conDB = new conDB();
    $SQL = "SELECT * FROM ABACO_INTRANET.dbo.nnUploadAreaTmp";
    $SQL .= " WHERE SESSAO = '$session' ";
    $SQL .= " AND FORMATO NOT IN ('JPG', 'PNG', 'JPEG', 'GIF', 'jpg', 'png', 'jpeg', 'gif')";
    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result[] = $rstSQL;
    }
    return $result;
}

function selectImagensAreas($session)
{
    $conDB = new conDB();
    $SQL = "SELECT * FROM ABACO_INTRANET.dbo.nnUploadAreaTmp";
    $SQL .= " WHERE SESSAO = '$session' ";
    $SQL .= " AND FORMATO IN ('JPG', 'PNG', 'JPEG', 'GIF', 'jpg', 'png', 'jpeg', 'gif')";
    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result[] = $rstSQL;
    }
    return $result;
}

function fileExists($fileName)
{
    $path = 'c:/arquivos_nn_area/' . $fileName;

    if (!file_exists($path)) {
        return false;
    }
    return true;
}

function downloadFile($fileName)
{
    $filePath = 'c:/arquivos_nn_area/' . $fileName;
    header("Content-Disposition: attachment; filename=" . basename($filePath));
    readfile($filePath);
}

function deleteFile($session, $fileName)
{
    $conDB = new conDB();
    $SQL = "DELETE FROM ABACO_INTRANET.DBO.nnUploadAreaTmp";
    $SQL .= " WHERE SESSAO = '$session'";
    $SQL .= " AND ARQUIVO = '$fileName'";
    $resSQL = $conDB->ExecutaSQL($SQL);
    return $conDB->NumRegistros($resSQL);
}

function deleteFileInFolder($fileName)
{
    $path = "c:/arquivos_nn_area/";
    unlink($path . $fileName);
}
