<?php

$data['NOME_EMPREENDIMENTO'] = formatString($_POST['NOME_EMPREENDIMENTO']);
$data['TELEFONE'] = $_POST['TELEFONE'];
$data['CONTATO_AREA'] = formatString($_POST['CONTATO_AREA']);
$data['EMAIL'] = $_POST['EMAIL'];
$data['SITE'] = $_POST['SITE'];
$data['TIPO_EMPREENDIMENTO'] = $_POST['TIPO_EMPREENDIMENTO'];
$data['TIPO_LOTE_AVULSO'] = validateTipoEmpreendimento($_POST['TIPO_EMPREENDIMENTO'], $_POST['TIPO_LOTE_AVULSO']);
$data['ESTAGIO_EMPREENDIMENTO'] = $_POST['ESTAGIO_EMPREENDIMENTO'];
$data['NOME_LOTEADOR'] = formatString($_POST['NOME_LOTEADOR']);
$data['VALOR_LOTE_PADRAO_M2'] = formatFloat($_POST['VALOR_LOTE_PADRAO_M2']);
$data['VALOR_TOTAL_LOTE'] = formatFloat($_POST['VALOR_TOTAL_LOTE']);
$data['VALOR_FRENTE'] = formatFloat($_POST['VALOR_FRENTE']);
$data['QUANTIDADE_LOTE'] = $_POST['QUANTIDADE_LOTE'];
$data['QUANTIDADE_ESTOQUE'] = $_POST['QUANTIDADE_ESTOQUE'];
$data['TAMANHO_GEBLA'] = $_POST['TAMANHO_GEBLA'];
$data['AREA_MATRICULA'] = $_POST['AREA_MATRICULA'];
$data['TAMANHO_PADRAO'] = $_POST['TAMANHO_PADRAO'];
$data['TAMANHO_FRENTE'] = $_POST['TAMANHO_FRENTE'];
$data['DESCRICAO_AREA'] = formatString($_POST['DESCRICAO_AREA']);
$data['ENDERECO_INFORMADO'] = formatString($_POST['ENDERECO_INFORMADO']);
$data['ENDERECO_MAPEADO'] = formatString($_POST['ENDERECO_MAPEADO']);
$data['ESTADO'] = formatString($_POST['ESTADO']);
$data['CIDADE'] = formatString($_POST['CIDADE']);
$data['COORDENADAS'] = $_POST['COORDENADAS'];
$data['DATA_REFERENCIA'] = formatDate($_POST['DATA_REFERENCIA']);
$data['OBSERVACOES'] = formatString($_POST['OBSERVACOES']);

$data['COORDENADAS_AREA'] = formatCoordinatesPoints($_POST['COORDENADAS_AREA']);
$data['SESSAO_ID'] = session_id();
$data['USUARIO'] = validateUser($_SESSION['Usr_Nome']); 

$data['prazo24x'] = $_POST['prazo24x'];
$data['prazo48x'] = $_POST['prazo48x'];
$data['prazo60x'] = $_POST['prazo60x'];
$data['prazo100x'] = $_POST['prazo100x'];
$data['prazoacima100x'] = $_POST['prazoacima100x'];
$data['jurosnao'] = $_POST['jurosnao'];
$data['juros12an'] = $_POST['juros12an'];
$data['jurosa12an'] = $_POST['jurosa12an'];
$data['correcaocom'] = $_POST['correcaocom'];
$data['correcaosem'] = $_POST['correcaosem'];

$data['FILES'] = stdClassConvert($_POST['files']);
