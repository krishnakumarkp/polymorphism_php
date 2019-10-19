<?php
include_once("article.php");
include_once("JSONWriter.php");
include_once("XMLWriter.php");
include_once("writerFactory.php");

$format = $_GET['format'] ?? "JSON";

$article = new kkcms\Article('Polymorphism', 'Steve', time(), 0);
$writer = kkcms\WriterFactory::getWriter($format);
echo $article->write($writer);
//https://code.tutsplus.com/tutorials/understanding-and-applying-polymorphism-in-php--net-14362
?>