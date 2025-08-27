@extends('layouts.panel')

@section('title', 'Técnico asignado/Crear')

@section('content')

    <div class="col-xl-12 order-xl-l">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-plus-circle"></i> Registrar Técnico asignado</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('technicans_assignments.index') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-arrow-left"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body container-fluid">

                    <form action="{{ route('technicans_assignments.update', $technician_assignment->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('technicans_assignments.form')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
