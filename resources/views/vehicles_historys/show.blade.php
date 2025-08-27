@extends ('layouts.panel')
@section("title", 'Historial de veiculo/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Historial de veiculo</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ ('vehicles_historys.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del historial de veiculo</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="vehicle_historys">
                                    <i class="fa fa-user"></i> Hisrorial de veiculo
                                </label>
                                <p>{{ $vehicle_history->vehicle_historys }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label for="for="mileage_service">
                                    <i class="fas fa-user"></i> Servicio de kilometraje
                                </label>
                                <p>{{ $vehicle_history->mileage_service }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="total_cost">
                                    <i class="fa fa-user"></i> Costo total
                                </label>
                                <p>{{ $vehicle_history->total_cost }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="vehicle">
                                    <i class="fa fa-user-graduate"></i> Veiculo
                                </label>
                                <p>{{ $vehicle_history->vehicle->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="maintenance_record">
                                    <i class="fa fa-graduate-cap"></i> Historial de mantenimiento
                                </label>
                                <p>{{ $vehicle_history->maintenance_record->entry_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="report">
                                    <i class="fa fa-graduate-cap"></i> Reporte
                                </label>
                                <p>{{ $vehicle_history->report->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Matricula
                                </label>
                                <p>{{ $vehicle_history->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

