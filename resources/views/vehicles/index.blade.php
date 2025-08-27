@extends('layouts.panel')
@section('title', 'Veiculo')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Veiculo</h3>
                        <a href="{{ route('vehicles.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Veiculo
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre el dueño</th>
                                <th scope="col">Teléfono del dueño</th>
                                <th scope="col">Dirección del dueño</th>
                                <th scope="col">Correo del dueño</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Licencia de conducir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>

                                    <td>{{ $vehicle->owner_name}}</td>
                                    <td>{{ $vehicle->owner_phone}}</td>
                                    <td>{{ $vehicle->owner_address}}</td>
                                    <td>{{ $vehicle->owner_mail}}</td>
                                    <td>{{ $vehicle->model}}</td>
                                    <td>{{ $vehicle->brand}}</td>
                                    <td>{{ $vehicle->license_plate}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('vehicles.show', $vehicle->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este veiculo? Esta acción no se puede deshacer.');">
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
                        {{ $vehicles->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
