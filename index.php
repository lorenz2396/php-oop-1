<?php

require_once __DIR__ - "/Models/movie.php";

$movies = [
    $godfather = new Movie("The Godfather"),
    $scarface = new Movie("Scarface"),
]

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP 1</title>
    </head>
    <body>
        <h2>Film al cinema</h2>
        <ul>
            <?php foreach ($movies as $movie) { ?>
                <li>
                    <?php echo $movie->printMovie() ?>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>