@extends ('layouts.panel')
@section("title", 'Veiculo/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Veiculo</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('vehicles.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Veiculo</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="owner_name">
                                    <i class="fa fa-user"></i> Nombre Completo
                                </label>
                                <p>{{ $vehicles->owner_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="owner_phone">
                                    <i class="fa fa-user"></i> Teléfono del dueño
                                </label>
                                <p>{{ $vehicles->owner_phone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="owner_address">
                                    <i class="fa fa-user"></i> Dirección del dueño
                                </label>
                                <p>{{ $vehicles->owner_address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label for="for="owner_mail">
                                    <i class="fas fa-envelope"></i> Correo del dueño
                                </label>
                                <p>{{ $vehicles->owner_mail }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="card">
                                    <i class="fa fa-user"></i> Identificación
                                </label>
                                <p>{{ $vehicles->card }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="brand">
                                    <i class="fa fa-user"></i> Marca
                                </label>
                                <p>{{ $vehicles->brand }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="license_plate">
                                    <i class="fa fa-user"></i> Licencia de conducir
                                </label>
                                <p>{{ $vehicles->license_plate }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Registro
                                </label>
                                <p>{{ $vehicles->created_at }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
