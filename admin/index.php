<?php 

require_once("../database.php");
require_once("../models/articles.php");

$link = db_connect();
if (isset ($_get['action']))
{
    $action = $_get['action'];
}
else
{
    $action = "";
}
if ($action == "add")
{
    include("../views/article_admin.php");
}
else
{
    $articles = articles_all($link);
    include("../views/articles_admin.php");
}
?>