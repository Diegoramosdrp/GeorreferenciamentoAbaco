<form class="form-horizontal" id="cadastraArea" name="cadastraArea" autocomplete="off" data-toggle="send">
    <h6 class="card-title"><strong>Informações:</strong></h6>
    <hr style="border-top: dashed 1px; border-color: gray;"/>
    <input type="hidden" class="form-control form-control-sm2" id="COORDENADAS_AREA" name="COORDENADAS_AREA"/>
    <div class="form-group mb-1">
        <label for="NOME_EMPREENDIMENTO" class="mb-0">Nome do Empreendimento <small class="text-danger">*</small></label>
        <input type="text" class="form-control form-control-sm2" id="NOME_EMPREENDIMENTO" name="NOME_EMPREENDIMENTO" onfocusout="validateEmpreendimento(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="TELEFONE" class="mb-0">Telefone <small class="text-danger">*</small></label>
        <input type="tel" class="form-control form-control-sm2" id="TELEFONE" name="TELEFONE" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="CONTATO_AREA" class="mb-0">Contato da Área <small class="text-danger">*</small></label>
        <input type="text" class="form-control form-control-sm2" id="CONTATO_AREA" name="CONTATO_AREA" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="EMAIL" class="mb-0">E-mail <small class="text-danger">*</small></label>
        <input type="email" class="form-control form-control-sm2" id="EMAIL" name="EMAIL" onfocusout="validateEmail(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="SITE" class="mb-0">Site <small class="text-danger">*</small></label>
        <input type="text" class="form-control form-control-sm2" id="SITE" name="SITE" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="TIPO_EMPREENDIMENTO" class="mb-0">Tipo de Empreendimento <small class="text-danger">*</small></label>
        <select class="form-control form-control-sm2" id="TIPO_EMPREENDIMENTO" name="TIPO_EMPREENDIMENTO" onchange="setFillColor(getEmpreendimento(), getTipoLote());">
            <option value="Abaco">Ábaco</option>
            <option value="Lote Avulso">Lote Avulso</option>
            <option value="Empreendimento Concorrente">Empreendimento Concorrente</option>
            <option value="Gleba">Gleba</option>
        </select>
    </div>
    <div class="form-group mb-1">
        <label for="TIPO_LOTE_AVULSO" class="mb-0">Tipo <small class="text-danger">*</small></label>
        <select class="form-control form-control-sm2" id="TIPO_LOTE_AVULSO" name="TIPO_LOTE_AVULSO" onchange="setFillColor(getEmpreendimento(), getTipoLote());" disabled="">
            <option value="Compra">Compra</option>
            <option value="Parceria">Parceria</option>
        </select>
    </div>
    <div class="form-group mb-1">
        <label for="ESTAGIO_EMPREENDIMENTO" class="mb-0">Estágio do Empreendimento <small class="text-danger">*</small></label>
        <select class="form-control form-control-sm2" id="ESTAGIO_EMPREENDIMENTO" name="ESTAGIO_EMPREENDIMENTO" onchange="setFillColor();">
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
    <div class="form-group mb-1">
        <label for="NOME_LOTEADOR" class="mb-0">Nome do Loteador <small class="text-danger">*</small></label>
        <input type="text" class="form-control form-control-sm2" id="NOME_LOTEADOR" name="NOME_LOTEADOR" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <h6 class="card-title"><strong>Politica de Venda </strong><small class="text-danger">*</small></h6>
        <div class="row">
            <div class="col-md-4">
                <label>PRAZO</label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="24X" id="prazo24x"/>
                    <span class="custom-control-label" for="prazo24x"><small>24X</small></span>
                </label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="48X" id="prazo48x"/>
                    <span class="custom-control-label" for="prazo48x"><small>48X</small></span>
                </label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="60X" id="prazo60x"/>
                    <span class="custom-control-label" for="prazo60x"><small>60X</small></span>
                </label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="100X" id="prazo100x"/>
                    <span class="custom-control-label" for="prazo100x"><small>100X</small></span>
                </label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="Acima de 100X" id="prazoacima100x"/>
                    <span class="custom-control-label" for="prazoacima100x"><small>Acima de 100X</small></span>
                </label>
            </div>
            <div class="col-md-4">
                <label>JUROS</label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="Sem Juros" id="jurosnao"/>
                    <span class="custom-control-label" for="jurosnao"><small>Sem Juros</small></span>
                </label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="12% ao ano" id="juros12an"/>
                    <span class="custom-control-label" for="juros12an"><small>12% ao ano</small></span>
                </label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="Acima de 12% ao ano" id="jurosa12an"/>
                    <span class="custom-control-label" for="jurosa12an"><small>Acima de 12% ao ano</small></span>
                </label>
            </div>
            <div class="col-md-4">
                <label>CORREÇÃO</label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="Com Correção" id="correcaocom"/>
                    <span class="custom-control-label" for="correcaocom"><small>Com Correção</small></span>
                </label>
                <label class="custom-control custom-checkbox mb-1">
                    <input class="custom-control-input" type="checkbox" value="Sem Correção" id="correcaosem"/>
                    <span class="custom-control-label" for="correcaosem"><small>Sem Correção</small></span>
                </label>
            </div>
        </div>
    </div>
    <div class="row mb-1 align-items-center">
        <div class="col-md-4">
            <label for="VALOR_TOTAL_LOTE" class="mb-1">Valor Total Lote <small class="text-danger">*</small></label>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control form-control-sm2" id="VALOR_TOTAL_LOTE" name="VALOR_TOTAL_LOTE" onkeyup="calcValues()" onfocusout="validateInput(this.id)"/>
        </div>
    </div> 
    <div class="row align-items-center">
        <div class="col-md-4 mb-align">
            <label for="TAMANHO_PADRAO" class="">Tamanho Padrão <small class="text-danger">*</small></label>
        </div>
        <div class="col-md-4 align-self-center">
            <sub>Área(M²)</sub>
            <input type="text" class="form-control form-control-sm2" id="TAMANHO_PADRAO" name="TAMANHO_PADRAO" onkeyup="calcValues()" onfocusout="validateInput(this.id)"/>
        </div>
        <div class="col-md-4">
            <sub>Frente(M)</sub>
            <input type="text" class="form-control form-control-sm2" id="TAMANHO_FRENTE" name="TAMANHO_FRENTE" onkeyup="calcValues()" onfocusout="validateInput(this.id)"/>
        </div>
    </div> 
    <div class="row align-items-center">
        <div class="col-md-4 mb-align">
            <label for="VALOR_LOTE_PADRAO_M2">Valor Lote <small class="text-danger">*</small></label>
        </div>
        <div class="col-md-4">
            <sub>Padrão(M²)</sub>
            <input type="text" class="form-control form-control-sm2" id="VALOR_LOTE_PADRAO_M2" name="VALOR_LOTE_PADRAO_M2" readonly="" onfocusout="validateInput(this.id)"/>
        </div>
        <div class="col-md-4">
            <sub>Frente(M)</sub>
            <input type="text" class="form-control form-control-sm2" id="VALOR_FRENTE" name="VALOR_FRENTE" readonly="" onfocusout="validateInput(this.id)"/>
        </div>
    </div> 
    <div class="row align-items-center">
        <div class="col-md-4 mb-align">
            <label for="TAMANHO_GEBLA">Tamanho da Gleba <small class="text-danger">*</small></label>
        </div>
        <div class="col-md-4">
            <sub>Poligono(M²)</sub>
            <input type="text" class="form-control form-control-sm2" id="TAMANHO_GEBLA" name="TAMANHO_GEBLA" readonly="" onfocusout="validateInput(this.id)"/>
        </div>
        <div class="col-md-4">
            <sub>Matricula(M²)</sub>
            <input type="text" class="form-control form-control-sm2" id="AREA_MATRICULA" name="AREA_MATRICULA" onfocusout="validateInput(this.id)"/>
        </div>
    </div> 
    <div class="row align-items-center">
        <div class="col-md-4 mb-align">
            <label for="QUANTIDADE_LOTE">Quantidades <small class="text-danger">*</small></label>
        </div>
        <div class="col-md-4">
            <sub>Lotes</sub>
            <input type="text" class="form-control form-control-sm2" id="QUANTIDADE_LOTE" name="QUANTIDADE_LOTE" onfocusout="validateInput(this.id)"/>
        </div>
        <div class="col-md-4">
            <sub>Estoque</sub>
            <input type="text" class="form-control form-control-sm2" id="QUANTIDADE_ESTOQUE" name="QUANTIDADE_ESTOQUE" onfocusout="validateInput(this.id)"/>
        </div>
    </div> 
    <div class="form-group mb-2">
        <label for="DESCRICAO_AREA" class="mb-0">Descrição da Área <small class="text-danger">*</small></label>
        <textarea class="form-control form-control-sm2" name="DESCRICAO_AREA" id="DESCRICAO_AREA" cols="10" rows="3" maxlength="8000" onfocusout="validateInput(this.id)"></textarea>
    </div>
    <div class="form-group mb-1">
        <label for="ENDERECO_INFORMADO" class="mb-0">Endereço Informado <small class="text-danger">*</small></label>
        <input type="text" class="form-control form-control-sm2" id="ENDERECO_INFORMADO" name="ENDERECO_INFORMADO" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="ENDERECO_MAPEADO" class="mb-0">Endereço Mapeado</label>
        <input type="text" class="form-control form-control-sm2" id="ENDERECO_MAPEADO" name="ENDERECO_MAPEADO" readonly="readonly" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="ESTADO" class="mb-0">Estado</label>
        <input type="text" class="form-control form-control-sm2" id="ESTADO" name="ESTADO" readonly="readonly" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="CIDADE" class="mb-0">Cidade</label>
        <input type="text" class="form-control form-control-sm2" id="CIDADE" name="CIDADE" readonly="readonly" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="COORDENADAS" class="mb-0">Coordenadas</label>
        <input type="text" class="form-control form-control-sm2" id="COORDENADAS" name="COORDENADAS" readonly="readonly" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-1">
        <label for="DATA_REFERENCIA" class="mb-0">Data Referência <small class="text-danger">*</small></label>
        <input type="date" class="form-control form-control-sm2" id="DATA_REFERENCIA" name="DATA_REFERENCIA" value="<?php echo date('Y-m-d') ?>" onfocusout="validateInput(this.id)"/>
    </div>
    <div class="form-group mb-2">
        <label for="OBSERVACOES" class="mb-0">Observações <small class="text-danger">*</small></label>
        <textarea class="form-control form-control-sm2" name="OBSERVACOES" id="OBSERVACOES" cols="10" rows="3" maxlength="8000" onfocusout="validateInput(this.id)"></textarea>
        <small>Insira informações adicionais relevantes como adiantamentos, documentação, negociação e etc.</small>
    </div>
    <hr style="border-top: dashed 1px; border-color: gray;"/>
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mt-2">
                <button id="save" name="save" type="button" class="btn btn-success btn-width btn-form" onclick="saveArea();">Enviar</button>
                <button id="delete" name="delete" type="button" class="btn btn-danger btn-width btn-form" onclick="removeArea();">Excluir</button>
                <button id="update" name="update" type="button" class="btn btn-info btn-width btn-form" onclick="updateArea('<?php echo $_GET['id']; ?>');">Atualizar</button>
            </div>
        </div>
    </div>
</form>