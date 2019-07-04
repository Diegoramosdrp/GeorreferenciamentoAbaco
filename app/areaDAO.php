<?php

include_once '../../../cfg/conexao.php';
include_once '../../../script/gerais.php';
include_once './formatSQL.php';
include_once './functions.php';
session_start();

function saveArea($area)
{
    $conDB = new conDB();
    $format = formatAreaSave($area);
    $SQLarea = "INSERT INTO ABACO_INTRANET.dbo.nnNegociosAreas";
    $SQLarea .= " (" . $format['COLUMNS'] . ")";
    $SQLarea .= " VALUES(" . $format['VALUES'] . ")";
    $resSQLarea = $conDB->ExecutaSQL($SQLarea);
    return $conDB->NumRegistros($resSQLarea);
}

function updateArea($session, $area)
{
    $conDB = new conDB();
    $format = formatAreaUpdate($area);
    $SQLarea = "UPDATE ABACO_INTRANET.dbo.nnNegociosAreas";
    $SQLarea .= " SET " . $format['VALUES'];
    $SQLarea .= " WHERE SESSAO_ID = '" . $session . "'";
    $resSQLarea = $conDB->ExecutaSQL($SQLarea);
    return $conDB->NumRegistros($resSQLarea);
}

function selectByName($name)
{
    $conDB = new conDB();
    $SQLarea = "SELECT NOME_EMPREENDIMENTO FROM ABACO_INTRANET.dbo.nnNegociosAreas";
    $SQLarea .= " WHERE NOME_EMPREENDIMENTO = '$name'";
    $resSQLarea = $conDB->ExecutaSQL($SQLarea);
    return $conDB->NumRegistros($resSQLarea);
}

function selectAreas()
{
    $conDB = new conDB();
    $SQL = "SELECT * FROM ABACO_INTRANET.DBO.nnNegociosAreas";
    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result[] = $rstSQL;
    }
    return $result;
}

function selectAreasByCondition($types, $states, $cities, $users, $ordem, $ordering, $searchEmpreendimento)
{
    $conDB = new conDB();
    $SQL = "SELECT * FROM ABACO_INTRANET.DBO.nnNegociosAreas";
    $SQL .= " WHERE TIPO_EMPREENDIMENTO IN ($types)";
    $SQL .= " AND ESTADO IN ($states)";
    $SQL .= " AND CIDADE IN ($cities)";
    $SQL .= " AND USUARIO IN ($users)";
    if ($searchEmpreendimento !== '') {
        $SQL .= " AND NOME_EMPREENDIMENTO LIKE '%$searchEmpreendimento%'";
    }
    $SQL .= " ORDER BY $ordem $ordering";
    $resSQL = $conDB->ExecutaSQL($SQL);
    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result[] = $rstSQL;
    }
    return $result;
}

function selectAreasById($session)
{
    $conDB = new conDB();
    $SQL = "SELECT * FROM ABACO_INTRANET.DBO.nnNegociosAreas";
    $SQL .= " WHERE SESSAO_ID = '$session'";
    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result = $rstSQL;
    }
    return $result;
}

function selectTypes()
{
    $conDB = new conDB();
    $SQL = "SELECT DISTINCT TIPO_EMPREENDIMENTO AS PARAM FROM ABACO_INTRANET.dbo.nnNegociosAreas";
    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result[] = $rstSQL;
    }
    return $result;
}

function selectStates()
{
    $conDB = new conDB();
    $SQL = "SELECT DISTINCT ESTADO AS PARAM FROM ABACO_INTRANET.dbo.nnNegociosAreas";
    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result[] = $rstSQL;
    }
    return $result;
}

function selectCities($estados)
{
    $conDB = new conDB();
    $SQL = "SELECT DISTINCT CIDADE AS PARAM FROM ABACO_INTRANET.dbo.nnNegociosAreas";
    if ($estados != '') {
        $SQL .= " WHERE ESTADO IN ($estados)";
    }

    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result[] = $rstSQL;
    }
    return $result;
}

function selectUsers()
{
    $conDB = new conDB();
    $SQL = "SELECT DISTINCT USUARIO AS PARAM FROM ABACO_INTRANET.dbo.nnNegociosAreas";
    $resSQL = $conDB->ExecutaSQL($SQL);

    while ($rstSQL = $conDB->ExtraiDados($resSQL)) {
        $result[] = $rstSQL;
    }
    return $result;
}

function selectOrders()
{
    $orders[] = ['VALUE' => 'NOME_EMPREENDIMENTO', 'PARAM' => 'Nome'];
    $orders[] = ['VALUE' => 'VALOR_TOTAL_LOTE', 'PARAM' => 'Valor do Lote'];
    $orders[] = ['VALUE' => 'DATA_CADASTRO', 'PARAM' => 'Data de Cadastro'];
    $orders[] = ['VALUE' => 'TIPO_EMPREENDIMENTO', 'PARAM' => 'Tipo'];
    return $orders;
}
