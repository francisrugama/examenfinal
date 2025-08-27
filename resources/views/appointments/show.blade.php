@extends ('layouts.panel')
@section("title", 'Cita/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Cita</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ ('appointments.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información de la Cita</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="code_appointments">
                                    <i class="fa fa-user"></i> Código de cita
                                </label>
                                <p>{{ $appointment->code_appointments }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label for="for="creation_date">
                                    <i class="fas fa-envelope"></i> Fecha de creación
                                </label>
                                <p>{{ $appointment->creation_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="notes">
                                    <i class="fa fa-user"></i> Notas
                                </label>
                                <p>{{ $appointment->notes }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="confirmed">
                                    <i class="fa fa-user"></i> Confirmación
                                </label>
                                <p>{{ $appointment->confirmed }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="technican">
                                    <i class="fa fa-graduate-cap"></i> Técnico
                                </label>
                                <p>{{ $appointment->technican->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="client">
                                    <i class="fa fa-graduate-cap"></i> Cliente
                                </label>
                                <p>{{ $appointment->client->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="vehicle">
                                    <i class="fa fa-user-graduate"></i> Veiculo
                                </label>
                                <p>{{ $appointment->vehicle->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Matricula
                                </label>
                                <p>{{ $appointment->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
