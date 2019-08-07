<!--ARTICLE-->
<div class="col-sm-8 mt-3">



    <!--TITLE-->
    <?php
    $art_id = $_GET['id'];
    //Увеличиваем кол-во просмотров на 1
    $art = $db->fetch("SELECT * FROM articles WHERE id = $art_id");
    $cat_name = $db->fetch("SELECT id, name FROM articles_categorie_id WHERE id = $art[categorie_id]");
    ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $art['title'];?></h1>
            <p class="lead">Категория: <a href="categorie&cat=<?php echo $cat_name['id'];?>"><?php echo $cat_name['name'];?></a></p>
        </div>
    </div>

    <!--BREAD-CRUMBS-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>

    <!--ARTICLE CONTENT-->
    <?php
    $db->execute("UPDATE articles SET views = views + 1 WHERE id = $art_id");
    ?>
    <div class="card-deck css_article">
        <div class="card css_shadow">
            <img src="assets/images/<?php echo $art['img'];?>" class="card-img-top" alt="...">
            <div class="card-body">
<!--                <h5 class="card-title">--><?php //echo $art['title'];?><!--</h5>-->
                <p class="card-text"><?php echo $art['description'];?></p>
                <p class="card-text"><small class="text-muted">Автор</small></p>
                <p class="card-text"><small class="text-muted">Просмотров: <?php echo $art['views'];?></small></p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><?php echo $art['date'];?></small>
            </div>
        </div>
    </div>

</div>
