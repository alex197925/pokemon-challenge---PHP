<html lang="en">
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
//                Api
if (isset($_GET['name'])) {
    $api_url = "https://pokeapi.co/api/v2/pokemon/" . $_GET['name'];
    $json = file_get_contents($api_url);
//                Get data
    $data_res = json_decode($json,true);
    $id = $data_res['id'];
    $pok_name = $data_res['forms']['0']['name'];
    $pok_image = $data_res['sprites']['other']['home']['front_default'];
    if(!$pok_image) return;
    echo"<pre>";
    $pok_moves = $data_res['moves']['0']['move']['name'];
//    Fetch species
    $species_url = $data_res['species']['url'];
    var_dump($species_url);
}

?>


<div class="container">
    <form action="#" method="GET">
        <div class="field">
            <h1>Search Pokemon!</h1>
            <input aria-label="" placeholder="Search Here" class="text" type="text" name="name" id="pokemon-id" />
            <button type="submit" id="btnNumbInput" value="submit">Click</button>
        </div>
    </form>
        <h2> <?php
            if (isset($_GET['name'])) {
                echo $pok_name;
            }
            ?><br>
        </h2>
        <h2> <?php
            if (isset($_GET['name'])) {
                   echo $id;
             }
            ?><br>
        </h2>

          <img alt="pokemon" src ="<?php
        if (isset($_GET['name'])) {
            echo $pok_image;
        }?>"

<!--               Moves-->
<h4> <?php
    if (isset($_GET['name'])) {
        if (count($data_res['moves']) > 1) {
//        var_dump($data_res['moves']);
            for ($i = 0; $i <= 4; $i++) {
//            var_dump($i);
                print_r($data_res['moves']['0']['move']['name']);
            }
        }elseif (count($data_res['moves']) === 1) {
            print_r($data_res['moves']['0']['move']['name']);
        }
    }
    ?></h4>




</div>
</body>
</html>