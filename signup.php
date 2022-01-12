<!DOCTYPE html>
<html>
  
<head>
    <title>signup page</title>
</head>
  
<body>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => canteen
        
        include "dbConn.php"; // Using database connection file here
          
        // Taking all 10 values from the form data(input)
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $rollnumber = $_POST['rollnumber'];
        $branch = $_POST['branch'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO signup VALUES ('$fname','$lname', '$email','$username',' $phone','$rollnumber','$branch','$password','$cpassword')";
        if($password=$cpassword){
            echo "passwords doesn't match ";
        } 
        if(mysqli_query($db, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("'$fname','$lname', '$email','$username','$password'");

        }
        
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($db);
        }
          
        // Close connection
        mysqli_close($db);
        ?>
</body>
  
</html>

