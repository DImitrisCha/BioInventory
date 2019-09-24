<!DOCTYPE html>
<html>
<head>


<!-- Stylistic choices for the page (buttons, inputs) etc-->
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
<!-- Form for user to input data-->

<section id="mid_section">

<div id="boxes">

<form action="Insert.php?hello=true" method="get">

<label for="Barcode1">Barcode</label>
<input type="text" id="Barcode1" name="Barcode1" placeholder="Barcode..">

<label for="Description">Description</label>
<input type="text" id="Description" name="Description" placeholder="Describe the object..">

<label for="Building">Building</label>
<input type="text" id="Building" name="Building" placeholder="Building..">

<label for="Room">Room</label>
<input type="text" id="Room" name="Room" placeholder="Room..">

<label for="User">Primary User</label>
<input type="text" id="User" name="User" placeholder="Primary User..">

<label for="Manufacturer">Manufacturer</label>
<input type="text" id="Manufacturer" name="Manufacturer" placeholder="Manufacturer name..">

<label for="Model">Model</label>
<input type="text" id="Model" name="Model" placeholder="Enter Model..">

<label for="Cost">Original Cost</label>
<input type="text" id="Cost" name="Cost" placeholder="Original Cost..">

<label for="Year">Purchase Year</label>
<input type="text" id="Year" name="Year" placeholder="Estimated Replacement Year..">

<label for="ReplYear">Replacement Year</label>
<input type="text" id="ReplYear" name="ReplYear" placeholder="Estimated Replacement Year..">

<label for="ReplCost">Replacement Cost</label>
<input type="text" id="ReplCost" name="ReplCost" placeholder="Estimared Replacement Cost..">

<label for="Number">Serial Number</label>
<input type="text" id="Number" name="Number" placeholder="Enter Serial Number..">

<label for="Comments">Comments</label>
<input type="text" id="Comments" name="Comments" placeholder="Enter comments..">

<button id="sub" class= "button3 button">Submit</button>
</form>
</div>

<!-- PHP code that receives data and queries (insert) in the database. Notice Barcode is
perpusfully left without dash if empty, that way the user gets an error message-->

<?php
  
    
    error_reporting(E_ERROR | E_PARSE);
    
 
    
    
    $Barcode =$_GET["Barcode1"];
    $Description =$_GET["Description"];
    $Building =$_GET["Building"];
    $Room =$_GET["Room"];
    $User =$_GET["User"];
    $Manufacturer =$_GET["Manufacturer"];
    $Model =$_GET["Model"];
    $Cost =$_GET["Cost"];
    $Year =$_GET["Year"];
    $ReplYear =$_GET["ReplYear"];
    $ReplCost =$_GET["ReplCost"];
    $Number =$_GET["Number"];
    $Comments =$_GET["Comments"];
    
    

    if(empty($Description)){
        $Description = "-";
    }
    if(empty($Building)){
        $Building = "-";
    }
    if(empty($Room)){
        $Room = "-";
    }
    if(empty($User)){
        $User = "-";
    }
    if(empty($Manufacturer)){
        $Manufacturer = "-";
    }
    if(empty($Model)){
        $Model = "-";
    }
    if(empty($Cost)){
        $Cost = "-";
    }
    if(empty($Year)){
        $Year = "-";
    }
    if(empty($ReplYear)){
        $ReplYear = "-";
    }
    if(empty($ReplCost)){
        $ReplCost = "-";
    }
    if(empty($Number)){
        $Number = "-";
    }
    if(empty($Comments)){
        $Comments = "-";
    }
    
    
    $con = mysqli_connect("localhost","root","Zaqw1234$#@!","BioInventory");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    
    
    $sql = sprintf("INSERT INTO `AllItems` (`Barcode`, `Description`, `Building`, `Room`, `user`,`Manufacturer`, `Model`, `Original_Cost`, `Purchase_Year`, `Replace_In`,`Estimated_Repl_Cost`, `Serial_Number`, `Comments`) VALUES ('%s', '%s', '%s', '%s', '%s','%s', '%s', '%s', '%s', '%s','%s', '%s', '%s')"
                   , mysqli_real_escape_string( $con, $Barcode )
                   , mysqli_real_escape_string( $con, $Description )
                   , mysqli_real_escape_string( $con, $Building )
                   , mysqli_real_escape_string( $con, $Room )
                   , mysqli_real_escape_string( $con, $User )
                   , mysqli_real_escape_string( $con, $Manufacturer )
                   , mysqli_real_escape_string( $con, $Model )
                   , mysqli_real_escape_string( $con, $Cost )
                   , mysqli_real_escape_string( $con, $Year )
                   , mysqli_real_escape_string( $con, $ReplYear )
                   , mysqli_real_escape_string( $con, $ReplCost )
                   , mysqli_real_escape_string( $con, $Number )
                   , mysqli_real_escape_string( $con, $Comments ));
    
    $message = "Double insertion, try again";
    $message1 = "Your insertion succeeded";
 
    //echo "<h2>" . $Barcode . "</h2>";
    
    
    if ($Barcode !== null) {
        if(!mysqli_query( $con, $sql)){
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else{
            mysqli_query( $con, $sql);
            echo "<script type='text/javascript'>alert('$message1');</script>";
        }
    }
    
    
    
    ?>

<form action="LoginSuccess.php" method="get">
<button id="sub" class= "button1 button3">Back to Home page</button>
</form>

<!-- Script for executing when form is clicked-->

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
