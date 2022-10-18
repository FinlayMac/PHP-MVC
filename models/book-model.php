<?php

class BookModel
{
    public function getAllBooks()
    {

        include_once('private/connection.php');

        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);

        $AllBooks = array();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $nextBook = new Book(
                    $row["book_name"],
                    $row["book_author"],
                    $row["book_description"],
                );

                array_push($AllBooks, $nextBook);
            }
        }

        $conn->close();
        return $AllBooks;
    }
}
