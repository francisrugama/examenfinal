@extends('layouts.panel')
@section('title', 'Dueño')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Dueño</h3>
                        <a href="{{ route('owners.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Dueño
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre el dueño</th>
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
                            @foreach ($owners as $owner)
                                <tr>

                                    <td>{{ $owner->name}}</td>
                                    <td>{{ $owner->age}}</td>
                                    <td>{{ $owner->birth_date}}</td>
                                    <td>{{ $owner->mail}}</td>
                                    <td>{{ $owner->sex}}</td>
                                    <td>{{ $owner->phone_number}}</td>
                                    <td>{{ $owner->card}}</td>
                                    <td>{{ $owner->ethnicity}}</td>
                                    <td>{{ $owner->nationality}}</td>
                                    <td>{{ $owner->code}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('owners.show', $owner->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('owners.destroy', $owner->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este dueño? Esta acción no se puede deshacer.');">
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
                        {{ $owners->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
