@extends('layouts.merge.dashboard')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Alunos Associados</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Alunos Associados</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Aluno</th>
                                <th>Nº de Processo</th>
                                <th>Classe</th>
                                <th>Ano lectivo</th>
                                <th>Turno</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coursesClassesGradesStudentsSchoolyears as $courseClasseGradeStudentSchoolyear)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $courseClasseGradeStudentSchoolyear->students->name }}</td>
                                    <td>{{ $courseClasseGradeStudentSchoolyear->students->nProcess }}</td>
                                    <td>{{ $courseClasseGradeStudentSchoolyear->grades->name }}</td>
                                    <td>{{ $courseClasseGradeStudentSchoolyear->schoolyears->name }}</td>
                                    <td>{{ $courseClasseGradeStudentSchoolyear->season }}</td>
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.courseClasseGradeStudentSchoolyear.show', $courseClasseGradeStudentSchoolyear->id) }}">Detalhes</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.courseClasseGradeStudentSchoolyear.edit', $courseClasseGradeStudentSchoolyear->id) }}">Editar</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.courseClasseGradeStudentSchoolyear.destroy', $courseClasseGradeStudentSchoolyear->id) }}">Eliminar</a>

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
