{{--  <!DOCTYPE html>
<html>

<head>
    <title>Cartão de Estudante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-image {
            width: 5rem;
            height: 5rem;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="">
        <img class="card-image" src="storage/images/dTXUx4yLX2XHiBDO5vaaa5Vb1vWGqVGEm3iBTw6X.png"
            alt="Imagem - {{ $registration->students->name }}">
        <p class="">Nome: {{ $registration->students->name }}</p>
        <p class="">Nº de Processo: {{ $registration->students->nProcess }}</p>
        <p class="">Curso: {{ $registration->courses->name }}</p>
        <p class="">Turma: {{ $registration->classes->name }}</p>
        <p class="">Classe: {{ $registration->grades->name }}</p>
        <p class="">Ano Letivo: {{ $registration->schoolyears->name }}</p>
    </div>
</body>

</html>  --}}




{{--  Ollll  --}}

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Cartão de Estudante - {{ now() }}</title>
    <style>
        @page {
            size: 8.5cm 5.4cm;
            margin: -5px;
        }

        * {

            font-family: Arial, Helvetica, sans-serif;
        }

        section {
            margin-top: 40px;
        }
    </style>
</head>

<body style="background-image: url('dashboard/assets/img/background-1.jpg');
             background-position: top left;
             background-repeat: no-repeat;
             background-image-resize: 2;
             background-image-resolution: from-image; ">

             <header style="text-align: center; margin-top:10px;">
                <div class="img">
                    <img style="width:45px; height:48px;" src="dashboard/assets/img/insignia.png">
                </div>
                <div style="font-size:8px;">REPÚBLICA DE ANGOLA</div>
                <div style="font-size:8px;">MINISTÉRIO DA EDUCAÇÃO</div>
                <div style="font-size:8px;">SISTEMA DE GESTÃO ESCOLAR</div>
            </header>

    <div>

        <p style="font-size:10px; margin-top:20px; margin-left:10px;">
            <b style="font-size:12px;">Nome:</b> 
            {{ $registration->students->name }}
        </p>
        <p style="font-size:10px; margin-top:-4px; margin-left:10px;"> 
            <b style="font-size:12px;">Nº de Processo:</b>  {{ $registration->students->nProcess }}
        </p>
        <p style="font-size:10px; margin-top:-4px; margin-left:10px; "> 
            <b style="font-size:12px;">Turma:</b>  {{ $registration->classes->name }}
        </p>
        <p style="font-size:10px; margin-top:-4px; margin-left:10px; "> 
            <b style="font-size:12px;">Classe:</b>  {{ $registration->grades->name }}
        </p> 
        
        <img style="margin-top:-90px; margin-left:220px; height:85px; width:85px;" class="img-fluid"
            src="storage/images/{{ $registration->image }}" alt="">

    </div>

</body>

</html>
