<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="stylesheet" href="{{ public_path('Template.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;200;300;400;500;600;700;800;900&family=Gelasio&family=Inter:wght@100;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400;500;600;700;800;900&family=Protest+Strike&family=Roboto:wght@100;300;500&family=Rubik&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: "Montserrat", sans-serif;

        }


        .template {
            width: 47vw;
            height: 100vh;
            background-image: url("Sans.jpeg");
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
        }

        #ref {
            position: absolute;
            top: 5vh;
            right: 4vw;
        }

        #date {
            position: absolute;
            top: 20%;
            right: 4vw;
        }

        #title {
            position: absolute;
            top: 25%;
            width: 100%;
            text-align: center;
            font-weight: bold;
            font-family: "Montserrat", sans-serif;
        }

        #text {
            position: absolute;
            top: 44%;
            width: calc(100% - 10vw);
            text-align: justify;
            left: 50%;
            transform: translateX(-50%);
            line-height: 25px;
            font-family: "Roboto", sans-serif !important;
            font-weight: 100;
            font-style: normal;
        }


        #sighanture {
            right: 8vw;
            bottom: 10%;
            position: absolute;
            text-align: justify;
            width: 10vh;
        }

        #object {
            position: absolute;
            top: 35%;
            left: 4vw;
            width: 80%;
            font-family: "Montserrat", sans-serif !important;
            word-break: break-all;
        }


        #object h3 {
            word-wrap: normal;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    {{ $slot }}
</body>

</html>
