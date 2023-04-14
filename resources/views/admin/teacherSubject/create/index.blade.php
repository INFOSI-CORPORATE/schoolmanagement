@extends('layouts.merge.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Atribuir Disciplina ao Professor</h1>
                </div>
            </div>

            @include('error.form')

            <div class="card-body">
                <form action="{{ route('admin.teacherSubject.store') }}" method="POST">
                    @csrf

                    @include('form._formTeacherSubject.index')

                </form>
            </div>
        </div>

    </div>
@endsection('content')
