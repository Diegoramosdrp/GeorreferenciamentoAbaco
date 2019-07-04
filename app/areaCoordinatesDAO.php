<?php

include_once '../../../cfg/conexao.php';
include_once '../../../script/gerais.php';
include_once './formatSQL.php';
session_start();

function saveAreaCoordinates($coordinates, $position, $sessaoId) {
    $conDB = new conDB();
    $format = formatAreaCoordinates($coordinates, $position, $sessaoId);
    $SQLcoordenadas = "INSERT INTO ABACO_INTRANET.dbo.nnNegociosAreasCoordenadas";
    $SQLcoordenadas .= " VALUES(" . $format['VALUES'] . ")";
    $resSQLcoordenadas = $conDB->ExecutaSQL($SQLcoordenadas);
    return $conDB->NumRegistros($resSQLcoordenadas);
}

function selectAreaCoordinates($session) {
    $conDB = new conDB();
    $result = '';
    $SQL = "SELECT * FROM ABACO_INTRANET.DBO.nnNegociosAreasCoordenadas";
    $SQL .= " WHERE SESSAO_ID = '$session'";
    $SQL .= " ORDER BY POSICAO";
    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result .= $rstSQL['COORDENADA'] . '|';
    }
    return $result;
}
