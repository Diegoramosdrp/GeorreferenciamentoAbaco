<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABACO | Novos Negócios</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php include './content/menu.php'; ?>
            </div>
        </div>
        <div class="row page-grid">
            <div class="col-md-12">
                <h5>Novos Negócios - Áreas Cadastradas</h5>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light">
                    <div class="card-body">
                        <div id="map" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card bg-light">
                    <div class="card-body">
                        <?php include './content/filters.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card bg-light">
                    <div class="card-body overflow-auto grid-list">
                        <div class="accordion mt-1" id="listArea"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</body>

</html>

<?php include_once './content/headers.php'; ?>