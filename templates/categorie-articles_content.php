<!--ARTICLE-->
<div class="col-sm-8 mt-3">



    <!--TITLE-->
    <?php
    $cat_id = $_GET['cat'];
    $art_count = $db->fetch("SELECT COUNT(id) AS count FROM articles WHERE categorie_id = $cat_id");
    $cat_name = $db->fetch("SELECT name FROM articles_categorie_id WHERE id = $cat_id");
    ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $cat_name['name'];?></h1>
            <p class="lead">Колличество статей: <b><?php echo $art_count['count'];?></b></p>
        </div>
    </div>

    <!--ARTICLE CONTENT-->

    <div class="row">
        <?php
        $articles = $db->fetchAll("SELECT articles.* FROM articles WHERE articles.categorie_id = $cat_id");
        foreach ($articles as $article)
        {
            echo '<div class="col-4">
                    <div class="card">
                        <a href="article&id=' . $article['id'] . '"><img src="assets/images/' . $article['img'] . '" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                          <a href="article&id=' . $article['id'] . '"><h5 class="card-title">' . $article['title'] . '</h5></a>
                          <p class="card-text">' . htmlspecialchars(mb_strimwidth($article['description'], 0, 95, '...'), ENT_COMPAT | ENT_HTML401) . '</p>
                          <p class="card-text"><small class="text-muted">' . $article['date'] . '</small></p>
                        </div>
                    </div>
                </div>';
                }
        ?>

    </div>

</div>
