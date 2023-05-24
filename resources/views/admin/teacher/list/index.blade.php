@extends('layouts.merge.dashboard')
@section('title', 'Lista de Professores')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Professores</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Professores</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Nº do BI</th>
                                <th>Email</th>
                                <th>Contacto</th>
                                <th>Especialidade</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->nBi }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->contact }}</td>
                                    <td>{{ $teacher->specialty }}</td>
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.teacher.show', $teacher->id) }}">Detalhes</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.teacher.edit', $teacher->id) }}">Editar</a>
                                                <a class="dropdown-item delete-button"
                                                    data-based-id="{{ route('admin.teacher.destroy', $teacher->id) }}">Remover</a>


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
