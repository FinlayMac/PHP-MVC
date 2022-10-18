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
        include_once("controllers/book-controller.php");
        
        $bookController = new BookController();
        $bookController->invoke();

        ?>

    </main>
    <footer>


    </footer>

</body>

</html>