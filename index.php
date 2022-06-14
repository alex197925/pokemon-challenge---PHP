<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR:wght@100;300;400&family=IBM+Plex+Sans+Thai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
include("main.php");
?>
<div class="container">
    <section class="material">
        <form action="#" method="post">
            <div class="field">
                <h1>Search Pokemon!</h1>

                <?php
//                Api
                $json = file_get_contents("https://pokeapi.co/api/v2/pokemon/");
//                Get data
                $data = json_decode($json);
                var_dump($data);
                ?>


                <input placeholder="Search Here" class="text" type="text" name="pokemon-id" id="pokemon-id" />
                <button type="button" id="run">Click</button>
            </div>
        </form>
        <div class="data">
            <span>Name: </span>
            <h2 id="pokemon-name"></h2>
            <span>ID: </span>
            <h2 id="id"> </h2>
            <span>Moves: </span>
            <h2 id="moves"></h2>
        </div>
        <div class="card">
            <div id="pokemon-img"></div>
        </div>
    </section>
</div>
</body>
</html>