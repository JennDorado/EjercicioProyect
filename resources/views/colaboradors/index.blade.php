<h1>Lista de Colaboradores</h1>
    <a href="{{ route('colaboradors.create') }}">Crear Nuevo Colaborador</a>
    <table>
        <thead>
            <tr>
                <th>NIF</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colaborador as $colab)
                <tr>
                    <td>{{ $colab->nif }}</td>
                    <td>{{ $colab->nombre }}</td>
                    <td>
                        <a href="{{ route('colaboradors.show', $colab->id) }}">Ver</a>
                        <a href="{{ route('colaboradors.edit', $colab->id) }}">Editar</a>
                        <form action="{{ route('colaboradors.destroy', $colab->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
