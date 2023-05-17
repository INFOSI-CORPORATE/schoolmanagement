@extends('layouts.merge.dashboard')
@section('title', 'Associar Curso')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Atribuir ao Curso uma Disciplina e Classe</h1>
                </div>
            </div>

            @include('extra._Error.index')

            <div class="card-body">
                <form action="{{ route('admin.courseSubjectGrade.store') }}" method="POST">
                    @csrf

                    @include('form._formcourseSubjectGrade.index')

                </form>
            </div>
        </div>

    </div>
@endsection('content')
