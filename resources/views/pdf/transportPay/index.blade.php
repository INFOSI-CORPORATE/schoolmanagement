<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Maticulados-{{ date('d/m/Y', strtotime(now())) }}</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        header {
            text-align: center;
            padding: 1.5rem;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="img">
            <img src="dashboard/assets/img/insignia.png" alt="">
        </div>
        <div class="text-center">REPÚBLICA DE ANGOLA</div>
        <div class="text-center">MINISTÉRIO DA EDUCAÇÃO</div>
        <div class="text-center">SISTEMA DE GESTÃO ESCOLAR</div>
        <div class="text-center">LISTA DE PAGAMENTOS DE PROPINAs</div>
        <div class="text-center">MÊS DE "<b>{{ $month }}</b>"</div>
        <div class="text-center">ANO LECTIVO "<b>{{ $schoolyear }}</b>", </div>
    </header>

    <main>
        <div class="main">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Nº de Processo</th>
                        <th>Ano lectivo</th>
                        <th>Valor pago</th>
                        <th>Estado do Pagamento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transports as $item)
                        @if ($pay == null && $item->state == "Pago")
                            @continue
                        @elseif ($cancel == null && $item->state == "Cancelado")
                            @continue
                        @elseif ($pending == null && $item->state == "Pendente")
                            @continue
                        @else
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>{{ $item->students->name }}</td>
                                <td>{{ $item->students->nProcess }}</td>
                                <td>{{ $item->schoolyears->name }} </td>
                                <td>{!! number_format($item->price, 2, ',', '.') . ' ' . 'kz' !!}</td>
                                <td>{{ $item->state }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <hr class="pylarge bg-dark">
    <footer class="col-12 mt-2 text-center" id="footer">

        <small class="text-left text-dark">
            Documento Processado por Computador. <br>
        </small>

    </footer>


</body>

</html>
