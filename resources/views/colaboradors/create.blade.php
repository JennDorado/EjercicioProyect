<h1>Crear Nuevo Colaborador</h1>
    <form action="{{ route('colaboradors.store') }}" method="POST">
        @csrf
        <div>
            <label for="nif">NIF:</label>
            <input type="text" id="nif" name="nif">
        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <button type="submit">Guardar</button>
    </form>
