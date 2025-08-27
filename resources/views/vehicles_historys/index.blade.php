@extends('layouts.panel')
@section('title', 'Historial de veiculo')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Historial de mantenimiento</h3>
                        <a href="{{ route('vehicles_historys.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Historial de mantenimiento
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Historial del veiculo</th>
                                <th scope="col">Servicio de kilometraje</th>
                                <th scope="col">Costo total</th>
                                <th scope="col">Nombre de veiculo</th>
                                <th scope="col">Fecha de entrada</th>
                                <th scope="col">Titulo del reporte</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles_historys as $vehicle_history)
                                <tr>
                                    <td>{{ $vehicle_history->vehicle_historys}}</td>
                                    <td>{{ $vehicle_history->mileage_service}}</td>
                                    <td>{{ $vehicle_history->total_cost}}</td>
                                    <td>{{ $vehicle_history->vehicle->name}}</td>
                                    <td>{{ $vehicle_history->maintenance_record->entry_date}}</td>
                                    <td>{{ $vehicle_history->report->report_title}}</td>
                                    <td>{{ $vehicle_history->created_at}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('vehicles_historys.show', $vehicle_history->id) }}" class="btn btn-primary btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('vehicles_historys.edit', $vehicle_history->id) }}" class="btn btn-info btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('vehicles_historys.destroy', $vehicle_history->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta historial de veiculo? Esta acción no se puede deshacer.');">
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
                        {{ $vehicle_history->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


