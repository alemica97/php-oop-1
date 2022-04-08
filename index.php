<?php

    require_once __DIR__.'/movie_class.php'
    // echo __DIR__ .'/movie_class.php';

    // Istanzio(creo) gli oggetti tramite la classe Movie creata nel file movie_class.php 
    $film1 = new Movie("Jackie Brown","Quentin Tarantino","en-EN",1997,3.56,"Thriller");

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
    
    <p><?php echo $film1->printMovie(); ?></p>

</body>
</html>