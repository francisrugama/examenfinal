@extends('layouts.panel')
@section('title', 'Técnico asignado')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Técnico asignado</h3>
                        <a href="{{ route('technicans_assignments.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Técnico asignado
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Fecha de asignacion</th>
                                <th scope="col">Estado de la tarea</th>
                                <th scope="col">Calificacion de desempeño</th>
                                <th scope="col">Herramientas usadas</th>
                                <th scope="col">Tipo de tarea</th>
                                <th scope="col">Nombre de técnico</th>
                                <th scope="col">Nombre de </th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($technicans_assignments as $technican_assignment)
                                <tr>
                                    <td>{{ $technican_assignment->assignment_date}}</td>
                                    <td>{{ $technican_assignment->task_status}}</td>
                                    <td>{{ $technican_assignment->performance_rating}}</td>
                                    <td>{{ $technican_assignment->tools_used}}</td>
                                    <td>{{ $technican_assignment->task_type}}</td>
                                    <td>{{ $technican_assignment->technican->name}}</td>
                                    <td>{{ $technican_assignment->maintenance_record->entry_date}}</td>
                                    <td>{{ $technican_assignment->created_at}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('technicans_assignments.show', $technican_assignment->id) }}" class="btn btn-primary btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('technicans_assignments.edit', $technican_assignment->id) }}" class="btn btn-info btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('technicans_assignments.destroy', $technican_assignment->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta técnico asignado? Esta acción no se puede deshacer.');">
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
                        {{ $technicans_assignments->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

