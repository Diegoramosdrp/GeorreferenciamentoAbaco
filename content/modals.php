<div class="modal fade" tabindex="-1" role="dialog" id="editCellModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Celula</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-1">
                    <label for="cellEdit" class="mb-0">Valor</label>
                    <input type="text" class="form-control form-control-sm2" id="cellEdit" name="cellEdit" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCell();">Atualizar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCellAll();">Atualizar Todos</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="editCellTipoEmpreendimentoModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Celula</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-1">
                    <label for="TIPO_EMPREENDIMENTO" class="mb-0">Tipo de Empreendimento</label>
                    <select class="form-control form-control-sm2" id="TIPO_EMPREENDIMENTO" name="TIPO_EMPREENDIMENTO">
                        <option value="Abaco">Ábaco</option>
                        <option value="Lote Avulso">Lote Avulso</option>
                        <option value="Empreendimento Concorrente">Empreendimento Concorrente</option>
                        <option value="Gleba">Gleba</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCell();">Atualizar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCellAll();">Atualizar Todos</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="editCellTipoModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Celula</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-1">
                    <label for="TIPO_LOTE_AVULSO" class="mb-0">Tipo</label>
                    <select class="form-control form-control-sm2" id="TIPO_LOTE_AVULSO" name="TIPO_LOTE_AVULSO" disabled="">
                        <option value="Compra">Compra</option>
                        <option value="Parceria">Parceria</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCell();">Atualizar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCellAll();">Atualizar Todos</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="editCellEstagioModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Celula</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-1">
                    <label for="ESTAGIO_EMPREENDIMENTO" class="mb-0">Estágio do Empreendimento</label>
                    <select class="form-control form-control-sm2" id="ESTAGIO_EMPREENDIMENTO" name="ESTAGIO_EMPREENDIMENTO">
                        <option value="Em Negociação">Em Negociação</option>
                        <option value="Em Prospecção">Em Prospecção</option>
                        <option value="Projeto Aprovado">Projeto Aprovado</option>
                        <option value="Em Obras">Em Obras</option>
                        <option value="Obra Concluída">Obra Concluída</option>
                        <option value="Em Obras e Vendas">Em Obras e Vendas</option>
                        <option value="Somente Obra">Somente Obra</option>
                        <option value="Somente Venda">Somente Venda</option>
                        <option value="100% Vendido">100% Vendido</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCell();">Atualizar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCellAll();">Atualizar Todos</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="editCellDataReferenciaModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Celula</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-1">
                    <label for="DATA_REFERENCIA" class="mb-0">Data Referência <small class="text-danger">*</small></label>
                    <input type="date" class="form-control form-control-sm2" id="DATA_REFERENCIA" name="DATA_REFERENCIA" value="<?php echo date('Y-m-d') ?>" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCell();">Atualizar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateCellAll();">Atualizar Todos</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="editCellJoinModal">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Coluna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 border border-right-0 align-middle text-center font-weight-bold py-3">Coluna Selecionada</div>
                        <div class="col-md-4 border align-middle text-center font-weight-bold py-3">Coluna para Juntar</div>
                        <div class="col-md-4 border border-left-0 align-middle text-center font-weight-bold py-3">Tipo de Junção</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 border border-top-0 border-right-0 align-middle text-center py-3" id="colSelectedName"></div>
                        <div class="col-md-4 border border-top-0 align-middle text-center py-3"><select class="form-control form-control-sm2" id="COL_IMPORTS" name="COL_IMPORTS" onchange="fillTableJoinCols();"></select></div>
                        <div class="col-md-4 border border-top-0 border-left-0 align-middle text-center py-3">
                            <select class="form-control form-control-sm2" id="COL_SEPARATOR" name="COL_SEPARATOR" onchange="fillTableJoinCols();">
                                <option value=",">(,) - Virgula</option>
                                <option value=" -">(-) - Hifen</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" id="colSelectedGrid">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="joinCols();">Unir</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="helpImport">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajuda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-1">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <tbody>
                                    <?php foreach ($helps as $key => $value) : ?>
                                        <tr>
                                            <td style="width: 10px;">
                                                <div class="bg-info btn-sm text-white text-center">
                                                    <i class="<?php echo $value['ICON']; ?>" aria-hidden="true"></i>
                                                </div>
                                            </td>
                                            <td class="align-middle"><?php echo $value['NAME']; ?></td>
                                            <td class="align-middle"><?php echo $value['DESCRIPTION']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>