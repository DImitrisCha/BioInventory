<!DOCTYPE html>


<html>
<head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylistic choices for the page (buttons) etc-->
<style>
* {
    box-sizing: border-box;
}
.button {
    background-color: #A80000;
border: none;
color: white;
padding: 15px 32px;
    text-align: center;
    text-decoration: none;
display: inline-block;
    font-size: 16px;
margin: 4px 2px;
cursor: pointer;
width: 100%;
}

.button1 {
    background-color: #000000;
border: none;
color: white;
padding: 15px 32px;
    text-align: center;
    text-decoration: none;
display: inline-block;
    font-size: 16px;
margin: 4px 2px;
cursor: pointer;
width: 100%;
}


.button3 {width: 100%;}


</style>
<?php
    $mysqli = mysqli_connect("localhost","root","Zaqw1234$#@!","BioInventory");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    
    $Barcode = $_GET["Barcode"];
    $Barcode = (string)$Barcode;
    
    $message1 = "Your update has been recorded";
    $message = "The deletion was not successful, try again.";
    
    if ($Barcode !== null) {
        $mysqli->query("DELETE FROM AllItems Where Barcode = '$Barcode'");
        
        if(!$mysqli->commit()){
            echo "<script type='text/javascript'>alert('$message');</script>";
            #echo "The deletion was not successful, try again.";
        }
        else{
            $mysqli->commit();
            echo "<script type='text/javascript'>alert('$message1');</script>";
            #echo '<center><h1>'.$message1.'</h1></center>';
            
            
        }
    }
    ?>
<!-- Forms for navigation through the site and user friendly environment-->

<form action="LoginSuccess.php" method="get">
<button id="sub" class= "button3 button">Back to home page</button>
</form>
<form action="Delete.php" method="get">
<button id="sub" class= "button1 button">Delete more Items</button>
</form>
</body>

</html>


