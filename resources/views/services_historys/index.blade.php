@extends('layouts.panel')
@section('title', 'Historial de servicio')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Historial de mantenimiento</h3>
                        <a href="{{ route('services_historys.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Historial de servicio
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Fecha del servicio</th>
                                <th scope="col">Servicio de kilometraje</th>
                                <th scope="col">Costo total</th>
                                <th scope="col">Nombre de veiculo</th>
                                <th scope="col">Fecha de entrada</th>
                                <th scope="col">Titulo del reporte</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services_historys as $service_history)
                                <tr>
                                    <td>{{ $service_history->service_date}}</td>
                                    <td>{{ $service_history->mileage_service}}</td>
                                    <td>{{ $service_history->total_cost}}</td>
                                    <td>{{ $service_history->vehicle->name}}</td>
                                    <td>{{ $service_history->maintenance_record->entry_date}}</td>
                                    <td>{{ $service_history->report->report_title}}</td>
                                    <td>{{ $service_history->created_at}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('services_historys.show', $service_history->id) }}" class="btn btn-primary btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('services_historys.edit', $service_history->id) }}" class="btn btn-info btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('services_historys.destroy', $service_history->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta historial de servicio? Esta acción no se puede deshacer.');">
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
                        {{ $service_history->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
