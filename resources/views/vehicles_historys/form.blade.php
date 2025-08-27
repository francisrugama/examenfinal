<h6 class="headign-small text-muted mb-4">Datos del historial de veiculo</h6>

<div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vehicle_historys">Historial de veiculo</label>
                <input type="date" id="vehicle_historys" name="vehicle_historys" class="form-control form-control-alternative"
                    placeholder="Ingresar el historial del heiculo"
                    value="{{ old('vehicle_historys', $vehicle_history->vehicle_historys) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mileage_service">Servicio de kilometraje</label>
                <input type="text" id="mileage_service" name="mileage_service" class="form-control form-control-alternative"
                    placeholder="Ingresar el servicio del kilometraje"
                    value="{{ old('mileage_service', $vehicle_history->mileage_service) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total_cost">Costo total</label>
                <input type="text" id="total_cost" name="total_cost" class="form-control form-control-alternative"
                    placeholder="Ingresar el Costo total"
                    value="{{ old('total_cost', $vehicle_history->total_cost) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="vehicles_historys_id">
                <i class="fas fa-graduation-cap"></i> Veiculo
                <label>
                <select name="vehicle_id" id="vehicle_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un veiculo</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}" @selected(old('vehicle_id', $vehicle_history->vehicle_id) == $vehicle->id)>
                            {{ $vehicle->name }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="vehicles_historys_id">
                <i class="fas fa-graduation-cap"></i> Historial de mantenimiento
                <label>
                <select name="maintenance_record_id" id="maintenance_record_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un historial de mantenimiento</option>
                    @foreach ($maintenances_record as $maintenance_record)
                        <option value="{{ $maintenance_record->id }}" @selected(old('maintenance_record_id', $vehicle_history->maintenance_record_id) == $maintenance_record->id)>
                            {{ $maintenance_record->entry_date }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="vehicles_historys_id">
                <i class="fas fa-graduation-cap"></i> Reporte
                <label>
                <select name="report_id" id="report_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un reporte</option>
                    @foreach ($reports as $report)
                        <option value="{{ $report->id }}" @selected(old('report_id', $vehicles_historys_id->report_id) == $report->id)>
                            {{ $report->report_title }}
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
            <i class="fas fa-save"></i> Guardar Historial de Veiculo
        </button>
    </div>
</div>
