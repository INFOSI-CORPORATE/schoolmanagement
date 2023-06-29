@extends('layouts.merge.dashboard')
@section('title', 'Lista de Transportes')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Transportes</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Transportes</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>modelo</th>
                                <th>Placa</th>
                                <th>capacidade</th>
                                <th>estado</th>
                                <th>Acções</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transports as $transport)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $transport->model }}</td>
                                    <td>{{ $transport->plate }}</td>
                                    <td>{{ $transport->capacity }}</td>
                                    <td>{{ $transport->state }}</td>
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.transport.show', $transport->id) }}">Detalhes</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.transport.edit', $transport->id) }}">Editar</a>
                                                <a class="dropdown-item delete-button" href="#"
                                                    data-based-id="{{ route('admin.transport.destroy', $transport->id) }}">Remover</a>

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
