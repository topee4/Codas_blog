<!--CONTENT-->
<div class="col-sm-8">

    <!--ARTICLE CONTENT-->

    <h1 class="text-center">Последние статьи:</h1>

    <?php
    $arts = $db->fetchALL("SELECT articles_categorie_id.name, articles.*
                                FROM articles INNER JOIN  articles_categorie_id
                                 ON articles.categorie_id = articles_categorie_id.id
                                  GROUP BY date DESC LIMIT 5");
    foreach ($arts as $art)
    {
     ?>
    <div class="card text-center m-2">
        <div class="card-header">
            Категория: <b><?php echo $art['name']?></b>
        </div>
        <div class="card-body">
            <a href="article&id=<?php echo $art['id'];?>"><img src="assets/images/<?php echo $art['img'];?>"></a>
            <a href="article&id=<?php echo $art['id'];?>"><h5 class="card-title"><?php echo $art['title'];?></h5></a>
            <p class="card-text"><?php echo $art['description'];?></p>
        </div>
        <div class="card-footer text-muted">
            <?php echo $art['date'];?>
        </div>
    </div>
    <?php
    }
    ?>


</div>