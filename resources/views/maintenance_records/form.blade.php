<h6 class="headign-small text-muted mb-4">Datos del historial de mantenimiento</h6>

<div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="entry_date">Fecha de entrada</label>
                <input type="date" id="entry_date" name="entry_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha de entrada"
                    value="{{ old('entry_date', $maintenance_records->entry_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="delivery_date">Fecha de envio</label>
                <input type="date" id="delivery_date" name="delivery_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha de envio"
                    value="{{ old('delivery_date', $maintenance_records->delivery_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="current_mileage">Kilometraje actual</label>
                <input type="text" id="current_mileage" name="current_mileage" class="form-control form-control-alternative"
                    placeholder="Ingresar el kilometraje actual"
                    value="{{ old('current_mileage', $maintenance_records->current_mileage) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="work_description">Descricción de trabajo</label>
                <input type="text" id="work_description" name="work_description" class="form-control form-control-alternative"
                    placeholder="Ingresar la dercricción de trabajo"
                    value="{{ old('work_description', $maintenance_records->work_description) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="parts_cost">Costo de piesas</label>
                <input type="text" id="parts_cost" name="parts_cost" class="form-control form-control-alternative"
                    placeholder="Ingresar el costo de piesas"
                    value="{{ old('parts_cost', $maintenance_records->parts_cost) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="labor_cost">Costo laboral</label>
                <input type="text" id="labor_cost" name="labor_cost" class="form-control form-control-alternative"
                    placeholder="Ingresar el costo laboral"
                    value="{{ old('labor_cost', $maintenance_records->labor_cost) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total_cost">Costo total</label>
                <input type="text" id="total_cost" name="total_cost" class="form-control form-control-alternative"
                    placeholder="Ingresar el costo total"
                    value="{{ old('total_cost', $maintenance_records->total_cost) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="maintenance_record_id">
                <i class="fas fa-graduation-cap"></i> Veiculo
                <label>
                <select name="vehicle_id" id="vehicle_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un veiculo</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}" @selected(old('vehicle_id', $maintenance_records->vehicle_id) == $vehicle->id)>
                            {{ $vehicle->name }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="maintenance_record_id">
                <i class="fas fa-graduation-cap"></i> Cliente
                <label>
                <select name="client_id" id="client_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un cliente</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" @selected(old('client_id', $maintenance_records->client_id) == $client->id)>
                            {{ $client->name }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="maintenance_record_id">
                <i class="fas fa-graduation-cap"></i> Técnico
                <label>
                <select name="technican_id" id="technican_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un técnico</option>
                    @foreach ($technicans as $technican)
                        <option value="{{ $technican->id }}" @selected(old('technican_id', $maintenance_records->technican_id) == $technican->id)>
                            {{ $technican->name }}
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
            <i class="fas fa-save"></i> Guardar Historial de mantenimiento
        </button>
    </div>
</div>
