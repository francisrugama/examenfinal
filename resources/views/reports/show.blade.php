@extends ('layouts.panel')
@section("title", 'Reporte/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Reporte</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('reports.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Reporte</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="filter_type">
                                    <i class="fa fa-user"></i> Tipo de filtro
                                </label>
                                <p>{{ $report->filter_type }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="generated_date">
                                    <i class="fa fa-user"></i> Fecha de generación
                                </label>
                                <p>{{ $report->generated_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="content_summary">
                                    <i class="fa fa-user"></i> Resumen del contenido
                                </label>
                                <p>{{ $report->content_summary }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="generated_by">
                                    <i class="fa fa-user"></i> Generado por
                                </label>
                                <p>{{ $report->generated_by }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="start_date">
                                    <i class="fa fa-user"></i> Fecha de inicio
                                </label>
                                <p>{{ $report->start_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="end_date">
                                    <i class="fa fa-user"></i> Fecha de finalización
                                </label>
                                <p>{{ $report->end_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="output_format">
                                    <i class="fa fa-user"></i> Formato de salida
                                </label>
                                <p>{{ $report->output_format }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="report_title">
                                    <i class="fa fa-user"></i> Titulo del reporte
                                </label>
                                <p>{{ $report->report_title }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="archived">
                                    <i class="fa fa-user"></i> Archivo
                                </label>
                                <p>{{ $report->archived }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="total_records">
                                    <i class="fa fa-user"></i> Total de historiales
                                </label>
                                <p>{{ $report->total_records }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Registro
                                </label>
                                <p>{{ $report->created_at }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
