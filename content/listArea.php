<div class="card bg-light border-bottom rounded shadow mb-2">
    <div class="card-header">
        <div class="row align-items-center hover">
            <div class="col-md-3">
                <img src="lib/img/map/<?php echo $icon; ?>" width="30" height="30" />
                <button class="btn btn-success btn-sm btn-options" type="button" data-toggle="collapse" data-target="<?php echo '#card-' . $value['SESSAO_ID']; ?>" aria-expanded="true" aria-controls="<?php echo 'card-' . $value['SESSAO_ID']; ?>" onclick="loadAllFiles('<?php echo $value['SESSAO_ID']; ?>')"><i class="fas fa-plus"></i></button>
                <a class="btn btn-info btn-sm btn-options" href="editar.php?id=<?php echo $value['SESSAO_ID']; ?>"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-info btn-sm btn-options" href="historia.php"><i class="fas fa-history"></i></a>
                <button type="button" class="btn btn-warning btn-sm btn-options"><i class="fas fa-map-marked-alt"></i></button>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8">
                        <h6>NOME EMPREENDIMENTO</h6>
                    </div>
                    <div class="col-md-4 text-right">
                        <h6>VALOR DO LOTE</h6>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-8"><?php echo convertString($value['NOME_EMPREENDIMENTO']); ?></div>
                    <div class="col-md-4 text-right"><?php echo convertToReal($value['VALOR_TOTAL_LOTE']); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div id="<?php echo 'card-' . $value['SESSAO_ID']; ?>" class="collapse" aria-labelledby="<?php echo 'card-' . $value['SESSAO_ID']; ?>" data-parent="#listArea">
        <div class="card-body pt-0">
            <div class="row align-items-start">
                <div class="col-md-6"><small>Adicionado por: <?php echo convertString($value['USUARIO']); ?></small></div>
                <div class="col-md-6 text-right"><small>Cadastrado em : <?php echo formatDateLocale($value['DATA_CADASTRO']); ?></small></div>
            </div>
            <div class="shadow card bg-light rounded-0">
                <div class="card-body pt-1 pb-1">
                    <div class="row">
                        <div class="col-md-8 border-bottom text-truncate hover">
                            <h6>ENDEREÇO</h6>
                            <small class="text-muted ml-2"><?php echo convertString($value['ENDERECO_MAPEADO']); ?></small>
                        </div>
                        <div class="col-md-4 border-bottom text-truncate hover">
                            <h6>CIDADE/ESTADO</h6>
                            <small class="text-muted ml-2"><?php echo convertString($value['CIDADE']) . ' - ' . convertString($value['ESTADO']); ?></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>TIPO</h6>
                                    <small class="text-muted ml-2"><?php echo defineTipoEmpreendimento($value['TIPO_EMPREENDIMENTO'], $value['TIPO_LOTE_AVULSO']); ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>CONTATO DA ÁREA</h6>
                                    <small class="text-muted ml-2"><?php echo convertString($value['CONTATO_AREA']); ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>TELEFONE</h6>
                                    <small class="text-muted ml-2"><?php echo $value['TELEFONE']; ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>VALOR LOTE PADRÃO / M²</h6>
                                    <small class="text-muted ml-2"><?php echo convertToReal($value['VALOR_LOTE_PADRAO_M2']); ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>TAMANHO DA GEBLA</h6>
                                    <small class="text-muted ml-2"><?php echo convertToMeters($value['TAMANHO_GEBLA'], 2); ?></small>
                                </div>
                                <div class="col-md-12 h-description hover">
                                    <h6>OBSERVAÇÕES</h6>
                                    <small class="text-muted ml-2"><?php echo convertString($value['OBSERVACOES']); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>ESTAGIO DO EMPREENDIMENTO</h6>
                                    <small class="text-muted ml-2"><?php echo convertString($value['ESTAGIO_EMPREENDIMENTO']); ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>NOME DO LOTEADOR</h6>
                                    <small class="text-muted ml-2"><?php echo convertString($value['NOME_LOTEADOR']); ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>EMAIL</h6>
                                    <small class="text-muted ml-2"><?php echo convertString($value['EMAIL']); ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>VALOR DA FRENTE</h6>
                                    <small class="text-muted ml-2"><?php echo convertToReal($value['VALOR_FRENTE']); ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>TAMANHO PADRÃO</h6>
                                    <small class="text-muted ml-2"><?php echo convertToMeters($value['TAMANHO_PADRAO'], 2); ?></small>
                                </div>
                                <div class="col-md-12 h-description hover">
                                    <h6>DESCRIÇÃO DA AREA</h6>
                                    <small class="text-muted ml-2"><?php echo convertString($value['DESCRICAO_AREA']); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>QUANTIDADES DE LOTES</h6>
                                    <small class="text-muted ml-2"><?php echo $value['QUANTIDADE_LOTE']; ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>QUANTIDADES NO ESTOQUE</h6>
                                    <small class="text-muted ml-2"><?php echo $value['QUANTIDADE_ESTOQUE']; ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>SITE</h6>
                                    <small class="text-muted ml-2"><a href="<?php echo formatLink($value['SITE']); ?>" target="_NEW">Abrir página</a></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>ÁREA CADASTRO</h6>
                                    <small class="text-muted ml-2"><?php echo convertToMeters($value['AREA_MATRICULA'], 2); ?></small>
                                </div>
                                <div class="col-md-12 border-bottom text-truncate hover">
                                    <h6>TAMANHO DA FRENTE</h6>
                                    <small class="text-muted ml-2"><?php echo convertToMeters($value['TAMANHO_FRENTE'], 1); ?></small>
                                </div>
                                <div class="col-md-12 h-description hover">
                                    <h6>POLITICA DE VENDA</h6>
                                    <div class="row">
                                        <div class="col-md-4"><small class="text-muted ml-2">PRAZO :</small></div>
                                        <div class="col-md-4"><small class="text-muted ml-2">JUROS :</small></div>
                                        <div class="col-md-4"><small class="text-muted ml-2">CORRECAO :</small></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4"><small><?php echo $policies['POLICY']['PRAZO']; ?></small></div>
                                        <div class="col-md-4"><small><?php echo $policies['POLICY']['JUROS']; ?></small></div>
                                        <div class="col-md-4"><small><?php echo $policies['POLICY']['CORRECAO']; ?></small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow card bg-light rounded-0">
                <div class="card-body pt-1 pb-1">
                    <div class="row">
                        <div class="col-md-6 border-right" id="<?php echo 'files-' . $value['SESSAO_ID']; ?>"></div>
                        <div class="col-md-6" id="<?php echo 'img-' . $value['SESSAO_ID']; ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    create_markers(<?php echo $coordinate[0]; ?>, <?php echo $coordinate[1]; ?>, '<?php echo $coordinatePoints; ?>', <?php echo json_encode($value); ?>);
</script>