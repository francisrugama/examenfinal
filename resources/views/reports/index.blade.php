@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Reporte</h3>
                        <a href="{{ route('reports.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Reporte
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Tipo de filtro</th>
                                <th scope="col">Fecha generada</th>
                                <th scope="col">Resumen del contenido</th>
                                <th scope="col">Generado por</th>
                                <th scope="col">Fecha de comienzo</th>
                                <th scope="col">Fecha de finalización</th>
                                <th scope="col">Formato de salida</th>
                                <th scope="col">Titulo del reporte</th>
                                <th scope="col">Archivo</th>
                                <th scope="col">Total de historiales</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                                <tr>

                                    <td>{{ $report->filter_type}}</td>
                                    <td>{{ $report->generated_date}}</td>
                                    <td>{{ $report->content_summary}}</td>
                                    <td>{{ $report->generated_by}}</td>
                                    <td>{{ $report->start_date}}</td>
                                    <td>{{ $report->end_date}}</td>
                                    <td>{{ $report->output_format}}</td>
                                    <td>{{ $report->report_title}}</td>
                                    <td>{{ $report->archived}}</td>
                                    <td>{{ $report->total_records}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('reports.show', $report->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('reports.destroy', $report->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este reporte? Esta acción no se puede deshacer.');">
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
                        {{ $reports->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

