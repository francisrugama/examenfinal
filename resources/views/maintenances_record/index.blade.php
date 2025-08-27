@extends('layouts.panel')
@section('title', 'Historial de mantenimiento')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Historial de mantenimiento</h3>
                        <a href="{{ route('maintenances_record.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Historial de mantenimiento
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Fecha de entrada</th>
                                <th scope="col">Fecha de envio</th>
                                <th scope="col">Kilometraje actual</th>
                                <th scope="col">Descricción del trabajo</th>
                                <th scope="col">Costo de las piesas</th>
                                <th scope="col">Costo laboral</th>
                                <th scope="col">Costo total</th>
                                <th scope="col">Nombre de veiculo</th>
                                <th scope="col">Nombre de cliente</th>
                                <th scope="col">Nombre de técnico</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($maintenances_record as $maintenance_record)
                                <tr>
                                    <td>{{ $maintenance_record->entry_date}}</td>
                                    <td>{{ $maintenance_record->delivery_date}}</td>
                                    <td>{{ $maintenance_record->current_mileage}}</td>
                                    <td>{{ $maintenance_record->work_description}}</td>
                                    <td>{{ $maintenance_record->parts_cost}}</td>
                                    <td>{{ $maintenance_record->labor_cost}}</td>
                                    <td>{{ $maintenance_record->total_cost}}</td>
                                    <td>{{ $maintenance_record->vehicle->name}}</td>
                                    <td>{{ $maintenance_record->client->name}}</td>
                                    <td>{{ $maintenance_record->technician->name}}</td>
                                    <td>{{ $maintenance_record->created_at}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('maintenances_record.show', $maintenance_record->id) }}" class="btn btn-primary btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('maintenances_record.edit', $maintenance_record->id) }}" class="btn btn-info btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('maintenances_record.destroy', $maintenance_record->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta historial de mantenimiento? Esta acción no se puede deshacer.');">
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
                        {{ $maintenances_record->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
