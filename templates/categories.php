<!--CONTENT-->
<div class="container-fluid css_axis">
    <div class="row">

        <!--NAVBAR-->
        <div class="col-sm-2">

            <div class="css_categories">
                <h1>Категории:</h1>

                <ul class="list-group">
                    <?php

                    //Получаем колличество статей по каждой категории(название)
                    $articles_cat = $db->fetchAll("SELECT articles_categorie_id.name, articles_categorie_id.id, COUNT(articles.categorie_id) AS count
                                                        FROM articles_categorie_id INNER JOIN articles
                                                         ON articles_categorie_id.id = articles.categorie_id group by articles_categorie_id.name");
                    foreach ($articles_cat as $cat)
                    {

                        echo '<a href="categorie&cat=' . $cat['id'] . '">
                                <li class="list-group-item d-flex justify-content-between align-items-center">'
                                    . $cat['name'] .
                                    '<span class="badge badge-primary badge-pill">'
                                    . $cat['count'] .
                                    '</span>
                                </li>
                              </a>';
                    }
                    ?>
                </ul>
            </div>

        </div>
