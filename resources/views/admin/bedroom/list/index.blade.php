@extends('layouts.merge.dashboard')
@section('title', 'Lista de Quartos')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Quartos</h1>
        </div>

        <!-- DataTales employeeple -->
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Quartos</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NOME DO QUARTO</th>
                                <th>Nº DE ESTUDANTE</th>
                                <th>Nº DE QUARTO</th>
                                <th>DESCRIÇÃO</th>
                                <th>ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bedrooms as $bedroom)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $bedroom->name }}</td>
                                    <td>{{ $bedroom->numberStudent }}</td>
                                    <td>{{ $bedroom->numberBad }} </td>
                                    <td>{{ $bedroom->description }}</td>
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.bedroom.show', $bedroom->id) }}">Detalhes</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.bedroom.edit', $bedroom->id) }}">Editar</a>
                                                <a class="dropdown-item delete-button" href="#"
                                                    data-based-id="{{ route('admin.bedroom.destroy', $bedroom->id) }}">Remover</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
@endsection('content')
