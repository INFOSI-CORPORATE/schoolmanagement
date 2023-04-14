@extends('layouts.merge.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Atualizar o Aluno "{{ $studentSchoolyear->students->name }}" do Ano letivo "{{ $studentSchoolyear->schoolyears->name }}"</h1>
                </div>
            </div>

            @include('error.form')

            <div class="card-body">

                <form action="{{ route('admin.studentsSchoolyear.update', $studentSchoolyear->id) }}" method="POST">
                    @csrf
                    @include('form._formStudentSchoolyear.index')

                </form>
            </div>
        </div>

    </div>
@endsection('content')
