<!--ARTICLE-->
<div class="col-sm-8 mt-3">



    <!--TITLE-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Categorie name</h1>
            <p class="lead">Колличество статей:</p>
        </div>
    </div>

    <!--ARTICLE CONTENT-->

    <div class="row">
        <?php
        $cat_id = $_GET['cat'];
        $articles = $db->fetchAll("SELECT * FROM articles WHERE articles.categorie_id = $cat_id");
        foreach ($articles as $article)
        {

            echo '<div class="col-4">
                    <div class="card">
                        <a href="article&id=' . $article['id'] . '"><img src="assets/images/' . $article['img'] . '" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                          <a href="article&id=' . $article['id'] . '"><h5 class="card-title">' . $article['title'] . '</h5></a>
                          <p class="card-text">' . $article['description'] . '</p>
                          <p class="card-text"><small class="text-muted">' . $article['date'] . '</small></p>
                        </div>
                    </div>
                </div>';
                }
        ?>

    </div>

</div>
