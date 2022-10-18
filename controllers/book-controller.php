<?php
include_once("models/book-model.php");
include_once('views/card-grid-view.php');

class BookController
{

    public $bookModel;
    public function __construct()
    {
        $this->bookModel = new BookModel();
    }


    public function invoke()
    {
        $books = $this->bookModel->getAllBooks();

        if (count($books) > 0) {
            $bookGrid = new CardGridView($books);
        } else {
            echo 'There are no books in the database';
        }


    }
}
