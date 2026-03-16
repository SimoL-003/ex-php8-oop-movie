<?php
require_once './script.php';

$sciFi = new Genre("Sci-Fi");

$inception = new Movie('Inception', 'Christopher Nolan', 2010, 148, $sciFi);
$theMatrix = new Movie('The Matrix', 'The Wachowskis', 1999, 136, $sciFi);

var_dump($inception);
echo $inception->getDuration();
var_dump($theMatrix);
echo $theMatrix->getDuration();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

</body>

</html>