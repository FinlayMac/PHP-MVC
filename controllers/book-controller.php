<?php
include_once("models/book-model.php");
include_once('models/book.php');
include_once('views/card-view.php');

class BookController
{

    public $bookModel;
    public function __construct()
    {
        $this->bookModel = new BookModel();
    }


    public function invoke()
    {

        $result = $this->bookModel->getAllBooks();

        if (count($result) > 0) {

            echo  '<section class="book-grid">';

            foreach ($result as $singleBook) {
                $newCard = new CardView($singleBook->name, $singleBook->author, $singleBook->description);
            }

            $myBook = new CardView("Dune", "Frank Herbert", "");

            echo  '</section>';
        } else {
            echo 'There are no books in the database';
        }
    }
}
