<!--CONTENT-->
<div class="col-sm-8">

    <!--ARTICLE CONTENT-->
    <h1 class="text-center">Последние статьи:</h1>

    <?php
    //ПАГИНАТОР
    $page = $_GET['id'];

    if($page == NULL){
        $page = 1;
    }
    $offset = 5;
    $start_page = ($page * $offset) - $offset;

    $arts = $db->fetchALL("SELECT articles_categorie_id.name, articles.*
                                FROM articles INNER JOIN  articles_categorie_id
                                 ON articles.categorie_id = articles_categorie_id.id
                                  GROUP BY date DESC LIMIT $start_page, $offset");
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
            <p class="card-text"><?php echo htmlspecialchars(mb_strimwidth($art['description'], 0, 308, '...'), ENT_COMPAT | ENT_HTML401);?></p>
        </div>
        <div class="card-footer text-muted">
            <?php echo $art['date'];?>
        </div>
    </div>
    <?php
    }
    ?>

    <?php
    //ПАГИНАТОР
        $p_count = $db->fetch("SELECT COUNT(id) AS count FROM articles");
        $p_count = $p_count['count'];
        $p_count = ceil($p_count / $offset);
    ?>
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <?php
        if($page != 1){
            $page--;
            echo '<a href="main&id=' . $page . '"><button type="button" class="btn btn-primary ml-3">&laquo; Назад</button></a>';
            $page++;
        }
        ?>
        <div class="btn-group mx-auto">
            <?php
                $i = 1;
                do {
                    echo '<a href="main&id=' . $i . '"><button type="button" class="btn btn-primary ml-1 mr-1">' . $i . '</button></a>';
                    $i++;
                } while ($p_count >= $i);
            ?>

        </div>
        <?php
        if($page != $p_count){
            $page++;
            echo '<a href="main&id=' . $page . '"><button type="button" class="btn btn-primary mr-3">Вперед &raquo;</button></a>';
            $page--;
        }
        ?>
    </div>

</div>

