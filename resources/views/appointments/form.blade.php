<h6 class="headign-small text-muted mb-4">Datos del historial de mantenimiento</h6>

<div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code_appointments">Código de cita</label>
                <input type="text" id="code_appointments" name="code_appointments" class="form-control form-control-alternative"
                    placeholder="Ingresar el código de cita"
                    value="{{ old('code_appointments', $appointments->code_appointments) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="creation_date">Fecha de creación</label>
                <input type="date" id="creation_date" name="creation_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha de creación"
                    value="{{ old('creation_date', $appointments->creation_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="notes">Notas</label>
                <input type="text" id="notes" name="notes" class="form-control form-control-alternative"
                    placeholder="Ingresar las notas"
                    value="{{ old('notes', $appointments->notes) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="confirmed">Confirmación</label>
                <input type="text" id="confirmed" name="confirmed" class="form-control form-control-alternative"
                    placeholder="Ingresar la confirmacion"
                    value="{{ old('confirmed', $appointments->confirmed) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="appointments_id">
                <i class="fas fa-graduation-cap"></i> Técnico
                <label>
                <select name="technican_id" id="technican_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un técnico</option>
                    @foreach ($technicans as $technican)
                        <option value="{{ $technican->id }}" @selected(old('technican_id', $appointments->technican_id) == $technican->id)>
                            {{ $technican->name }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="appointments_id">
                <i class="fas fa-graduation-cap"></i> Cliente
                <label>
                <select name="client_id" id="client_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un cliente</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" @selected(old('client_id', $appointments->client_id) == $client->id)>
                            {{ $client->name }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="appointments_id">
                <i class="fas fa-graduation-cap"></i> Veiculo
                <label>
                <select name="vehicle_id" id="vehicle_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un veiculo</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}" @selected(old('vehicle_id', $appointments->vehicle_id) == $vehicle->id)>
                            {{ $vehicle->name }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Cita
        </button>
    </div>
</div>
