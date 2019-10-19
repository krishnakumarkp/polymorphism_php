<?php
namespace kkcms;
include_once("writer.php");

class Article
{
    public $title;
    public $author;
    public $date;
    public $category;

    public function __construct($title, $author, $date, $category)
    {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }
    public function write(Writer $writer) {
        return $writer->write($this);
    }

}