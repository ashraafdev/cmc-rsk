<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('Template.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;200;300;400;500;600;700;800;900&family=Gelasio&family=Inter:wght@100;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400;500;600;700;800;900&family=Protest+Strike&family=Roboto:wght@100;300;500&family=Rubik&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
</head>
<script>
        var doc = new jsPDF();
        var specialElementHandlers = {

'#editor': function (element, renderer) {

return true;

}

};

$('#generatePDF').click(function () {

doc.fromHTML($('#htmlContent').html(), 15, 15, {

'width': 700,

'elementHandlers': specialElementHandlers

});

doc.save(‘sample_file.pdf’);

});
</script>
<body>
<div class="template">

    <div id="ref">
          Ref. : dfgfgSomthing
    </div>
     <div id="date">
        le : 21/11/2025
    </div>

    <div id="title">
            <h1>Critic tache</h1>
    </div>
    <div id="object">
            <h3>Objet : oioioiuoiuoffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</h3>
    </div>

    <div id="text">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis rerum cum eum aliquid cupiditate, error ex earum a nemo asperiores esse obcaecati sapiente voluptate debitis quisquam officiis soluta repellendus nam!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis rerum cum eum aliquid cupiditate, error ex earum a nemo asperiores esse obcaecati sapiente voluptate debitis quisquam officiis soluta repellendus nam!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis rerum cum eum aliquid cupiditate, error ex earum a nemo asperiores esse obcaecati sapiente voluptate debitis quisquam officiis soluta repellendus nam!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis rerum cum eum aliquid cupiditate, error ex earum a nemo asperiores esse obcaecati sapiente voluptate debitis quisquam officiis soluta repellendus nam!
    </div>

    <div id="sighanture">
        mouad lamgharil kgjhlkjgflhkgfkh
    </div>
</div>
</body>
</html>
