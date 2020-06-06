<?php

define('MAX_NUMBER', 50);
define('MIN_NUMBER', 10);
$mimon= rand(MIN_NUMBER, MAX_NUMBER);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mimoni</title>
</head>
      <body>
<?php
     for ($i=0; $i <= $mimon ; $i++) { 
         echo '<img src="https://i.pinimg.com/originals/81/94/99/819499c6e3d0c992260524a5df49a623.jpg" alt="mimon">';
     }










?>
      </body>
</html>