@section('content')
<div class="container">
    <h1>Detalle del Proyecto</h1>
    <div class="card">
        <div class="card-header">
            Proyecto {{ $proyecto->codigo }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $proyecto->id }}</p>
            <p><strong>Código:</strong> {{ $proyecto->codigo }}</p>
            <p><strong>Descripción:</strong> {{ $proyecto->descripcion }}</p>
            <p><strong>Fecha de Inicio:</strong> {{ $proyecto->fecha_inicio }}</p>
            <p><strong>Fecha de Fin:</strong> {{ $proyecto->fecha_fin }}</p>
            <p><strong>Cuantía:</strong> {{ $proyecto->cuantia }}</p>
            <p><strong>Cliente:</strong> {{ $proyecto->cliente ? $proyecto->cliente->nombre : 'N/A' }}</p>
            <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
