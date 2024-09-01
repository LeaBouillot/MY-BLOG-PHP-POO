<?php
require_once("./Models/Database.class.php");
require_once("./Models/Article.class.php");
require_once("./Models/Category.class.php");

$articleModel = new Article;
$categoryMoel = new Category;

$articles = $articleModel->getAll();
$categories = $categoryMoel->getAll();

include_once("./Views/home.php");
