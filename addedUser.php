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
}


.button3 {width: 100%;}
</style>

<!-- PHP code that connects to the database and inserts the
appropriate data-->

<?php
    $con = mysqli_connect("localhost","root","Zaqw1234$#@!","BioInventory");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
   
    $email =$_GET["email"];
    $pwd =$_GET["psw"];
   

    $message1 = "Your update has been recorded";
    
    
    
    if ($email !== null) {
        $sql = sprintf("INSERT INTO Logins (`email`, `password`) VALUES ('$email', '$pwd')");

        if(!mysqli_query($con, $sql)){
            echo "The update was not successful, try again.";
        }
        else{
            mysqli_query($con, $sql);
            
            echo '<center><h1>'.$message1.'</h1></center>';
            
           
        }
    }
    ?>

<!-- Back to addUser button, for user-friendly environment-->
<form action="addUser.php" method="get">
<button id="sub" class= "button3 button">Back to Add User</button>
</form>
</body>

</html>

