
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "real-estate");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $p_title =  $_REQUEST['p_title'];
        $p_desc = $_REQUEST['p_desc'];
        $price =  $_REQUEST['price'];
    
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO properties VALUES ('$p_title',
            '$p_desc','$price')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$p_title\n $p_desc\n "
                . "$price\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        header("Location: properties.php?p_title=$p_title&p_desc=$p_desc&price=$price");
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>