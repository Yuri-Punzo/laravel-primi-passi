<!-- 
CONSEGNA:
Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World,
poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link
di tutte le pagine, utilizzando la funzione route()
 -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Laravel First Steps</title>
</head>

<body>
    <header>
    </header>
    <!-- /header -->
    <main>
        <h1>{{$user}}</h1>
    </main>
    <!-- /main -->
    <footer>
    </footer>
    <!-- /footer -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <!-- /Bootstrap JavaScript Libraries -->
</body>

</html>