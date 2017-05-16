<!DOCTYPE html>
<html>
<head>
    <title>Editing</title>
</head>
<body>


<?php
// including the database connection file
include_once("connect_db.php");
 
if(isset($_POST['submit']))
{    
    $id = $_POST['Id'];
    echo $name;
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $education = implode(",",$_POST["education"]);
    $city=$_POST['city'];

    
    // checking empty fields
    if(empty($name) || empty($age) || empty($gender) || empty($address) || empty($education) || empty($city)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($gender)) {
            echo "<font color='red'>Gender field is empty.</font><br/>";
        }
        if(empty($address)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        }        
        if(empty($education)) {
            echo "<font color='red'>Education field is empty.</font><br/>";
        }
        if(empty($city)) {
            echo "<font color='red'>City field is empty.</font><br/>";
        }
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE student SET name='$name',age='$age',gender='$gender',address='$address',education='$education',city='$city' WHERE Id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        
    }
}
?>
</body>
</html>