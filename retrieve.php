<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: #111;
  }
</style>
<body>
    <h1 style="color:black;">DATA OF REGISTRATION FORM</h1>
    <table border="2">
      <thead style="background-color:grey ; color:white;">
        <tr>
          <td>id</td>
          <td>itemname</td>
          <td>price</td>
          <td>category</td>
          <td>Edit</td>
          <td>Delete</td>
         </tr>
</thead>
      
    <?php 
    include "dbconn.php"; //database connection 

      
     $records = mysqli_query($db,"select * from menu_form"); // fetch data from database
     
     while($data = mysqli_fetch_array($records))
     {
?>
<tbody style="background-color:whitesmoke;">
 <tr>
         <td><?php echo $data['id']; ?></td>
         <td><?php echo $data['itemname'];?></td>
         <td><?php echo $data['price'];?></td>
         <td><?php echo $data['category'];?></td>
          
        <td><a href="edit.php?id=<?php echo $data['id']; ?>" style="background-color:grey ; color:white;">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $data['id']; ?>"  style="background-color:grey ; color:white;" >Delete</a></td>
  </tr>	
     </tbody>
<?php
    }
?>
</table>
<br>
<ul>
        <li><a href="http://localhost/canteen/admin_home.html">Home</a></li>
        <li><a href="http://localhost/canteen/signup.html">Register</a></li>
        <li><a href="null">Contact us</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    
    
      </ul>

</body>
</html>