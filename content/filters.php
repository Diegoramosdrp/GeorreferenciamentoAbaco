<div class="row">
    <div class="col-md-2">
        <label for="types" class="mb-0">TIPO :</label>
        <select class="form-control" id="types" multiple="" onchange="loadAreas();"></select>
    </div>
    <div class="col-md-2">
        <label for="states" class="mb-0">ESTADO :</label>
        <select class="form-control" id="states" multiple="" onchange="loadAreas();"></select>
    </div>
    <div class="col-md-2">
        <label for="cities" class="mb-0">CIDADE :</label>
        <select class="form-control" id="cities" multiple="" onchange="loadAreas();"></select>
    </div>
    <div class="col-md-2">
        <label for="users" class="mb-0">USUARIO :</label>
        <select class="form-control" id="users" multiple="" onchange="loadAreas();"></select>
    </div>
    <div class="col-md-2">
        <label for="ordems" class="mb-0">ORDEM :</label>
        <select class="form-control show-tick" id="ordems" onchange="loadAreas();"></select>
    </div>
    <div class="col-md-1 align-self-end">
        <select class="form-control show-tick selectpicker" id="ordering" onchange="loadAreas();">
            <option data-icon="fas fa-arrow-alt-circle-down" value="ASC"></option>
            <option data-icon="fas fa-arrow-alt-circle-up" value="DESC"></option>
        </select>
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-4">
        <label for="searchEmpreendimento" class="mb-0">BUSCAR:</label>
        <input type="text" class="form-control form-control-sm2" id="searchEmpreendimento" name="searchEmpreendimento" onkeyup="loadAreas();" />
    </div>
</div>