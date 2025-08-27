@extends('layouts.panel')
@section('title', 'Técnico')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Técnico</h3>
                        <a href="{{ route('technicans.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Técnico
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre el técnico</th>
                                <th scope="col">Numero</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Fecha de contrato</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Años de experiencia</th>
                                <th scope="col">Certificado</th>
                                <th scope="col">Tarifa por hora</th>
                                <th scope="col">URL de la foto</th>
                                <th scope="col">Servicio de cuenta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($technicans as $technican)
                                <tr>

                                    <td>{{ $technican->name}}</td>
                                    <td>{{ $technican->phone}}</td>
                                    <td>{{ $technican->mail}}</td>
                                    <td>{{ $technican->hire_date}}</td>
                                    <td>{{ $technican->status}}</td>
                                    <td>{{ $technican->years_experience}}</td>
                                    <td>{{ $technican->certifications}}</td>
                                    <td>{{ $technican->hourly_rate}}</td>
                                    <td>{{ $technican->photo_url}}</td>
                                    <td>{{ $technican->services_acount}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('technicans.show', $technican->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('technicans.edit', $technican->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('technicans.destroy', $technican->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este técnico? Esta acción no se puede deshacer.');">
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
                        {{ $technicans->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
