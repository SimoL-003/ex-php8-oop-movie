<?php
require_once './App/Traits/FilmMakers.php';
require_once './App/Models/Genre.php';
require_once './App/Models/Movie.php';
require_once './data/genres.php';
require_once './data/movies.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">

</head>

<body>
    <section class="pt-5">
        <div class="container">

            <h1>Film</h1>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Director</th>
                        <th scope="col">Year</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Genres</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table row sample -->
                    <!-- <tr>
                        <th scope="row">Title</th>
                        <td>Director</td>
                        <td>Year</td>
                        <td>Duration</td>
                        <td>Genres</td>
                    </tr> -->
                    <?php
                    foreach ($moviesArray as $movie) {
                        echo "
                        <tr>
                            <th scope='row'>{$movie->title}</th>
                            <td>{$movie->director}</td>
                            <td>{$movie->year}</td>
                            <td>{$movie->getDuration()}</td>
                            <td>{$movie->getGenresString()}</td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </section>
</body>

</html>