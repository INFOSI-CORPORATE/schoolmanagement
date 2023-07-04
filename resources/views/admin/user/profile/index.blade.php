@extends('layouts.merge.dashboard')
@section('title', 'Perfil')

@section('content')

    <!-- Page Heading -->
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary">Perfil de Usuário</h6>
        </div>

        <div class="row gutters-sm">
            <div class="col-md-3 d-none d-md-block">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav flex-column nav-pills nav-gap-y-1">
                            <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity-log">
                                    <path d="M6 3l6 3 6-3"></path>
                                    <path d="M6 9l6 3 6-3"></path>
                                    <path d="M6 15l6 3 6-3"></path>
                                    <path d="M6 21l6 3 6-3"></path>
                                </svg>Informação de Perfil
                            </a>
                            <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings mr-2">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>Configuração de Conta
                            </a>
                            <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shield mr-2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>Segurança
                            </a>
                            <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bell mr-2">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>Registro
                            </a>
                            <a href="#log" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>Log de Atividades
                            </a>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    @include('extra._Error.index')
                    <div class="card-header border-bottom mb-3 d-flex d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#log" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane active" id="profile">
                            <h6>INFORMAÇÃO DE PERFIL DE
                                @foreach (Auth::user()->roles as $item)
                                    @if ($item->name == 'admin')
                                        "ADMINISTRADOR"
                                    @elseif($item->name == 'gerenciador')
                                        "GESTOR"
                                    @elseif($item->name == 'registrador')
                                        "REGISTRADOR"
                                    @endif
                                @endforeach
                            </h6>
                            <hr>
                            <form action="{{ route('admin.profile.dados', Auth::user()->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nome Completo</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        aria-describedby="name" placeholder="Seu Nome Completo" required
                                        value="{{ auth()->user()->name }}">
                                    <small id="name" class="form-text text-muted">Seu nome pode aparecer por aqui
                                        onde você é mencionado. Você pode alterá-lo ou removê-lo a qualquer momento.</small>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email de Endereço</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        aria-describedby="fullEmailHelp" placeholder="Enter your fullEmail" required
                                        value="{{ auth()->user()->email }}">
                                    <small id="fullEmailHelp" class="form-text text-muted">Seu email pode aparecer por
                                        aqui. Você pode alterá-lo.</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
                                <button type="reset" class="btn btn-light">Redefinir alterações</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="account">
                            <h6>CONFIGURAÇÃO DE CONTA</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label class="d-block text-danger">Deletar a conta</label>
                                    <p class="text-muted font-size-sm">Depois de excluir sua conta, não há como voltar
                                        atrás.</p>
                                </div>
                                <a class="btn btn-danger delete-button"
                                    data-based-id="{{ route('admin.profile.destroy', Auth::user()->id) }}">Remover
                                    Conta</a>
                            </form>
                        </div>
                        <div class="tab-pane" id="security">
                            <h6>CONFIGURAÇÃO DE SEGURANÇA</h6>
                            <hr>
                            <form action="{{ route('admin.profile.password', Auth::user()->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="d-block">Atualizar a Palavra-Passe</label>
                                    <input type="password" class="form-control" name="originPassword" id="originPassword"
                                        placeholder="Palavra-Passe Antiga" required>
                                    <input type="password" class="form-control mt-1" name="password"
                                        id="password" placeholder="Nova Palavra-Passe" required>
                                    <input type="password" class="form-control mt-1" name="password_confirmation"
                                        id="password_confirmation" placeholder="Confirmar Palavra-Passe" required>
                                </div>
                                <button class="btn btn-primary" type="submit">Atualizar Palavra-Passe</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="notification">
                            <h6>DATA DE REGISTRO</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <div class="small text-muted mb-3">Registro da data exacta em que houve alterações.
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ auth()->user()->created_at }}
                                        </p>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <p class="mb-1 text-dark"><b>Última Actualização</b>
                                            {{ auth()->user()->updated_at }}
                                        </p>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="tab-pane" id="log">
                            <h6>LOG DE ATIVIDADE</h6>
                            <hr>
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>ID</th>
                                            <th class="text-left">CAMINHO</th>
                                            <th>IP</th>
                                            <th class="text-left">MENSAGEM</th>
                                            <th class="text-center">DATA</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">

                                        @foreach ($logs as $item)
                                            <tr class="text-center text-dark">
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td class="text-left">{{ $item->PATH_INFO }} </td>
                                                <td>{{ $item->REMOTE_ADDR }} </td>
                                                <td class="text-left">{{ $item->message }} </td>
                                                <td>{{ $item->created_at }} </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection('content')
