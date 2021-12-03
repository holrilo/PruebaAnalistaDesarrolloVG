@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    @if (Session::has('mensaje'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('mensaje') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif

                    <div class="card">
                        <div class="card-header">
                            Listar Clientes
                            <div class="float-end">
                                <a class="btn btn-primary" href="{{ url('cliente/create') }}">Nuevo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p> --}}
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>T. Identificacion</th>
                                        <th>Nº Identificacion</th>
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Cliente</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td scope="row">{{ $cliente->id_cliente }}</td>
                                            <td scope="row">{{ $cliente->tipo_id->tipo_id }}</td>
                                            <td scope="row">{{ $cliente->num_id_cliente }}</td>
                                            <td scope="row">{{ $cliente->nom_cliente_1 }}</td>
                                            <td scope="row">{{ $cliente->nom_cliente_2 }}</td>
                                            <td scope="row">{{ $cliente->ape_cliente_1 }}</td>
                                            <td scope="row">{{ $cliente->ape_cliente_2 }}</td>
                                            <td scope="row">{{ $cliente->correo_cliente }}</td>
                                            <td scope="row">{{ $cliente->tel_cliente }}</td>
                                            <td scope="row">{{ $cliente->tipo_cli->desc_tipo_cliente }}</td>
                                            <td scope="row">{{ $cliente->estado->desc_estado }}</td>
                                            <td scope="row">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning"
                                                        href="{{ url('/cliente/' . $cliente->id_cliente . '/edit') }}">Editar</a>
                                                    <form action="{{ url('/cliente/' . $cliente->id_cliente) }}"
                                                        method="POST">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <input class="btn btn-danger" type="submit"
                                                            onclick="return confirm('Quieres Borrar?')" value="Borrar">
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">
                            Footer
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
