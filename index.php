<?php

require_once __DIR__ - "./Classes/movie.php";

$movies = [
    $godfather = new Movie(
        "The Godfather",
        [
            "Action","Crime",
        ],
        "1972"),
    $scarface = new Movie(
        "Scarface",
        [
            "Action",
            "Crime",
        ],
        "1983")
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