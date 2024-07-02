<h1>Crear nuevo proyecto</h1>

<form action="{{ route('proyectos.store') }}" method="POST">
    @csrf
    <label for="codigo">Codigo:</label>
    <input type="text" name="codigo" id="codigo" required>
    <br>
    <br>

    <label for="descripcion">Descripcion:</label>
    <br>
    <br>
    <textarea name="descripcion" id="descripcion" rows="4" cols="50" required></textarea>
    <br>
    <br>
    <label for="fecha_fin">Fecha_fin:</label>
    <input type="text" name="fecha_fin" id="fecha_fin" required>
    <br>
    <br>
    <label for="fecha_inicio">Fecha_inicio:</label>
    <input type="text" name="fecha_inicio" id="fecha_inicio" required>
    <br>
    <br>
    <label for="cuantia">Cuantia:</label>
    <input type="text" name="cuantia" id="cuantia" required>


    <label for="cliente_id">Cliente:</label>
    <select name="cliente_id" id="cliente_id">
        <option value="">Seleccione un codigo del cliente</option>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->codigo }}</option>
        @endforeach
    </select>

    <button type="submit">Guardar</button>
</form>
