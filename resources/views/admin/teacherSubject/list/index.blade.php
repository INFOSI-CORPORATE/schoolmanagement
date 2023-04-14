@extends('layouts.merge.dashboard')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Professores por Disciplinas</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Professores/Disciplina</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Disciplina</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachersSubjects as $teachersSubject)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $teachersSubject->teachers->name }}</td>
                                    <td>{{ $teachersSubject->teachers->email }}</td>
                                    <td>{{ $teachersSubject->subjects->name }}</td>
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.teacherSubject.show', $teachersSubject->id) }}">Detalhes</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.teacherSubject.edit', $teachersSubject->id) }}">Editar</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.teacherSubject.destroy', $teachersSubject->id) }}">Eliminar</a>

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
