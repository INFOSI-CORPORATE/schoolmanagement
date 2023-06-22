@extends('layouts.merge.dashboard')
@section('title', 'Cadastrar Departamento')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Cadastrar Departamento</h1>
                </div>
            </div>

            @include('extra._Error.index')

            <div class="card-body">
                <form action="{{ route('admin.department.store') }}" method="POST">
                    @csrf

                    @include('form._formDepartment.index')

                </form>
            </div>
        </div>

    </div>
@endsection('content')
