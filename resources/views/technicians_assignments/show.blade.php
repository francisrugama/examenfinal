@extends ('layouts.panel')
@section("title", 'Técnico asignado/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Técnico asignado</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ ('technicans_assignments.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del técnico asignado</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="assignment_date">
                                    <i class="fa fa-envelope"></i> Fecha de asignacion
                                </label>
                                <p>{{ $technicans_assignments->assignment_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label for="for="task_status">
                                    <i class="fas fa-user"></i> Estado de la tarea
                                </label>
                                <p>{{ $technicans_assignments->task_status }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="performance_rating">
                                    <i class="fa fa-user"></i> Calificacion de desempeño
                                </label>
                                <p>{{ $technicans_assignments->performance_rating }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="tools_used">
                                    <i class="fa fa-user"></i> Herramientas usadas
                                </label>
                                <p>{{ $technicans_assignments->tools_used }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="task_type">
                                    <i class="fa fa-user"></i> Tipo de tarea
                                </label>
                                <p>{{ $technicans_assignments->task_type }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="technician">
                                    <i class="fa fa-graduate-cap"></i> Técnico
                                </label>
                                <p>{{ $technicans_assignments->technician->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="maintenance_record">
                                    <i class="fa fa-graduate-cap"></i> Historial de mantenimiento
                                </label>
                                <p>{{ $technicans_assignments->maintenance_record->entry_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Matricula
                                </label>
                                <p>{{ $technicans_assignments->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

