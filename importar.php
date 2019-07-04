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
                <h5>Novos Negócios - Importar Áreas</h5>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-body pb-0">
                        <div class="form-row">
                            <div class="col-md-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="import" accept=".xls,.xlsx,.kml">
                                    <label class="custom-file-label" for="import" data-browse="Selecionar">Selecione Arquivo</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button id="importFileSelect" type="submit" class="btn btn-info" onclick="showDataToImport();">Importar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="plupload_wrapper">Inclua arquivo no formato Excel (.XLS, .XLSX) ou Google Earth (.KML)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="display: none" id='importGrid'>
            <div class="col-md-12 mt-4">
                <div class="card bg-light">
                    <div class="card-body" id="listImport">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</body>

</html>

<?php include_once './content/headers.php'; ?>