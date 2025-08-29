<h6 class="headign-small text-muted mb-4">Datos del técnico asignado</h6>

<div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="assignment_date">Fecha de asignacion</label>
                <input type="date" id="assignment_date" name="assignment_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha de de asignacion"
                    value="{{ old('assignment_date', $technican_assignment->assignment_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="task_status">Estado de la tarea</label>
                <input type="text" id="task_status" name="task_status" class="form-control form-control-alternative"
                    placeholder="Ingresar el estado de la tarea"
                    value="{{ old('task_status', $technican_assignment->task_status) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="performance_rating">Calificación de desempeño</label>
                <input type="text" id="performance_rating" name="performance_rating" class="form-control form-control-alternative"
                    placeholder="Ingresar la calificación de desempeño"
                    value="{{ old('performance_rating', $technican_assignment->performance_rating) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tools_used">Herramientas usadas</label>
                <input type="text" id="tools_used" name="tools_used" class="form-control form-control-alternative"
                    placeholder="Ingresar las herramientas usadas"
                    value="{{ old('tools_used', $technican_assignment->tools_used) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="task_type">Tipo de tarea</label>
                <input type="text" id="task_type" name="task_type" class="form-control form-control-alternative"
                    placeholder="Ingresar el tipo de tarea"
                    value="{{ old('task_type', $technican_assignment->task_type) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="technicians_assignments_id">
                <i class="fas fa-graduation-cap"></i> Técnico
                <label>
                <select name="technican_id" id="technican_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un técnico</option>
                    @foreach ($technicans as $technican)
                        <option value="{{ $technican->id }}" @selected(old('technican_id', $technican_assignment->technican_id) == $technican->id)>
                            {{ $technican->name }}
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="technicians_assignments_id">
                <i class="fas fa-graduation-cap"></i> Historial de mantenimiento
                <label>
                <select name="maintenance_record_id" id="maintenance_record_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccionar un historial de mantenimientoo</option>
                    @foreach ($maintenances_record as $maintenance_record)
                        <option value="{{ $maintenance_record->id }}" @selected(old('maintenance_record_id', $technician_assignment->maintenance_record_id) == $maintenance_record->id)>
                            {{ $maintenance_record->entry_date }}
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
            <i class="fas fa-save"></i> Guardar Técnico asignado
        </button>
    </div>
</div>
