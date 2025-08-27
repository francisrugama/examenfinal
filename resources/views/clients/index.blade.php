@extends('layouts.panel')
@section('title', 'Cliente')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Clientes</h3>
                        <a href="{{ route('clients.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Cliente
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre el cliente</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Numero teléfonico</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Etnia</th>
                                <th scope="col">Nacionalidad</th>
                                <th scope="col">Código</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>

                                    <td>{{ $client->name}}</td>
                                    <td>{{ $client->age}}</td>
                                    <td>{{ $client->birth_date}}</td>
                                    <td>{{ $client->mail}}</td>
                                    <td>{{ $client->sex}}</td>
                                    <td>{{ $client->phone_number}}</td>
                                    <td>{{ $client->card}}</td>
                                    <td>{{ $client->ethnicity}}</td>
                                    <td>{{ $client->nationality}}</td>
                                    <td>{{ $client->code}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este client? Esta acción no se puede deshacer.');">
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
                        {{ $clients->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
