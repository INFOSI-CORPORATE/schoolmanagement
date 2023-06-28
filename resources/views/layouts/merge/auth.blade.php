<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SGE - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="/dashboard/assets/img/favicon.ico">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/site/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/site/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/site/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/site/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/site/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/site/assets/css/style.css" rel="stylesheet">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .eye-icon {
            position: absolute;
            top: 50%;
            right: 0.75rem;
            transform: translateY(-50%);
            cursor: pointer;
          }
          
    </style>
</head>

<body>

    @include('layouts._include.site.nav')

    <div class="container py-5 mt-5 bg-light">

        @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var input = document.getElementById("form1example23");
        var eye = document.getElementById("eye");

        function visualizarSenha() {

            if (input.type == "password") {
                eye.src = "eye-open.png";
                input.type = "text";
            } else {
                eye.src = "eye.png";
                input.type = "password";
            }

        }
    </script>

</body>

</html>
