<?php

function formatAreaSave($data)
{
    $format['COLUMNS'] = "SESSAO_ID, NOME_EMPREENDIMENTO, TELEFONE, CONTATO_AREA, EMAIL,";
    $format['COLUMNS'] .= " SITE, TIPO_EMPREENDIMENTO, TIPO_LOTE_AVULSO, ESTAGIO_EMPREENDIMENTO, NOME_LOTEADOR,";
    $format['COLUMNS'] .= " VALOR_TOTAL_LOTE, VALOR_LOTE_PADRAO_M2, VALOR_FRENTE, TAMANHO_PADRAO, TAMANHO_FRENTE,";
    $format['COLUMNS'] .= " TAMANHO_GEBLA, AREA_MATRICULA, QUANTIDADE_LOTE, QUANTIDADE_ESTOQUE, DESCRICAO_AREA,";
    $format['COLUMNS'] .= " ENDERECO_MAPEADO, ENDERECO_INFORMADO, ESTADO, CIDADE, COORDENADAS,";
    $format['COLUMNS'] .= " OBSERVACOES, USUARIO, DATA_CADASTRO, DATA_REFERENCIA";

    $format['VALUES'] = "'" . $data['SESSAO_ID'] . "',";
    $format['VALUES'] .= " '" . $data['NOME_EMPREENDIMENTO'] . "',";
    $format['VALUES'] .= " '" . $data['TELEFONE'] . "',";
    $format['VALUES'] .= " '" . $data['CONTATO_AREA'] . "',";
    $format['VALUES'] .= " '" . $data['EMAIL'] . "',";
    $format['VALUES'] .= " '" . $data['SITE'] . "',";
    $format['VALUES'] .= " '" . $data['TIPO_EMPREENDIMENTO'] . "',";
    $format['VALUES'] .= " '" . $data['TIPO_LOTE_AVULSO'] . "',";
    $format['VALUES'] .= " '" . $data['ESTAGIO_EMPREENDIMENTO'] . "',";
    $format['VALUES'] .= " '" . $data['NOME_LOTEADOR'] . "',";
    $format['VALUES'] .= $data['VALOR_TOTAL_LOTE'] . ",";
    $format['VALUES'] .= $data['VALOR_LOTE_PADRAO_M2'] . ",";
    $format['VALUES'] .= $data['VALOR_FRENTE'] . ",";
    $format['VALUES'] .= " '" . $data['TAMANHO_PADRAO'] . "',";
    $format['VALUES'] .= " '" . $data['TAMANHO_FRENTE'] . "',";
    $format['VALUES'] .= " '" . $data['TAMANHO_GEBLA'] . "',";
    $format['VALUES'] .= " '" . $data['AREA_MATRICULA'] . "',";
    $format['VALUES'] .= $data['QUANTIDADE_LOTE'] . ",";
    $format['VALUES'] .= $data['QUANTIDADE_ESTOQUE'] . ",";
    $format['VALUES'] .= " '" . $data['DESCRICAO_AREA'] . "',";
    $format['VALUES'] .= " '" . $data['ENDERECO_MAPEADO'] . "',";
    $format['VALUES'] .= " '" . $data['ENDERECO_INFORMADO'] . "',";
    $format['VALUES'] .= " '" . $data['ESTADO'] . "',";
    $format['VALUES'] .= " '" . $data['CIDADE'] . "',";
    $format['VALUES'] .= " '" . $data['COORDENADAS'] . "',";
    $format['VALUES'] .= " '" . $data['OBSERVACOES'] . "',";
    $format['VALUES'] .= " '" . $data['USUARIO'] . "',";
    $format['VALUES'] .= " GETDATE()" . ",";
    $format['VALUES'] .= " '" . $data['DATA_REFERENCIA'] . "'";

    return $format;
}

function formatAreaUpdate($data)
{
    $format['VALUES'] = " NOME_EMPREENDIMENTO = '" . $data['NOME_EMPREENDIMENTO'] . "',";
    $format['VALUES'] .= " TELEFONE = '" . $data['TELEFONE'] . "',";
    $format['VALUES'] .= " CONTATO_AREA = '" . $data['CONTATO_AREA'] . "',";
    $format['VALUES'] .= " EMAIL = '" . $data['EMAIL'] . "',";
    $format['VALUES'] .= " SITE = '" . $data['SITE'] . "',";
    $format['VALUES'] .= " TIPO_EMPREENDIMENTO = '" . $data['TIPO_EMPREENDIMENTO'] . "',";
    $format['VALUES'] .= " TIPO_LOTE_AVULSO = '" . $data['TIPO_LOTE_AVULSO'] . "',";
    $format['VALUES'] .= " ESTAGIO_EMPREENDIMENTO = '" . $data['ESTAGIO_EMPREENDIMENTO'] . "',";
    $format['VALUES'] .= " NOME_LOTEADOR = '" . $data['NOME_LOTEADOR'] . "',";
    $format['VALUES'] .= " VALOR_TOTAL_LOTE = " . $data['VALOR_TOTAL_LOTE'] . ",";
    $format['VALUES'] .= " VALOR_LOTE_PADRAO_M2 = " . $data['VALOR_LOTE_PADRAO_M2'] . ",";
    $format['VALUES'] .= " VALOR_FRENTE = " . $data['VALOR_FRENTE'] . ",";
    $format['VALUES'] .= " TAMANHO_PADRAO = '" . $data['TAMANHO_PADRAO'] . "',";
    $format['VALUES'] .= " TAMANHO_FRENTE = '" . $data['TAMANHO_FRENTE'] . "',";
    $format['VALUES'] .= " TAMANHO_GEBLA = '" . $data['TAMANHO_GEBLA'] . "',";
    $format['VALUES'] .= " AREA_MATRICULA = '" . $data['AREA_MATRICULA'] . "',";
    $format['VALUES'] .= " QUANTIDADE_LOTE = " . $data['QUANTIDADE_LOTE'] . ",";
    $format['VALUES'] .= " QUANTIDADE_ESTOQUE = " . $data['QUANTIDADE_ESTOQUE'] . ",";
    $format['VALUES'] .= " DESCRICAO_AREA = '" . $data['DESCRICAO_AREA'] . "',";
    $format['VALUES'] .= " ENDERECO_MAPEADO = '" . $data['ENDERECO_MAPEADO'] . "',";
    $format['VALUES'] .= " ENDERECO_INFORMADO = '" . $data['ENDERECO_INFORMADO'] . "',";
    $format['VALUES'] .= " ESTADO = '" . $data['ESTADO'] . "',";
    $format['VALUES'] .= " CIDADE = '" . $data['CIDADE'] . "',";
    $format['VALUES'] .= " COORDENADAS = '" . $data['COORDENADAS'] . "',";
    $format['VALUES'] .= " OBSERVACOES = '" . $data['OBSERVACOES'] . "',";
    $format['VALUES'] .= " DATA_ALTERACAO = GETDATE(),";
    $format['VALUES'] .= " DATA_REFERENCIA = '" . $data['DATA_REFERENCIA'] . "'";

    return $format;
}

function formatAreaCoordinates($coordinates, $position, $sessaoId)
{
    $format['VALUES'] = "'" . $coordinates . "', ";
    $format['VALUES'] .= $position . ", ";
    $format['VALUES'] .= " '" . $sessaoId . "'";

    return $format;
}

function formatSalesPolicy($policys)
{
    $format['VALUES'] = "'" . $policys['SESSAO_ID'] . "', ";
    $format['VALUES'] .= $policys['prazo24x'] . ", ";
    $format['VALUES'] .= $policys['prazo48x'] . ", ";
    $format['VALUES'] .= $policys['prazo60x'] . ", ";
    $format['VALUES'] .= $policys['prazo100x'] . ", ";
    $format['VALUES'] .= $policys['prazoacima100x'] . ", ";
    $format['VALUES'] .= $policys['jurosnao'] . ", ";
    $format['VALUES'] .= $policys['juros12an'] . ", ";
    $format['VALUES'] .= $policys['jurosa12an'] . ", ";
    $format['VALUES'] .= $policys['correcaocom'] . ", ";
    $format['VALUES'] .= $policys['correcaosem'];

    return $format;
}

function formatAreaFiles($files, $sessaoId)
{
    $format['VALUES'] = "'" . $sessaoId . "', ";
    $format['VALUES'] .= "'" . $files['filename'] . "', ";
    $format['VALUES'] .= "'" . $files['fileformat'] . "', ";
    $format['VALUES'] .= " GETDATE()";

    return $format;
}

function formatParamsIn($params)
{
    $param = '';
    foreach ($params as $key => $value) {
        $param .= "'" . $value . "',";
    }
    return rtrim($param, ',');
}

function formatParams($params)
{
    $formated = str_replace("{", "'", $params);
    $formated = str_replace("}", "'", $formated);
    return $formated;
}

function checkSalesPolicy($policies)
{
    $check['POLICY']['PRAZO'] = '';
    $check['POLICY']['JUROS'] = '';
    $check['POLICY']['CORRECAO'] = '';

    $policies['PRAZO_24X'] == 1 ? $check['POLICY']['PRAZO'] .= '24X <br/>' : $check['POLICY']['PRAZO'] .= '';
    $policies['PRAZO_48X'] == 1 ? $check['POLICY']['PRAZO'] .= '48X <br/>' : $check['POLICY']['PRAZO'] .= '';
    $policies['PRAZO_60X'] == 1 ? $check['POLICY']['PRAZO'] .= '60X <br/>' : $check['POLICY']['PRAZO'] .= '';
    $policies['PRAZO_100X'] == 1 ? $check['POLICY']['PRAZO'] .= '100X <br/>' : $check['POLICY']['PRAZO'] .= '';
    $policies['PRAZO_ACIMA_100X'] == 1 ? $check['POLICY']['PRAZO'] .= 'Acima de 100X <br/> ' : $check['POLICY']['PRAZO'] .= '';
    $policies['JUROS_NAO'] == 1 ? $check['POLICY']['JUROS'] .= 'Sem Juros <br/>' : $check['POLICY']['JUROS'] .= '';
    $policies['JUROS_12AN'] == 1 ? $check['POLICY']['JUROS'] .= '12% ao ano <br/>' : $check['POLICY']['JUROS'] .= '';
    $policies['JUROS_A12AN'] == 1 ? $check['POLICY']['JUROS'] .= 'Acima de 12% ao ano <br/>' : $check['POLICY']['JUROS'] .= '';
    $policies['CORRECAO_COM'] == 1 ? $check['POLICY']['CORRECAO'] .= 'Com Correção <br/>' : $check['POLICY']['CORRECAO'] .= '';
    $policies['CORRECAO_SEM'] == 1 ? $check['POLICY']['CORRECAO'] .= 'Sem Correção <br/>' : $check['POLICY']['CORRECAO'] .= '';

    $check['POLICY']['PRAZO'] == '' ? $check['POLICY']['PRAZO'] = 'Não Especificado' : '';
    $check['POLICY']['JUROS'] == '' ? $check['POLICY']['JUROS'] = 'Não Especificado' : '';
    $check['POLICY']['CORRECAO'] == '' ? $check['POLICY']['CORRECAO'] = 'Não Especificado' : '';
    return $check;
}
