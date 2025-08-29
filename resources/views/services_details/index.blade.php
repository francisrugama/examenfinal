@extends('layouts.panel')

@section('title', 'Detalles de servicio')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Detalles de servicio</h3>
                        <a href="{{ route('service_details.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Detalles de servicio
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Tipo de servicio</th>
                                <th scope="col">Herramientas usadas</th>
                                <th scope="col">Servicio de garantia</th>
                                <th scope="col">Observación</th>
                                <th scope="col">Nombre de técnico</th>
                                <th scope="col">Fecha de entrada de historial de mantenimiento</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($service_details as $service_detail)
                                <tr>
                                    <td>{{ $service_detail->service_type}}</td>
                                    <td>{{ $service_detail->tool_used}}</td>
                                    <td>{{ $service_detail->warranty_service}}</td>
                                    <td>{{ $service_detail->observations}}</td>
                                    <td>{{ $service_detail->technican->name}}</td>
                                    <td>{{ $service_detail->maintenance_record->entry_date}}</td>
                                    <td>{{ $service_detail->created_at}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('service_details.show', $service_detail->id) }}" class="btn btn-primary btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('service_details.edit', $service_detail->id) }}" class="btn btn-info btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('service_details.destroy', $service_detail->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta detalles de servicio? Esta acción no se puede deshacer.');">
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
                        {{ $service_details->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
