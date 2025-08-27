<h6 class="headign-small text-muted mb-4">Datos del historial de mantenimiento</h6>

<div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="service_date">Fecha del servicio</label>
                <input type="date" id="service_date" name="service_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha del servicio"
                    value="{{ old('service_date', $services_historys->service_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mileage_service">Servicio de kilometraje</label>
                <input type="text" id="mileage_service" name="mileage_service" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha de envio"
                    value="{{ old('mileage_service', $services_historys->mileage_service) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total_cost">Costo total</label>
                <input type="text" id="total_cost" name="total_cost" class="form-control form-control-alternative"
                    placeholder="Ingresar el Costo total"
                    value="{{ old('total_cost', $services_historys->total_cost) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="service_history_id">
                <i class="fas fa-graduation-cap"></i> Veiculo
                <label>
                <select name="vehicle_id" id="vehicle_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un veiculo</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}" @selected(old('vehicle_id', $services_historys->vehicle_id) == $vehicle->id)>
                            {{ $vehicle->name }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="service_history_id">
                <i class="fas fa-graduation-cap"></i> Historial de mantenimiento
                <label>
                <select name="maintenance_record_id" id="maintenance_record_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un historial de mantenimiento</option>
                    @foreach ($maintenances_record as $maintenance_record)
                        <option value="{{ $maintenance_record->id }}" @selected(old('maintenance_record_id', $services_historys->maintenance_record_id) == $maintenance_record->id)>
                            {{ $maintenance_record->entry_date }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="service_history_id">
                <i class="fas fa-graduation-cap"></i> Reporte
                <label>
                <select name="report_id" id="report_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un reporte</option>
                    @foreach ($reports as $report)
                        <option value="{{ $report->id }}" @selected(old('report_id', $services_historys->report_id) == $report->id)>
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
            <i class="fas fa-save"></i> Guardar Historial de mantenimiento
        </button>
    </div>
</div>
