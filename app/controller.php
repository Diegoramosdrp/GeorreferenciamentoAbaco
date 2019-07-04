<?php

include_once './functions.php';
include_once './areaDAO.php';
include_once './areaCoordinatesDAO.php';
include_once './areaSalesPolicyDAO.php';
include_once './areaFilesDAO.php';
include_once './importDAO.php';
include_once './formatSQL.php';

$function = $_POST['function'];
if ($_POST['function'] == '') {
    $function = $_GET['function'];
}
switch ($function) {
    case 'save':
        include './areaParams.php';
        $result = saveArea($data);
        if ($result == 1) {
            for ($i = 0; $i < count($data['COORDENADAS_AREA']) - 1; $i++) {
                saveAreaCoordinates($data['COORDENADAS_AREA'][$i], $i, $data['SESSAO_ID']);
            }
            saveSalesPolicy($data);
            echo json_encode('success');
        } else {
            echo json_encode('error');
        }
        break;

    case 'update':
        include './areaParams.php';
        $result = updateArea($_POST['session'], $data);
        if ($result == 1) {
            echo json_encode('success');
        } else {
            echo json_encode('error');
        }
        break;

    case 'delete':
        break;

    case 'fileExists':
        $exists = fileExists($_POST['fileName']);
        if ($exists) {
            $result = 'success';
        } else {
            $result = 'error';
        }
        echo json_encode($result);
        break;

    case 'uploadFiles':
        include './areaParams.php';

        foreach ($data['FILES'] as $value) {
            saveAreaFiles($value, $data['SESSAO_ID']);
        }
        break;

    case 'downloadFiles':
        downloadFile($_GET['fileName']);
        break;

    case 'deleteFile':
        $deleted = deleteFile($_POST['session'], $_POST['fileName']);
        if ($deleted > 0) {
            deleteFileInFolder($_POST['fileName']);
            $result = 'success';
        } else {
            $result = 'error';
        }
        echo json_encode($result);
        break;

    case 'searchByName':
        $result = selectByName($_POST['name']);
        if ($result == 1) {
            echo json_encode('found');
        } else {
            echo json_encode('not found');
        }
        break;

    case 'selectAreasByCondition':
        $types = formatParams($_POST['types']);
        $states = formatParams($_POST['states']);
        $cities = formatParams($_POST['cities']);
        $users = formatParams($_POST['users']);
        $ordem = formatParams($_POST['ordem']);
        $result = selectAreasByCondition($types, $states, $cities, $users,  $ordem, $_POST['ordering'], $_POST['searchEmpreendimento']);

        if (count($result) != 0) {
            if (count($result) > 1) {
                $quantity = 'Exibindo ' . count($result) . ' empreendimentos';
            } else {
                $quantity = 'Exibindo ' . count($result) . ' empreendimento';
            }
            include '../content/countArea.php';
            foreach ($result as $key => $value) {
                $icon = getIcon($value['TIPO_EMPREENDIMENTO'], $value['TIPO_LOTE_AVULSO']);
                $coordinate = explode(',', $value['COORDENADAS']);
                $coordinatePoints = selectAreaCoordinates($value['SESSAO_ID']);
                $result = selectSalesPolicy($value['SESSAO_ID']);
                $policies = checkSalesPolicy($policies);
                include '../content/listArea.php';
            }
        } else {
            $quantity = 'SEM REGISTROS';
            include '../content/countArea.php';
        }

        break;

    case 'selectAreaById':
        $area = selectAreasById($_POST['session']);
        $area['POLICY'] = selectSalesPolicy($area['SESSAO_ID']);
        echo json_encode($area);
        break;

    case 'selectAllFiles':
        $files = selectAllFiles($_POST['session']);
        include '../content/listAllFiles.php';
        break;

    case 'selectFiles':
        $files = selectFilesAreas($_POST['session']);
        include '../content/listFiles.php';
        break;

    case 'selectImages':
        $images = selectImagensAreas($_POST['session']);
        include '../content/listImages.php';
        break;

    case 'selectTypes':
        $result = selectTypes();
        echo json_encode($result);
        break;

    case 'selectStates':
        $result = selectStates();
        echo json_encode($result);
        break;

    case 'selectCities':
        $estados = formatParams($_POST['states']);
        $result = selectCities($estados);
        echo json_encode($result);
        break;

    case 'selectUsers':
        $result = selectUsers();
        echo json_encode($result);
        break;

    case 'selectOrders':
        $result = selectOrders();
        echo json_encode($result);
        break;

    case 'clearSession':
        session_regenerate_id();
        break;

    case 'renderFileImport':
        $result = renderListImport($_FILES['import']['tmp_name']);
        $removed = removeRowNull($result);
        $rendered = appendDefaultsValues($removed);
        $helps = getHelpsDefinitions();
        $headers = getHeadersImport();
        $alphabet = getAlphabet();
        include '../content/listImport.php';
        break;

    default:
        echo 'Função Invalida';
        break;
}
