<?php
include '../core/db_connect.php';
$stmt = $pdo->query('SELECT * FROM posts');

$content='<h1>Blog Posts</h1>';
$content .= "<ul>";
while($row=$stmt->fetch()){
    $content .= "<li><a href=\"post.php?slug={$row['slug']}\">{$row['title']}</a></li>";
}
$content .= "</ul>";



include '../core/layout.php';