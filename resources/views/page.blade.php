<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D.E.C HELPDESK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        */body {
            font-family: Lato
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Catamaran;
            font-weight: 800 !important
        }

        .btn-xl {
            text-transform: uppercase;
            padding: 1.5rem 3rem;
            font-size: .9rem;
            font-weight: 700;
            letter-spacing: .1rem
        }

        .bg-black {
            background-color: #000 !important
        }

        .rounded-pill {
            border-radius: 5rem
        }

        .navbar-custom {
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: rgba(0, 0, 0, .7)
        }

        .navbar-custom .navbar-brand {
            text-transform: uppercase;
            font-size: 1rem;
            letter-spacing: .1rem;
            font-weight: 700
        }

        .navbar-custom .navbar-nav .nav-item .nav-link {
            text-transform: uppercase;
            font-size: .8rem;
            font-weight: 700;
            letter-spacing: .1rem
        }

        header.masthead {
            position: relative;
            overflow: hidden;
            padding-top: calc(7rem + 72px);
            padding-bottom: 7rem;
            background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover
        }

        header.masthead .masthead-content {
            z-index: 1;
            position: relative
        }

        header.masthead .masthead-content .masthead-heading {
            font-size: 4rem
        }

        header.masthead .masthead-content .masthead-subheading {
            font-size: 2rem
        }

        header.masthead .bg-circle {
            z-index: 0;
            position: absolute;
            border-radius: 100%;
            background: linear-gradient(0deg, #ee0979 0, #1cdf98 100%)
        }

        header.masthead .bg-circle-1 {
            height: 90rem;
            width: 90rem;
            bottom: -55rem;
            left: -55rem
        }

        header.masthead .bg-circle-2 {
            height: 50rem;
            width: 50rem;
            top: -25rem;
            right: -25rem
        }

        header.masthead .bg-circle-3 {
            height: 20rem;
            width: 20rem;
            bottom: -10rem;
            right: 5%
        }

        header.masthead .bg-circle-4 {
            height: 30rem;
            width: 30rem;
            top: -5rem;
            right: 35%
        }

        @media (min-width:992px) {
            header.masthead {
                padding-top: calc(10rem + 55px);
                padding-bottom: 10rem
            }

            header.masthead .masthead-content .masthead-heading {
                font-size: 6rem
            }

            header.masthead .masthead-content .masthead-subheading {
                font-size: 4rem
            }
        }

        .bg-primary {
            background-color: #ee0979 !important
        }

        .btn-primary {
            background-color: #ee0979;
            border-color: #ee0979
        }

        .btn-primary:active,
        .btn-primary:focus,
        .btn-primary:hover {
            background-color: #bd0760 !important;
            border-color: #bd0760 !important
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 .2rem rgba(238, 9, 121, .5)
        }

        .btn-secondary {
            background-color: #1cdf98;
            border-color: #1cdf98
        }

        .btn-secondary:active,
        .btn-secondary:focus,
        .btn-secondary:hover {
            background-color: #c50 !important;
            border-color: #c50 !important
        }

        .btn-secondary:focus {
            box-shadow: 0 0 0 .2rem rgba(255, 106, 0, .5)
        }

        .navbar-custom,
        footer {
            background-color: #fc7d1c !important;
        }

        header.masthead {

            background-position: center center;
            background-size: cover;
        }

        .btn-primary {
            background-color: #fc7d1c;
            border-color: #fc7d1c;
        }

        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:focus,
        .btn-primary:focus-within {
            background-color: #2c7777 !important;
            border-color: #2c7777 !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">USUARIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">AGENTE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('dashboard') }}">ADMINISTRADOR</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">HELPDESK</h1>
                <h2 class="masthead-subheading mb-0">D.E.C</h2>
                <a href="{{url('usuarios/create')}}" class="btn btn-primary btn-xl rounded-pill mt-5">Registro de Usuario</a>
            </div>
        </div>
    </header>
    <footer class="py-5">
        <div class="container">
            <p class="m-0 text-center text-white medium">HELPDESK 2023 UCR</p>
        </div>
    </footer>
</body>

</html>