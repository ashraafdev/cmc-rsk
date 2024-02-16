<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('Template.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;200;300;400;500;600;700;800;900&family=Gelasio&family=Inter:wght@100;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400;500;600;700;800;900&family=Protest+Strike&family=Roboto:wght@100;300;500&family=Rubik&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
   
</head>

<body>
    <div class="template">

        <div id="ref">
            Ref. : {{ Session::get('ref') }}
        </div>
        <div id="date">
            le : {{ Session::get('date') }}
        </div>

        <div id="title">
            <h1>{{ Session::get('title') }}</h1>
        </div>
        <div id="object">
            <h3>Objet :
                {{ Session::get('object') }}
            </h3>
        </div>

        <div id="text">
            {{ Session::get('body') }}
        </div>

        <div id="sighanture">
            {{ Session::get('signature') }}
        </div>
    </div>
    
</body>
</html>
