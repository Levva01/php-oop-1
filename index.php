<?php

    require_once __DIR__ . '/classes/Movie.php';

    $movies = [
        new Movie('Pulp Fiction', 'Quentin Tarantino', 1994,  154, 10),
        new Movie('The Rescue', 'National Geographic', 2021, 107, 8),
    ]


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie OOP</title>
    </head>
    <body>

        <h1>Cinema</h1>

        <ul>

            <?php foreach($movies as $movie) { ?>
            <li>

            <h2><?php echo $movie->title ?></h2>
            <h4><?php echo $movie->movieDirector ?></h4>
            <p>Anno di uscita: <?php echo $movie->year ?></p>
            <p>Durata film in minuti: <?php echo $movie->duration ?></p>
            <p>Prezzo: <?php echo $movie->price ?></p>
            </li>

            <?php if($movie->discount !== 0) { ?>
            <strong>Prezzo Scontato: <?php echo $movie->discount; ?></strong>
            <?php } ?>
            
            <?php } ?>
        </ul>
        
        
    </body>
</html>