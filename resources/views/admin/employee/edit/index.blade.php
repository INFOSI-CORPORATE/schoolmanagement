@extends('layouts.merge.dashboard')
@section('title', 'Editar Funcionário') 
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Atualizar o Funcionário "{{ $employee->name }}"</h1>
                </div>
            </div>

            @include('extra._Error.index')

            <div class="card-body">

                <form action="{{ route('admin.employee.update', $employee->id) }}" method="POST">
                    @csrf
                    @include('form._formEmployee.index')

                </form>
            </div>
        </div>

    </div>
@endsection('content')
