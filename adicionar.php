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
                <h5>Novos Negócios - Cadastro de Áreas</h5>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-11">
                                        <input type="text" id="searchAddress" name="searchAddress" class="form-control form-control-sm" placeholder="Insira o endereço completo da área..." autofocus="" autocomplete="off" />
                                    </div>
                                    <div class="col-md-1">
                                        <button type="submit" class="btn btn-info btn-sm" onclick="search();"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4" id="form" style="display: none">
                    <div class="col-md-12">
                        <div class="card bg-light">
                            <div class="card-body">
                                <?php include './content/form.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div id="map" class="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4" id="files" style="display: none">
                    <div class="col-md-12">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div id="uploader"></div>
                                <span class="plupload_wrapper">Matrícula, arquivos de georreferenciamento, fotos, documentações em geral, e etc.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</body>

</html>

<?php include_once './content/headers.php'; ?>