<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="filter_type">Tipo de filtro</label>
                <input type="text" id="filter_type" name="filter_type" class="form-control form-control-alternative"
                    placeholder="Ingresar tipo de filtro"
                    value="{{ old('filter_type', $reports->filter_type) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="generated_date">Fecha generada</label>
                <input type="date" id="generated_date" name="generated_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha generada del reporte"
                    value="{{ old('generated_date', $reports->generated_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="content_summary">Resumen del contenido</label>
                <input type="text" id="content_summary" name="content_summary" class="form-control form-control-alternative"
                    placeholder="Ingresar el resumen del contenido"
                    value="{{ old('content_summary', $reports->content_summary) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="generated_by">Generado por</label>
                <input type="text" id="generated_by" name="generated_by" class="form-control form-control-alternative"
                    placeholder="Ingresar la persona que generó el reporte"
                    value="{{ old('generated_by', $reports->generated_by) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="start_date">Fecha de comienzo</label>
                <input type="date" id="start_date" name="start_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha de comienzo"
                    value="{{ old('start_date', $reports->start_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="end_date">Fecha de finalización</label>
                <input type="date" id="end_date" name="end_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha de finalización"
                    value="{{ old('end_date', $reports->end_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="output_format">Fecha de salida</label>
                <input type="date" id="output_format" name="output_format" class="form-control form-control-alternative"
                    placeholder="Ingresar el formato de salida del reporte"
                    value="{{ old('output_format', $reports->output_format) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="report_title">Título del reporte</label>
                <input type="text" id="report_title" name="report_title" class="form-control form-control-alternative"
                    placeholder="Ingresar el título del reporte"
                    value="{{ old('report_title', $reports->report_title) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="archived">Archivo</label>
                <input type="text" id="archived" name="archived" class="form-control form-control-alternative"
                    placeholder="Ingresar el nombre del archivo"
                    value="{{ old('archived', $reports->archived) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total_records">Total de historiales</label>
                <input type="text" id="total_records" name="total_records" class="form-control form-control-alternative"
                    placeholder="Ingresar el total de historiales"
                    value="{{ old('total_records', $reports->total_records) }}">
            </div>
        </div>
    </div>
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Reporte
        </button>
    </div>
</div>
