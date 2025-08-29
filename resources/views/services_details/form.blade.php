<h6 class="headign-small text-muted mb-4">Datos del detalles del servicio</h6>

<div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="service_type">Tipo de servicio</label>
                <input type="text" id="service_type" name="service_type" class="form-control form-control-alternative"
                    placeholder="Ingresar el tipo de servicio"
                    value="{{ old('service_type', $service_details->service_type) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tool_used">Herramientas usadas</label>
                <input type="tex" id="tool_used" name="tool_used" class="form-control form-control-alternative"
                    placeholder="Ingresar las herramientas usadas"
                    value="{{ old('tool_used', $service_details->tool_used) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="warranty_service">Servicio de garantia</label>
                <input type="text" id="warranty_service" name="warranty_service" class="form-control form-control-alternative"
                    placeholder="Ingresar el servicio de garantia"
                    value="{{ old('warranty_service', $service_details->warranty_service) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="observations">Observación</label>
                <input type="text" id="observations" name="observations" class="form-control form-control-alternative"
                    placeholder="Ingresar la observación"
                    value="{{ old('observations', $service_details->observations) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="service_details_id">
                <i class="fas fa-graduation-cap"></i> Técnico
                <label>
                <select name="technican_id" id="technican_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un técnico</option>
                    @foreach ($technicans as $technican)
                        <option value="{{ $technican->id }}" @selected(old('technican_id', $service_details->technican_id) == $technican->id)>
                            {{ $technican->entry_date }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="service_details_id">
                <i class="fas fa-graduation-cap"></i> Historial de mantenimiento
                <label>
                <select name="maintenance_record_id" id="maintenance_record_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un historial de mantenmiento</option>
                    @foreach ($maintenance_records as $maintenance_record)
                        <option value="{{ $maintenance_record->id }}" @selected(old('maintenance_record_id', $service_details->maintenance_record_id) == $maintenance_record->id)>
                            {{ $maintenance_record->name }}
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
            <i class="fas fa-save"></i> Guardar Detalles del servicio
        </button>
    </div>
</div>
