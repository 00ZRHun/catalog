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
    
    require_once "login.php";
    $conn = new mysqli($hn, $un, $pw, $db);

    // TODO 1: Create short variable names.
    /* 
    isbn
    author
    title
    price
    submit 
    */

    if(isset($_POST['isbn']) &&
        isset($_POST['author']) &&
        isset($_POST['title']) &&
        isset($_POST['price'])) {
            $isbn = $_POST['isbn'];
            $author = $_POST['author'];
            $title = $_POST['title'];
            $price = $_POST['price'];

            $query = "INSERT INTO catalogs(isbn, author, title, price) 
            VALUES ('$isbn', '$author', '$title', '$price')";

            $result = $conn->query($query);
        


    // TODO 2: Check and filter data coming from the user.


    // TODO 3: Setup a connection to the appropriate database.


    // TODO 4: Query the database.


    // TODO 5: Display the feedback back to user.
    if(!$result) die("Book are fail to be inserted -> $query");
    // else         echo "Good to Go";
    }

    // TODO 6: Disconnecting from the database.
    $conn->close();

    ?>
</body>
</html>