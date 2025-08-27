@extends ('layouts.panel')
@section("title", 'Detalles del servicio/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Detalles del servicio</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ ('services_details.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del detalles del servicio</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="service_type">
                                    <i class="fa fa-user"></i> Tipo de servicio
                                </label>
                                <p>{{ $service_detail->service_type }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label for="for="tool_used">
                                    <i class="fas fa-user"></i> Herramientas usadas
                                </label>
                                <p>{{ $service_detail->tool_used }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="warranty_service">
                                    <i class="fa fa-user"></i> Servicio de garantia
                                </label>
                                <p>{{ $service_detail->warranty_service }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="observations">
                                    <i class="fa fa-user"></i> Observación
                                </label>
                                <p>{{ $service_detail->observations }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="technician">
                                    <i class="fa fa-user-graduate"></i> Técnico
                                </label>
                                <p>{{ $service_detail->technician->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="maintenance_record">
                                    <i class="fa fa-graduate-cap"></i> Historial de mantenimiento
                                </label>
                                <p>{{ $service_detail->maintenance_record->entry_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Matricula
                                </label>
                                <p>{{ $service_detail->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
