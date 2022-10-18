<?php
include_once("models/book-model.php");

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

        if ($result->num_rows > 0) {
            echo  '<section class="book-grid">';

            while ($row = $result->fetch_assoc()) {
                echo  ' <div class="book">
                            <img src="images/Book.png" alt="A vector drawing of a book" title="' . $row["book_description"] . '">
                            <h3>' . $row["book_name"] . '</h3>
                            <h4>' . $row["book_author"] . '</h4>
                            </div>';
            }
            echo  '</section>';
        } else {
            echo 'There are no books in the database';
        }
    }
}
