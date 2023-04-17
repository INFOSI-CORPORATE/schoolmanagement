@extends('layouts.merge.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Atualizar associação do Aluno "{{ $courseClasseGradeStudent->students->name }}"</h1>
                </div>
            </div>

            @include('error.form')

            <div class="card-body">

                <form action="{{ route('admin.courseClasseGradeStudent.update', $courseClasseGradeStudent->id) }}" method="POST">
                    @csrf
                    @include('form._formCourseClasseGradeStudent.index')

                </form>
            </div>
        </div>

    </div>
@endsection('content')