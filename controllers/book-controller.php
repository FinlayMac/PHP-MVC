<?php
include_once("models/book-model.php");
include_once('models/book.php');

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
                echo  ' <div class="book">
                            <img src="images/Book.png" alt="A vector drawing of a book" title="' . $singleBook->description . '">
                            <h3>' . $singleBook->name  . '</h3>
                            <h4>' . $singleBook->author  . '</h4>
                        </div>';
            }
            echo  '</section>';
        } else {
            echo 'There are no books in the database';
        }
    }
}
