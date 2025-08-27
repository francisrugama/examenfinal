@extends ('layouts.panel')
@section("title", 'Repuestos usados/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Repuestos usados</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ ('spares_useds.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información de repuestos usados</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="part_code">
                                    <i class="fa fa-user"></i> Código de piezas
                                </label>
                                <p>{{ $spare_used->part_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label for="for="brand">
                                    <i class="fas fa-user"></i> Marca
                                </label>
                                <p>{{ $spare_used->brand }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="warranty_period">
                                    <i class="fa fa-user"></i> Periodo de garantia
                                </label>
                                <p>{{ $spare_used->warranty_period }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="supplier_name">
                                    <i class="fa fa-user"></i> Nombre de proveedor
                                </label>
                                <p>{{ $spare_used->supplier_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="maintenance_record">
                                    <i class="fa fa-graduate-cap"></i> Historial de mantenimiento
                                </label>
                                <p>{{ $spare_used->maintenance_record->entry_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Matricula
                                </label>
                                <p>{{ $spare_used->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

