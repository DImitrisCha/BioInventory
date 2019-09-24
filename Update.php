<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylistic choices for the page (buttons, inputs ) etc-->

<style>
html {
    scroll-behavior: smooth;
}
input[type=text], select {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
width: 100%;
    background-color: #C80000;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
    border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
padding: 20px;
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
</head>

<body>

<!-- HTML forms for user to input info-->

<section id="mid_section">
<div id="boxes">

<form action="Update.php?" id="dateLink" method="get">


<label for="Barcode">Barcode</label>
<input type="text" id="Barcode" name="Barcode" placeholder="" autofocus="autofocus">
<label for="Room">Room</label>
<input type="text" id="room" name="room" value= "<?php echo $_GET['room'] ?>"
<label for="year">Date</label>
<input type="text" id="year" name="year" value= "<?php echo $_GET['year'] ?>" >

<button id="sub" class= "button3 button">Submit</button>
</form>
</div>

<form action="LoginSuccess.php" method="get">
<button id="sub" class= "button3 button1">BACK</button>
</form>


<!-- PHP code to update the database -->
<?php
    
    
    error_reporting(E_ERROR | E_PARSE);
    
    
    
    $Barcode =$_GET["Barcode"];
    $Year =$_GET["year"];
    $room = $_GET["room"];
    
    $con = mysqli_connect("localhost","root","Zaqw1234$#@!","BioInventory");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    
    
    $sql = sprintf("INSERT INTO `Found` (`Barcode`, `Found`, `Room`,`Year`) VALUES ('%s', '%s', '%s','%s')"
                   , mysqli_real_escape_string( $con, $Barcode )
                   , mysqli_real_escape_string( $con, "Yes" )
                   , mysqli_real_escape_string( $con, $room )
                   , mysqli_real_escape_string( $con, $Year ));
    
   
    
    $message = "Your update was not complete";
    $message1 = "Your update was complete";
    
    
    if ($Barcode !== null) {
        if(!mysqli_query( $con, $sql)){
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else{
            mysqli_query( $con, $sql);
            $sql = "Update AllItems Set Room = '$room' WHERE Barcode = '$Barcode'";
            
            if ($con->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
            echo "<script type='text/javascript'>alert('$message1');</script>";
        }
    }
    
    
    
    
    
    
    ?>
<!-- Javascript to allow onclick data to transfer and events -->
<script>

(function () {
 if (window.addEventListener) {
 window.addEventListener('load', run, false);
 } else if (window.attachEvent) {
 window.attachEvent('onload', run);
 }
 
 



function myFunction() {
    $("#sub").click(function(){
                    
                    $.post($("#myform").attr("action"), $("#myform:input").serializeArray(), function(info){$("#result").html(info);});
                    });
    
    $("#myform").submit(function(){
                        return false;
                        });
}
</script>

</body>
</html>
