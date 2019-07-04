<h6>ARQUIVOS</h6>
<div class="h-files overflow-auto">
    <div class="row">
        <?php if (count($files) > 0) : ?>
            <?php foreach ($files as $value) : ?>
                <div class="col-md-11 border-top text-truncate py-1 file-select" onclick="downloadFile('<?php echo utf8_encode($value['ARQUIVO']); ?>')">
                    <img src="lib/img/files/<?php echo getFileIcon($value['FORMATO']); ?>.png" class="img-icon" />
                    <?php echo utf8_encode($value['ARQUIVO']); ?>
                </div>
                <div class="col-md-1 border-top text-truncate py-1 file-select">
                    <button id="deleteFile" name="deleteFile" type="button" class="btn badge badge-danger" onclick="deleteFile('<?php echo $value['SESSAO']; ?>', '<?php echo $value['ARQUIVO']; ?>');">X</button>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-md-12 border-top text-center hover py-1">
                SEM ARQUIVOS
            </div>
        <?php endif; ?>
    </div>
</div>