<h6>ARQUIVOS</h6>
<div class="h-files overflow-auto">
    <div class="row">
        <?php if (count($files) > 0) : ?>
            <?php foreach ($files as $value) : ?>
                <div class="col-md-12 border-top text-truncate hover py-1 file-select" onclick="downloadFile('<?php echo utf8_encode($value['ARQUIVO']); ?>')">
                    <img src="lib/img/files/<?php echo getFileIcon($value['FORMATO']); ?>.png" class="img-icon" />
                    <?php echo utf8_encode($value['ARQUIVO']); ?>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-md-12 border-top text-center hover py-1">
                SEM DOCUMENTOS
            </div>
        <?php endif; ?>
    </div>
</div>