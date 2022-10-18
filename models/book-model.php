<?php

class BookModel
{
    public function getAllBooks()
    {

        include_once('private/connection.php');

        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);


        $conn->close();
        return $result;
    }
}
