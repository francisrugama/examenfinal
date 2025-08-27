@extends('layouts.panel')

@section('title', 'Repuestos usados/Crear')

@section('content')

    <div class="col-xl-12 order-xl-l">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-plus-circle"></i> Registrar Repuestos usados</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('spares_useds.index') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-arrow-left"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body container-fluid">

                    <form action="{{ route('spares_useds.update', $spare_used->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('spares_useds.form')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
