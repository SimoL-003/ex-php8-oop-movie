<?php
require_once './script.php';

$sciFi = new Genre("Sci-Fi");
$action = new Genre("Action");

$inception = new Movie('Inception', 'Christopher Nolan', 2010, 148, [$sciFi, $action]);
$theMatrix = new Movie('The Matrix', 'The Wachowskis', 1999, 136, [$sciFi]);

$inception->producer = "Emma Thomas";
$inception->filmCompany = "Warner Bros";

var_dump($inception);
echo $inception->getProductionInfo();
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