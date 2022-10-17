<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>
</head>

<body>

    <header>
        <nav></nav>
    </header>
    <main>

        <h1>Check out all our books:</h1>

        <?php
        include_once('private/connection.php');

        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);
        ?>
        <table>
            <tr>
                <th>Book Name:</th>
                <th>Book Author:</th>
                <th>Book Description:</th>
            </tr>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                 echo  '<tr>
                            <td>' . $row["book_name"] . '</td>
                            <td>' . $row["book_author"] . '</td>
                            <td>' . $row["book_description"] . '</td>
                        </tr>';
                }
           
            } else {
                echo ' 0 results';
            }

            $conn->close();
            ?>
            
        </table>
    </main>
    <footer>


    </footer>

</body>

</html>