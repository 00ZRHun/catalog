<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php
        // TODO 1: Create short variable names.
        $isbn = $_POST['isbn'];
        $author = $_POST['author'];
        $title = $_POST['title'];
        $price = $_POST['price'];                  

        // TODO 2: Check and filter data coming from the user.
        /* if(!empty($_POST['isbn']) &&
            !empty($_POST['author']) &&
            !empty($_POST['title']) &&
            !empty($_POST['price'])) 
            { */
        if(isset($isbn) &&
            isset($author) &&
            isset($title) &&
            isset($price)) 
            {
                // TODO 3: Setup a connection to the appropriate database.
                require_once "dbConnect.php";

                // TODO 4: Query the database.
                $query = "INSERT INTO catalogs(isbn, author, title, price) 
                        VALUES ('$isbn', '$author', '$title', '$price')";
                $result = $conn->query($query);

                // TODO 5: Display the feedback back to user.
                if(!$result) die("Book are fail to be inserted -> $query");
                else         echo "$title Book successful inserted into database.";
                
                // TODO 6: Disconnecting from the database.
                $conn->close();
            }
        else {
            // Display the alert box  
            echo "<script>alert('Please Fill in all the fields.')</script>";

            // header("Location: http://localhost/catalog/newbook.php");
        }

        
    ?>
    
    <br><br>
    <a href="newbook.php">Back</a>
</body>
</html>

