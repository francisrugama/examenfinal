@extends('layouts.panel')
@section('title', 'Cita')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Cita</h3>
                        <a href="{{ route('appointments.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Cita
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Código de cita</th>
                                <th scope="col">Fecha de creación</th>
                                <th scope="col">Notas</th>
                                <th scope="col">Confirmación</th>
                                <th scope="col">Nombre de técnico</th>
                                <th scope="col">Nombre de cliente</th>
                                <th scope="col">Nombre de veiculo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointments->code_appointments}}</td>
                                    <td>{{ $appointments->creation_date}}</td>
                                    <td>{{ $appointments->notes}}</td>
                                    <td>{{ $appointments->work_description}}</td>
                                    <td>{{ $appointments->confirmed}}</td>
                                    <td>{{ $appointments->technican->name}}</td>
                                    <td>{{ $appointments->client->name}}</td>
                                    <td>{{ $appointments->vehicle->name}}</td>
                                    <td>{{ $appointments->created_at}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-primary btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-info btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta cita? Esta acción no se puede deshacer.');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $appointments->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
