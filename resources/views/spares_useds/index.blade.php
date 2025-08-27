@extends('layouts.panel')
@section('title', 'Repuestos usados')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Repuestos usados</h3>
                        <a href="{{ route('maintenances_records.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Repuestos usados
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Código de piezas</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Periodo de garantia</th>
                                <th scope="col">Nombre de proveedor</th>
                                <th scope="col">Fecha de entrada</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spares_useds as $spare_used)
                                <tr>
                                    <td>{{ $spare_used->part_code}}</td>
                                    <td>{{ $spare_used->brand}}</td>
                                    <td>{{ $spare_used->warranty_period}}</td>
                                    <td>{{ $spare_used->supplier_name}}</td>
                                    <td>{{ $spare_used->maintenance_record->entry_date}}</td>
                                    <td>{{ $spare_used->created_at}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('spares_useds.show', $spare_used->id) }}" class="btn btn-primary btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('spares_useds.edit', $spare_used->id) }}" class="btn btn-info btn-sm" style="margin-right: 7px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('spares_useds.destroy', $spare_used->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta repuestos usados? Esta acción no se puede deshacer.');">
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
                        {{ $spares_useds->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
