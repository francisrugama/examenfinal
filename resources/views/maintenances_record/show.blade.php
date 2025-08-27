@extends ('layouts.panel')
@section("title", 'Historial de matenimiento/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Historial de mantenimiento</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ ('maintenances_record.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del historial de mantenimiento</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="entry_date">
                                    <i class="fa fa-envelope"></i> Fecha de entrada
                                </label>
                                <p>{{ $maintenance_record->entry_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label for="for="delivery_date">
                                    <i class="fas fa-envelope"></i> Fecha de envio
                                </label>
                                <p>{{ $maintenance_record->delivery_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="current_mileage">
                                    <i class="fa fa-user"></i> Kilometraje actual
                                </label>
                                <p>{{ $maintenance_record->current_mileage }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="work_description">
                                    <i class="fa fa-user"></i> Descricción de trabajo
                                </label>
                                <p>{{ $maintenance_record->work_description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="parts_cost">
                                    <i class="fa fa-user"></i> Costo de las piesas
                                </label>
                                <p>{{ $maintenance_record->parts_cost }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="labor_cost">
                                    <i class="fa fa-user"></i> Costo laboral
                                </label>
                                <p>{{ $maintenance_record->labor_cost }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="total_cost">
                                    <i class="fa fa-user"></i> Costo total
                                </label>
                                <p>{{ $maintenance_record->total_cost }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="vehicle">
                                    <i class="fa fa-user-graduate"></i> Veiculo
                                </label>
                                <p>{{ $maintenance_record->vehicle->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="client">
                                    <i class="fa fa-graduate-cap"></i> Cliente
                                </label>
                                <p>{{ $maintenance_record->client->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="technician">
                                    <i class="fa fa-graduate-cap"></i> Técnico
                                </label>
                                <p>{{ $maintenance_record->technician->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Matricula
                                </label>
                                <p>{{ $maintenance_record->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
