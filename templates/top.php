<!--TOP ARTICLES-->
<div class="col-sm-2">

    <?php
    //$top_count задает кол-во вывода ТОП статей по просмотрам
    $top_art_count = 3;
    ?>
    <h2>ТОП <?php echo $top_art_count;?> читаемых:</h2>

    <?php

    $top_art = $db->fetchAll("SELECT * FROM articles ORDER BY views DESC LIMIT $top_art_count");
    foreach ($top_art as $art)
    {
        echo '<div class="card">
                <a href="article&id=' . $art['id'] . '"><img src="assets/images/' . $art['img'] . '" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <a href="article&id=' . $art['id'] . '"><h5 class="card-title">' . $art['title'] . '</h5></a>
                    <p class="card-text">' . htmlspecialchars(mb_strimwidth($art['description'], 0, 95, '...'), ENT_COMPAT | ENT_HTML401) . '</p>
                </div>
              </div>';
    }
    ?>

</div>

</div>
</div>