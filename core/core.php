<?php
session_start();

require_once "conn.php";
if ( isset($_POST['comment_add']) && !empty($comment = $_POST['comment']) ){
    $author = $_SESSION['user']['login'];
    $art_id = $_POST['art_id'];
    $db->execute("INSERT INTO comments (author, text, date, article_id) VALUE ('$author', '$comment', CURRENT_TIMESTAMP, '$art_id')");
    header("Location: /article&id=" . $art_id . '#comments');
}
