<?php
$route = $_GET['route'];

//LINK
include 'templates/link.php';


//HEADER
include 'templates/header.php';






//CONTENT
switch ($route){
    case '':
    case 'main':
        include 'pages/main.php';
        break;
    case 'article':
        include 'pages/article.php';
        break;
    case 'categorie':
        include "pages/categorie-articles.php";
        break;
    default:
        include "pages/404.php";
}






//FOOTER
include 'templates/footer.php';


//SCRIPT
include 'templates/script.php';