<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Book Entry</title>
</head>
<body>
    <h1>New Book Entry</h1>

    <!-- A HTML form to allow user enters a new book. -->
    <!-- Send the form-data to a file named "insert_book.php" with the HTTP POST method. -->
    <form action="insert_book.php" method="post">
        <table border="0">
            <tr>
                <!-- An input type of text box, named "isbn" with maxlength "13" and size "13". -->
                <td>ISBN</td>
                <td><input type="text" name="isbn" maxlength="13" size="13"></td>
            </tr>
            <tr>
                <!-- An input type of text box, named "author" with maxlength "30" and size "30". -->
                <td>Author</td>
                <td><input type="text" name="author" maxlength="30" size="30"></td>
            </tr>
            <tr>
                <!-- An input type of text box, named "title" with maxlength "60" and size "30". -->
                <td>Title</td>
                <td><input type="text" name="title" maxlength="60" size="30"></td>
            </tr>
            <tr>
                <!-- An input type of text box, named "price" with maxlength "7" and size "7". -->
                <td>Price </td>
                <td>RM<input type="text" name="price" maxlength="7" size="7"></td>
            </tr>
            <tr>
                <!-- A submit button with the display text as "Register" -->
                <td colspan="2"><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>

    <?php
        require_once "dbConnect.php";

        $query = "SELECT * FROM catalogs ORDER BY isbn";
        $result = $conn->query($query);

        if(!$result)    die("Query Problem -> $query");
        // else            echo("Good to Go");
        else            echo "</br></br><b><h3>====== Book Entry Lists ======</h3></b>";

        $rows = $result->num_rows;

        for($i=0; $i<$rows; $i++) {
            // fetch_array(MYSQLI_ASSOC)
            /* $row = $result->fetch_array(MYSQLI_ASSOC);

            echo "<pre>" .
                "isbn   :"  . htmlspecialchars($row['isbn'])    . "</br>" .
                "author :"  . htmlspecialchars($row['author'])  . "</br>" .
                "title  :"  . htmlspecialchars($row['title'])   . "</br>" .
                "price  :"  . htmlspecialchars($row['price'])   . "</br>" .
            "</pre>"; */

            // fetch_array(MYSLQI_NUM)
            $row = $result->fetch_array(MYSQLI_NUM);

            // echo $i+1;
            echo "<pre>" .
                // $i+1 .
                ($i+1) . ")" . "</br>" .
                "   isbn   :" . htmlspecialchars($row[0]) . "</br>" .
                "   author :" . htmlspecialchars($row[1]) . "</br>" .
                "   title  :" . htmlspecialchars($row[2]) . "</br>" .
                "   price  :RM" . htmlspecialchars($row[3]) . "</br>" .
            "</pre>";
        }
        
        $conn->close();
    ?>
</body>
</html>