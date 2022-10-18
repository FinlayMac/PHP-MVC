<?php
class BookController
{

    public function invoke()
    {
        include_once('private/connection.php');

        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);


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

        $conn->close();
    }
}
