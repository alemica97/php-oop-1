<?php

    require_once __DIR__ .'/movie_class.php';
    // echo __DIR__ .'/movie_class.php';

    // Istanzio(creo) gli oggetti tramite la classe Movie creata nel file movie_class.php 
    $film1 = new Movie("Jackie Brown","Quentin Tarantino","en-EN",1997,3.56,"Thriller");
    $film1->winOscar(0);
    $film2 = new Movie("Forrest Gump","Robert Zemeckis","en-EN",1994,4.19,"Commedia");
    $film2->winOscar(6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Class OOP PHP</title>
</head>
<body>
    
    <ul>
        <li>
            <p><?php echo $film1->printMovie(); ?></p>
        </li>
        <li>
            <p><?php echo $film2->printMovie(); ?></p>
        </li>
    </ul>

</body>
</html>