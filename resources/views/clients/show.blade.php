@extends ('layouts.panel')
@section("title", 'Cliente/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Cliente</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('clients.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Cliente</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fa fa-user"></i> Nombre Completo
                                </label>
                                <p>{{ $clients->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="age">
                                    <i class="fa fa-user"></i> Edad
                                </label>
                                <p>{{ $clients->age }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="birth_date">
                                    <i class="fa fa-user"></i> Fecha de nacimiento
                                </label>
                                <p>{{ $clients->birth_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label for="for="mail">
                                    <i class="fas fa-envelope"></i> Correo
                                </label>
                                <p>{{ $clients->mail }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="sex">
                                    <i class="fa fa-user"></i> Sexo
                                </label>
                                <p>{{ $clients->sex }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="phone_number">
                                    <i class="fa fa-user"></i> Numero teléfono
                                </label>
                                <p>{{ $clients->phone_number }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="card">
                                    <i class="fa fa-user"></i> Identificación
                                </label>
                                <p>{{ $clients->card }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="ethnicity">
                                    <i class="fa fa-user"></i> Etnia
                                </label>
                                <p>{{ $clients->ethnicity }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="nationality">
                                    <i class="fa fa-user"></i> Nacionalidad
                                </label>
                                <p>{{ $clients->nationality }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="code">
                                    <i class="fa fa-user"></i> código de cliente
                                </label>
                                <p>{{ $clients->code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Registro
                                </label>
                                <p>{{ $clients->created_at }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
