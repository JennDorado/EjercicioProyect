@section('content')
<div class="container">
    <h1>Proyectos</h1>
    <a href="{{ route('proyectos.create') }}" class="btn btn-primary mb-3">Crear Proyecto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Cuantía</th>
                <th>Cliente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto->id }}</td>
                <td>{{ $proyecto->codigo }}</td>
                <td>{{ $proyecto->descripcion }}</td>
                <td>{{ $proyecto->fecha_inicio }}</td>
                <td>{{ $proyecto->fecha_fin }}</td>
                <td>{{ $proyecto->cuantia }}</td>
                <td>{{ $proyecto->cliente ? $proyecto->cliente->nombre : 'N/A' }}</td>
                <td>
                    <a href="{{ route('proyectos.show', $proyecto->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
