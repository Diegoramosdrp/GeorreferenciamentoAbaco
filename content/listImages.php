<h6>IMAGENS</h6>
<div class="h-images overflow-auto">
    <div class="row border-top">
        <?php if (count($images) > 0) : ?>
            <div class="col-md-12 py-1 file-select">
                <?php foreach ($images as $value) : ?>
                    <?php $base64 = encodeImage($value['ARQUIVO']); ?>
                    <img src="<?php echo 'data:' . 'image/jpg' . ';base64,' . $base64 ?>" alt="<?php echo $value['ARQUIVO']; ?>" class="img-thumbnail img-upload hover mt-1" />
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="col-md-12 border-top text-center hover py-1">
                SEM IMAGENS
            </div>
        <?php endif; ?>
    </div>
</div>