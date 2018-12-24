<?php

include_once 'prettyprint.php';

$book = new stdClass();
$book->title = "Harry Potter y el prisionero de Azkaban";
$book->author_first_name = "J. K.";
$book->author_last_name = "Rowling";

$bookFormatter = new PrettyPrint($book);

echo $book->title . " es un libro escrito por: " . $bookFormatter->getAuthor() . "<br />";
echo "Pero encontraras el libro de esta forma: " . $bookFormatter->getAuthorSortable() . "<br />";
