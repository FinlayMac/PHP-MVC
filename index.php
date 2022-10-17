<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>
    <link rel="stylesheet" href="css/bookshop.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Contact Us</li>
            </ul>
        </nav>
    </header>
    <div class="spacer"></div>
    <main>

        <h1>Check out all our books:</h1>

        <?php
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
        ?>

    </main>
    <footer>


    </footer>

</body>

</html>