<h6 class="headign-small text-muted mb-4">Datos del repuestos usados</h6>

<div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="part_code">Código de piezas</label>
                <input type="text" id="part_code" name="part_code" class="form-control form-control-alternative"
                    placeholder="Ingresar el codigo de las piezas"
                    value="{{ old('part_code', $spare_used->part_code) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="brand">Marca</label>
                <input type="text" id="brand" name="brand" class="form-control form-control-alternative"
                    placeholder="Ingresar la marca"
                    value="{{ old('brand', $spare_used->brand) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="warranty_period">Periodo de garantia</label>
                <input type="text" id="warranty_period" name="warranty_period" class="form-control form-control-alternative"
                    placeholder="Ingresar el periodo de garantia"
                    value="{{ old('warranty_period', $spare_used->warranty_period) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="supplier_name">Nombre de preoveedor</label>
                <input type="text" id="supplier_name" name="supplier_name" class="form-control form-control-alternative"
                    placeholder="Ingresar el nombre del proveedor"
                    value="{{ old('supplier_name', $spare_used->supplier_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="spare_used_id">
                <i class="fas fa-graduation-cap"></i> Historial de mantenimiento
                <label>
                <select name="maintenance_record_id" id="maintenance_record_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un historial de mantenimiento</option>
                    @foreach ($maintenances_record as $maintenance_record)
                        <option value="{{ $maintenance_record->id }}" @selected(old('maintenance_record_id', $spare_used_id->maintenance_record_id) == $maintenance_record->id)>
                            {{ $spare_used_id->entry_date }}
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
            <i class="fas fa-save"></i> Guardar repuestos usados
        </button>
    </div>
</div>
