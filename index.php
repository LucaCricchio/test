<?php
//VEDERE COME AGGIUNGERE BOOSTRAP SENZA LARAVEL E MODIFICARE LE VARIABILI DI BOOTSTRAP

?>

<html>
<head>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/resources/assets/sass/app.scss">

    <script>
        $(document).ready(function(){
            $('#test').text('cacca2222');
        });
        </script>
</head>
<body>
<p id="test">
    aaa
</p>

<a href="#" class="btn btn-primary">Test bootstrap</a>

<script src="dist/bundle.js">

</script>
<script>

    $('#test').text('cacca');
</script>
</body>
</html>



