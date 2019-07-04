<div class="row align-items-center">
    <div class="col-md-9">
        <button type="button" class="btn btn-info btn-sm" onclick="editCellModal();" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-list-alt" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-info btn-sm" onclick="unselectAll();" data-toggle="tooltip" data-placement="top" title="Deselecionar"><i class="fas fa-trash-restore-alt"></i></button>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-info btn-sm" onclick="swapColsTips('left');" data-toggle="tooltip" data-placement="top" title="Mover Para Inicio"><i class="fa fa-angle-double-left" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-info btn-sm" onclick="swapCols('left');" data-toggle="tooltip" data-placement="top" title="Mover Para Esquerda"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-info btn-sm" onclick="swapCols('right');" data-toggle="tooltip" data-placement="top" title="Mover Para Direita"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-info btn-sm" onclick="swapColsTips('right');" data-toggle="tooltip" data-placement="top" title="Mover Para Final"><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
        <button type="button" class="btn btn-info btn-sm" onclick="removeHeader();" data-toggle="tooltip" data-placement="top" title="Remover Cabeçalho"><i class="fa fa-eraser" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-info btn-sm" onclick="removeSelecteds();" data-toggle="tooltip" data-placement="top" title="Remover Selecionados"><i class="fas fa-trash"></i></button>
        <button type="button" class="btn btn-info btn-sm" onclick="joinColsModal();" data-toggle="tooltip" data-placement="top" title="Unir Colunas"><i class="fa fa-columns"></i></button>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-info btn-sm btn-circle float-right" onclick="help();" data-toggle="tooltip" data-placement="top" title="Ajuda"><i class="far fa-question-circle"></i></button>
    </div>
    <div class="col-md-12 mt-2">
        <table class="table table-hover table-bordered table-responsive table-import table-header-fixed">
            <thead>
                <tr class="nowrap table-success">
                    <th id="NUM" class="mt-0">#</th>
                    <?php foreach ($headers as $key => $value) : ?>
                        <th id="<?php echo $value['ID']; ?>" onclick="selectCol(this.id);"><?php echo $value['HEADER_NAME'] . '<br><hr />' . $value['ID']; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rendered as $key => $value) : ?>
                    <tr id="<?php echo $key; ?>" class="nowrap">
                        <td id="<?php echo 'NUM' . $key; ?>" class="table-success" onclick="selectRow(<?php echo $key; ?>)"><?php echo $key; ?></td>
                        <?php for ($i = 0; $i < count($headers); $i++) : ?>
                            <td id="<?php echo $alphabet[$i] . $key; ?>" class="table-info" style="width: 200px" draggable="true" onclick="selectCell('<?php echo $alphabet[$i] . $key; ?>')"><?php echo $value[$i]; ?></td>
                        <?php endfor; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <button type="button" class="btn btn-success btn-sm float-right" onclick="sendImport();">Enviar</button>
    </div>
</div>

<?php include_once 'modals.php'; ?>