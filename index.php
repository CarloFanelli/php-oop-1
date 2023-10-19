<?php

class Movie
{
    public $title;

    public $description;

    public $img_url;

    public $cast;
    /* 
    public $language;

    public $genre;

    public $rating; 
 */
    function __construct(
        $title,
        $description,
        $img_url,
        $cast,
        /* 
        $language,
        $genre,
        $rating,
         */
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->img_url = $img_url;
        $this->cast = $cast;
        /*  
        $this->language = $language;
        $this->genre = $genre;
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

    function getCast()
    {
        return $this->cast;
    }
}

$movie1 = new Movie('Matrix', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum est?', 'https://cdn.pixabay.com/photo/2016/01/22/08/20/film-1155439_1280.jpg', ['claudio bisio', 'lino banfi']);

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
            <div class="row">
                <div class="col-4">
                    <div class="card p-2">

                        <h1>title: <?= $movie1->getTitle() ?></h1>
                        <small>description:</small>
                        <p><?= $movie1->getDescription() ?></p>
                        <img class="img-fluid" src="<?= $movie1->getImg() ?>" alt="immagine">
                        <span>cast: </span>
                        <ul>
                            <?php foreach ($movie1->getCast() as $actor) : ?>
                                <li><?= $actor; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
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