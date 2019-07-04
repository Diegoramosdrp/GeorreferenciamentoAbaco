<?php

include_once '../../../cfg/conexao.php';
include_once '../../../script/gerais.php';
include_once './formatSQL.php';
session_start();

function saveSalesPolicy($policys)
{
    $conDB = new conDB();
    $format = formatSalesPolicy($policys);
    $SQLpolitica = "INSERT INTO ABACO_INTRANET.dbo.nnNegociosAreaPoliticaVenda";
    $SQLpolitica .= " VALUES(" . $format['VALUES'] . ")";
    $resSQLpolitica = $conDB->ExecutaSQL($SQLpolitica);
    return $conDB->NumRegistros($resSQLpolitica);
}

function selectSalesPolicy($session)
{
    $conDB = new conDB();
    $SQL = "SELECT * FROM ABACO_INTRANET.DBO.nnNegociosAreaPoliticaVenda";
    $SQL .= " WHERE SESSAO_ID = '$session'";
    $resSQL = $conDB->ExecutaSQL($SQL);
    $rstSQL = $conDB->ExtraiDados($resSQL);
    return $rstSQL;
}
