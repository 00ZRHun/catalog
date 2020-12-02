<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search Results</title>
</head>
<body>
    <h1>Book Search Results</h1>
    <?php
        // TODO 1: Create short variable names.
        $searchtype = $_POST['searchtype'];
        $searchterm = $_POST['searchterm'];

        // TODO 2: Check and filter data coming from the user.
        if(isset($_POST['searchtype']) && isset($_POST['searchterm'])) 
        {

            // TODO 3: Setup a connection to the appropriate database.
            require_once "login.php";
            $conn = new mysqli($hn, $un, $pw, $db);

            // TODO 4: Query the database.
            $query = "SELECT * FROM catalogs WHERE $searchtype = '$searchterm'";

            // TODO 5: Retrieve the results.
            $result = $conn->query($query);

            // TODO 6: Display the results back to user.
            if(!$result) echo "query -> $query";
            else {
                // if($rows = $result->num_rows>0){ // NOT WORKIGN
                $rows = $result->num_rows;
                if($rows>0){
                    
                    echo "<h3>$searchterm in $searchtype</h3><b><h3>====== Book Entry Lists ======</h3></b>";
                    // echo $rows;
                    
                    for($i=0; $i<$rows; $i++) {
                        $row = $result->fetch_array(MYSQLI_ASSOC);

                        echo "<pre>" . 
                            ($i+1) . ")" . "<br>" .
                            "   isbn   :" . htmlspecialchars($row['isbn']) . "<br>" . 
                            "   author :". htmlspecialchars($row['author']) . "<br>" . 
                            "   title  :" . htmlspecialchars($row['title']) . "<br>" . 
                            "   price  :" . htmlspecialchars($row['price']) . "<br>" . 
                        "</pre>";
                    }
                } else {
                    echo "<h3>$searchterm in $searchtype</h3> Your search result is not found";
                }
            }

            // TODO 7: Disconnecting from the database.
            $conn->close();

        }
    ?>
</body>
</html>