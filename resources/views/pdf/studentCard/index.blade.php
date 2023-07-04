<!DOCTYPE html>
<html>

<head>
    <title>Cartão de Estudante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html,
        body {
            height: 100%;
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <img  class="card-text" src="/storage/images/{{ $registration->image }}" alt="Imagem - {{ $registration->students->name }}">
            <p class="card-text">Nome: {{ $registration->students->name }}</p>
            <p class="card-text">Nº de Processo: {{ $registration->students->nProcess }}</p>
            <p class="card-text">Curso: {{ $registration->courses->name }}</p>
            <p class="card-text">Turma: {{ $registration->classes->name }}</p>
            <p class="card-text">Classe: {{ $registration->grades->name }}</p>
            <p class="card-text">Ano Letivo: {{ $registration->schoolyears->name }}</p>
        </div>
    </div>
</body>

</html>
