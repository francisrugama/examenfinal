<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="owner_name">Nombre completo</label>
                <input type="text" id="owner_namename" name="owner_name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del dueño"
                    value="{{ old('owner_name', $vehicles->owner_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="owner_phone">Teléfono</label>
                <input type="text" id="owner_phone" name="owner_phone" class="form-control form-control-alternative"
                    placeholder="Ingresar teléfono del dueño"
                    value="{{ old('owner_phone', $vehicles->owner_phone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="owner_address">Dirección del dueño</label>
                <input type="text" id="owner_address" name="owner_address" class="form-control form-control-alternative"
                    placeholder="Ingresar la dirección del dueño"
                    value="{{ old('owner_address', $vehicles->owner_address) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="owner_mail">Correo del dueño</label>
                <input type="text" id="owner_mail" name="owner_mail" class="form-control form-control-alternative"
                    placeholder="Ingresar el correo del dueño"
                    value="{{ old('owner_mail', $vehicles->owner_mail) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="model">Modelo</label>
                <input type="text" id="model" name="model" class="form-control form-control-alternative"
                    placeholder="Ingresar el modelo del veiculo"
                    value="{{ old('model', $vehicles->model) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="brand">Marca</label>
                <input type="text" id="brand" name="brand" class="form-control form-control-alternative"
                    placeholder="Ingresar la marca del veiculo"
                    value="{{ old('brand', $vehicles->brand) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="license_plate">Licencia de conducir</label>
                <input type="text" id="license_plte" name="license_plate" class="form-control form-control-alternative"
                    placeholder="Ingresar la licencia de conducir"
                    value="{{ old('license_plate', $vehicles->license_plate) }}">
            </div>
        </div>
    </div>
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Veiculo
        </button>
    </div>
</div>
