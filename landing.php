
<!DOCTYPE html>
<html>
 
<head>
    <title>After register page</title>
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
        $username =  $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $gender =  $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $password =  $_REQUEST['password'];
    
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users VALUES ('$username','$email','$gender','$address','$password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
           // echo nl2br("\n$username\n $email\n $gender\n$address\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>