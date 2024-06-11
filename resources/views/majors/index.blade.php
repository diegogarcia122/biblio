@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de Carreras</h2>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>facultad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($majors as $carrera)
                    <tr>
                        <td>{{ $carrera->codigo }}</td>
                        <td>{{ $carrera->nombre }}</td>
                        <td>{{ $carrera->facultad }}</td>
                        <td>
                            {{-- <a href="{{ route('majors.show', $carrera->id) }}">Ver</a>
                        <a href="{{ route('majors.edit', $carrera->id) }}">Editar</a>
                        <form action="{{ route('majors.destroy', $carrera->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form> --}}
                        <button>Crear</button>
                        <button>Editar</button>
                        <button>Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
