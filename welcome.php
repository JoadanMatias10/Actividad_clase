<?php

    $nombre = $_POST['name'];
    $edad = $_POST['edad'];

        echo "Hola" .$nombre. "su edad es" .$edad;
        echo "<br>";

    if($edad>=18)
    
        echo "<p>Puede votar</p>";
    else

        echo "<p>No puede votar</p>";

?>