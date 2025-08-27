@extends ('layouts.panel')
@section("title", 'Técnico/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Técnico</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('technicans.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Técnico</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fa fa-user"></i> Nombre Completo
                                </label>
                                <p>{{ $technicans->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="phone">
                                    <i class="fa fa-user"></i> teléfono
                                </label>
                                <p>{{ $technicans->phone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="mail">
                                    <i class="fa fa-user"></i> Correo
                                </label>
                                <p>{{ $technicans->mail }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="hire_date">
                                    <i class="fa fa-user"></i> Fecha de contrato
                                </label>
                                <p>{{ $technicans->hire_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="status">
                                    <i class="fa fa-user"></i> Estado
                                </label>
                                <p>{{ $technicans->status }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="years_experience">
                                    <i class="fa fa-user"></i> Años de experiencia
                                </label>
                                <p>{{ $technicans->years_experience }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="certifications">
                                    <i class="fa fa-user"></i> Certificado
                                </label>
                                <p>{{ $technicans->certifications }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="hourly_rate">
                                    <i class="fa fa-user"></i> Tarifa por hora
                                </label>
                                <p>{{ $technicans->hourly_rate }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="photo_url">
                                    <i class="fa fa-user"></i> URL de foto
                                </label>
                                <p>{{ $technicans->photo_url }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="services_count">
                                    <i class="fa fa-user"></i> Servicio de cuenta
                                </label>
                                <p>{{ $technicans->services_count }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Registro
                                </label>
                                <p>{{ $technicans->created_at }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
