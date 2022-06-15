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
//                Api

                $api_url = "https://pokeapi.co/api/v2/pokemon/" . $_GET['name'];
                $json = file_get_contents($api_url);
//                Get data
                $data_res = json_decode($json,true);
                var_dump($data_res);
                $id = $data_res['id'];
//                echo $id;echo "<br>";
                $name = $data_res['forms']['0']['name'];
//                echo $name; echo "<br>";
                $image = $data_res['sprites']['front_default'];
                ?>


<div class="container">
    <form action="#" method="GET">
        <div class="field">
            <h1>Search Pokemon!</h1>
            <input placeholder="Search Here" class="text" type="text" name="name" id="pokemon-id" />
            <button type="submit" id="btnNumbInput" value="submit">Click</button>
        </div>
        <div class="info">
            <h1><?php echo $name;?></h1>
            <h3><?php echo $id;?></h3>
        </div>
    </form>


    <img src="<?php echo $image;?>">
</div>



</body>
</html>