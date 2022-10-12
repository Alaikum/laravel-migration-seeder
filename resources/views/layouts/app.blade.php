<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <title>@yield('metaTitle')</title>
</head>

<body>


    {{-- <header>@yield('header','header Non Trovato')</header> --}}


    <main>
        @yield('content')
    </main>


    {{-- <footer>@yield('footer','Footer Non Trovato')</footer> --}}


</body>

</html>

<style>
    body {
        background-color: beige;
        color: blueviolet;
        text-align: center;
        font-family: 'Silkscreen', cursive;
    }

    div {
        border: 1px solid cyan;
        max-width: 800px;
        margin: 2rem auto;
        padding: 10px;

        background-color: burlywood
    }
    h2:hover {
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        scale: 2;
        cursor: pointer;
    }

    ul {
        list-style: none;

    }

    li:hover {
        color: black;
        text-shadow: -1px 0 magenta, 0 1px magenta, 1px 0 magenta, 0 -1px magenta;
        scale: 1.25;
        cursor: pointer;
    }
</style>
