<h1>Editar Colaborador</h1>
    <form action="{{ route('colaboradors.update', $colaborador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nif">NIF:</label>
            <input type="text" id="nif" name="nif" value="{{ $colaborador->nif }}">
        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $colaborador->nombre }}">
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
