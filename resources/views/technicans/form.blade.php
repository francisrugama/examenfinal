<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del técnico"
                    value="{{ old('name', $technicans->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="phone">Teléfono</label>
                <input type="text" id="phone" name="phone" class="form-control form-control-alternative"
                    placeholder="Ingresar teléfono del técnico"
                    value="{{ old('phone', $technicans->phone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mail">Correo</label>
                <input type="text" id="mail" name="mail" class="form-control form-control-alternative"
                    placeholder="Ingresar el correo del técnico"
                    value="{{ old('mail', $technicans->mail) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hire_date">Fecha de contrato</label>
                <input type="date" id="hire_date" name="hire_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha de contrato"
                    value="{{ old('hire_date', $technicans->hire_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status">Estado</label>
                <input type="text" id="status" name="status" class="form-control form-control-alternative"
                    placeholder="Ingresar el estado"
                    value="{{ old('status', $technicans->status) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="years_experience">Años de experiencia</label>
                <input type="text" id="years_experience" name="years_experience" class="form-control form-control-alternative"
                    placeholder="Ingresar la años de experiencia"
                    value="{{ old('years_experience', $technicans->years_experience) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="certifications">Certificado</label>
                <input type="text" id="certifications" name="certifications" class="form-control form-control-alternative"
                    placeholder="Ingresar el certificado"
                    value="{{ old('certifications', $technicans->certifications) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hourly_rate">Tarifa por hora</label>
                <input type="text" id="hourly_rate" name="hourly_rate" class="form-control form-control-alternative"
                    placeholder="Ingresar la tarifa por hora"
                    value="{{ old('hourly_rate', $technicans->hourly_rate) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="photo_url">URL de la foto</label>
                <input type="text" id="photo_url" name="photo_url" class="form-control form-control-alternative"
                    placeholder="Ingresar la url de la foto"
                    value="{{ old('photo_url', $technicans->photo_url) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="services_count">Servicio de cuenta</label>
                <input type="text" id="services_count" name="services_count" class="form-control form-control-alternative"
                    placeholder="Ingresar el servicio de cuenta"
                    value="{{ old('services_count', $technicans->services_count) }}">
            </div>
        </div>
    </div>

</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Técnico
        </button>
    </div>
</div>
