<!--CONTENT-->
<div class="col-sm-8">

<?php

//    SEARCH
if($_POST['search_query'] == ''){
    header("Location: /");
}
    if ( isset($_POST['search']) ) {
        $search = $_POST['search_query'];
        if ( !empty($search) ) {

//    Результат поиска по запросу
            echo '<h1 class="text-center">Результат поиска</h1>
              <h4 class="text-center"></h4>
              <h4 class="text-center">По запросу: <b>' . $search . '</b></h4>';
            $search_result = $db->fetchAll("SELECT * FROM articles WHERE title LIKE '%$search%'");
            foreach ($search_result as $item) {
                ?>
                <div class="card text-center m-2">
                    <div class="card-header">
                        Категория: <b><?php echo $item['title'] ?></b>
                    </div>
                    <div class="card-body">
                        <a href="article&id=<?php echo $item['id']; ?>"><img
                                src="assets/images/<?php echo $item['img']; ?>"></a>
                        <a href="article&id=<?php echo $item['id']; ?>"><h5
                                class="card-title"><?php echo $item['title']; ?></h5></a>
                        <p class="card-text"><?php echo htmlspecialchars(mb_strimwidth($item['description'], 0, 308, '...'), ENT_COMPAT | ENT_HTML401); ?></p>
                    </div>
                    <div class="card-footer text-muted">
                        <?php echo $item['date']; ?>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<h1 class="text-center">Результат поиска по запросу</h1>
              <h4 class="text-center"></h4>
              <h4 class="text-center">По запросу: <b>' . $search . '</b> ничего не найдено!</h4>';
        }
    }
?>
</div>

