<?php

function formatString($string)
{
    return str_replace("'", "[1]", $string);
}

function formatFloat($float)
{
    return str_replace(',', '.', str_replace('.', '', $float));
}

function formatDate($date)
{
    return str_replace("-", "", $date);
}

function convertString($string)
{
    return str_replace("[1]", "'", $string);
}

function convertToReal($value)
{
    return 'R$ ' . number_format($value, 2, ',', '.');
}

function convertToMeters($value, $type)
{
    if ($type === 1) {
        return $value . ' M²';
    } else {
        return $value . ' M';
    }
}

function formatLink($link)
{
    if (substr($link, 0, 7) === 'http://' || substr($link, 0, 8) === 'https://') {
        return $link;
    } else {
        return 'http://' . $link;
    }
}

function formatDateLocale($date)
{
    $pattern = 'd/m/Y';
    return date_format($date,  $pattern);
}

function defineTipoEmpreendimento($tipoEmpreendimento, $tipo)
{
    if ($tipoEmpreendimento == 'Lote Avulso') {
        return $formated = $tipoEmpreendimento . ' - ' . $tipo;
    } else {
        return $formated = $tipoEmpreendimento;
    }
}

function validateUser($user)
{
    if ($user === null) {
        return 'Externo';
    } else {
        return $user;
    }
}

function validateTipoEmpreendimento($empreendimento, $tipo)
{
    if ($empreendimento != 'Lote Avulso') {
        return '-----';
    } else {
        return $tipo;
    }
}

function formatCoordinatesPoints($coordinates)
{
    return explode('|', $coordinates);
}

function stdClassConvert($stdClass)
{
    foreach (json_decode($stdClass) as $key => $value) {
        $converted[$key] = (array) $value;
    }
    return $converted;
}

function getIcon($tipoEmpreendimento, $tipo)
{
    switch ($tipoEmpreendimento) {
        case 'Ábaco':
            return 'abaco.png';
            break;

        case 'Lote Avulso':
            if ($tipo === 'Compra') {
                return 'coin.png';
            }
            return 'partner.png';
            break;

        case 'Empreendimento Concorrente':
            return 'swords.png';
            break;

        case 'Gleba':
            return 'binoculars.png';
            break;

        default:
            return 'question.png';
            break;
    }
}

function getFileIcon($icon)
{
    $icons = array('DOC', 'DOCX', 'XLS', 'XLSX', 'PDF', 'JPG', 'JPEG', 'TXT', 'PNG');

    foreach ($icons as $key => $value) {
        if (strcmp(strtolower($value), $icon) == 0) {
            return $value;
        }
    }
    return 'ERROR';
}

function encodeImage($image)
{
    $path = 'c:/arquivos_nn_area/';
    $content = file_get_contents($path . $image);
    return base64_encode($content);
}

function getHeadersImport()
{
    $headers = [
        ['HEADER_NAME' => 'Nome do Empreendimento', 'ID' => 'A', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Telefone', 'ID' => 'B', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Contato da Área', 'ID' => 'C', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'E-mail', 'ID' => 'D', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Site', 'ID' => 'E', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Tipo de Empreendimento', 'ID' => 'F', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Tipo', 'ID' => 'G', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Estágio do Empreendimento', 'ID' => 'H', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Nome do Loteador', 'ID' => 'I', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Valor Total Lote', 'ID' => 'J', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Tamanho Padrão - Área(M²)', 'ID' => 'K', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Tamanho Padrão - Frente(M)', 'ID' => 'L', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Valor Lote - Padrão(M²)', 'ID' => 'M', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Valor Lote - Frente(M)', 'ID' => 'N', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Tamanho da Gleba - Poligono(M²)', 'ID' => 'O', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Tamanho da Gleba - Matricula(M)', 'ID' => 'P', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Quantidades - Lotes', 'ID' => 'Q', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Quantidades - Estoque', 'ID' => 'R', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Descrição da Área', 'ID' => 'S', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Endereço Informado', 'ID' => 'T', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Endereço Mapeado', 'ID' => 'U', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Estado', 'ID' => 'V', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Cidade', 'ID' => 'W', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Coordenadas', 'ID' => 'X', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Data Referência', 'ID' => 'Y', 'INPUT_NAME' => 'A'],
        ['HEADER_NAME' => 'Observações', 'ID' => 'Z', 'INPUT_NAME' => 'A'],
    ];
    return $headers;
}

function getAlphabet()
{
    $alphabet = [
        0 => 'A',
        1 => 'B',
        2 => 'C',
        3 => 'D',
        4 => 'E',
        5 => 'F',
        6 => 'G',
        7 => 'H',
        8 => 'I',
        9 => 'J',
        10 => 'K',
        11 => 'L',
        12 => 'M',
        13 => 'N',
        14 => 'O',
        15 => 'P',
        16 => 'Q',
        17 => 'R',
        18 => 'S',
        19 => 'T',
        20 => 'U',
        21 => 'V',
        22 => 'W',
        23 => 'X',
        24 => 'Y',
        25 => 'Z',
    ];
    return $alphabet;
}

function getHelpsDefinitions()
{
    $helps = [
        ['NAME' => 'Editar', 'DESCRIPTION' => 'Edita a celula selecionada', 'ICON' => 'fa fa-list-alt'],
        ['NAME' => 'Deselecionar', 'DESCRIPTION' => 'Limpa todas as seleções', 'ICON' => 'fas fa-trash-restore-alt'],
        ['NAME' => 'Mover Para Inicio', 'DESCRIPTION' => 'Move a coluna selecionada para a ponta ínicial da tabela', 'ICON' => 'fa fa-angle-double-left'],
        ['NAME' => 'Mover Para Esquerda', 'DESCRIPTION' => 'Move para a esquerda a coluna selecionada', 'ICON' => 'fa fa-angle-left'],
        ['NAME' => 'Mover Para Direita', 'DESCRIPTION' => 'Move para a direita a coluna selecionada', 'ICON' => 'fa fa-angle-right'],
        ['NAME' => 'Mover Para Final', 'DESCRIPTION' => 'Move a coluna selecionada para a ponta final da tabela', 'ICON' => 'fa fa-angle-double-right'],
        ['NAME' => 'Remover Cabeçalho', 'DESCRIPTION' => 'Remove o cabeçalho da tabela (Primeira linha)', 'ICON' => 'fa fa-eraser'],
        ['NAME' => 'Remover Selecionados', 'DESCRIPTION' => 'Remove linha, coluna ou celula selecionada', 'ICON' => 'fas fa-trash'],
        ['NAME' => 'Unir Colunas', 'DESCRIPTION' => 'Une a coluna selecionada com outra', 'ICON' => 'fa fa-columns']
    ];
    return $helps;
}
