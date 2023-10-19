<?php

class Movie
{
    public $title;

    public $description;

    public $img_url;

    public $cast;

    public $genre;
    /* 
    public $language;


    public $rating; 
 */
    function __construct(
        $title,
        $description,
        $img_url,
        $cast,
        $genre,
        /* 
        $language,
        $rating,
         */
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->img_url = $img_url;
        $this->cast = $cast;
        $this->genre = $genre;
        /*  
        $this->language = $language;
        $this->rating = $rating; 
         */
    }

    function getTitle()
    {
        return $this->title;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getImg()
    {
        return $this->img_url;
    }

    function getGenre()
    {
        return $this->genre;
    }

    function getCast()
    {
        return $this->cast;
    }
}

$movies = [];

$matrix = new Movie('Matrix', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum est?', 'https://cdn.pixabay.com/photo/2016/01/22/08/20/film-1155439_1280.jpg', ['claudio bisio', 'lino banfi'], ['action', 'drama']);

$madagascar = new Movie('Madagascar', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum est?', 'https://cdn.pixabay.com/photo/2016/01/22/08/20/film-1155439_1280.jpg', ['Alex il leone', 'la zebra', 'la giraffa'], ['commedia', 'animazione']);

array_push($movies, $matrix, $madagascar);
var_dump($movies);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <main>
        <div class="container">
            <div class="row mt-5">

                <?php foreach ($movies as $movie) : ?>

                    <div class="col-4">
                        <div class="card p-2">
                            <h1>title: <?= $movie->getTitle() ?></h1>
                            <small>description:</small>
                            <p><?= $movie->getDescription() ?></p>
                            <img class="img-fluid" src="<?= $movie->getImg() ?>" alt="immagine">
                            <span>cast: </span>
                            <ul>
                                <?php foreach ($movie->getCast() as $actor) : ?>
                                    <li><?= $actor; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <small>genre: </small>
                            <?php foreach ($movie->getGenre() as $genre) : ?>
                                <span><?= $genre; ?> </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </main>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>