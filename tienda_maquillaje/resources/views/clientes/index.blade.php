
@extends('layouts.app')

@section('titulo', 'CLIENTES REGISTRADOS')

@section('contenido')

    {{-- Encabezado --}}
    <div class="d-flex flex-column flex-md-row justify-content-between mb-4 gap-3">
        <div>
            <h1 class="h3 fw-bold mb-1">Clientes registrados</h1>
            <p class="text-secondary mb-0">
                Información consultada desde la base de datos.
            </p>
        </div>

        <a href="{{ route('clientes.create') }}"
           class="btn btn-cafe align-self-start">
            Registrar cliente
        </a>
    </div>

    {{-- Mensaje de éxito --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabla de clientes --}}
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Ciudad</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Editar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->correo }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->ciudad }}</td>
                                <td>{{ $cliente->mensaje }}</td>
                                <td>
                                    {{ $cliente->created_at?->format('d/m/Y H:i') }}
                                </td>
                                <td>
                                    <a href="{{ route('clientes.edit', $cliente) }}"
                                       class="btn btn-warning btn-sm">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8"
                                    class="text-center py-4 text-secondary">
                                    Todavía no existen registros.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
