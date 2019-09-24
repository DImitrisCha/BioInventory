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

<!-- Query the database -->

<?php
    $mysqli = mysqli_connect("localhost","root","Zaqw1234$#@!","BioInventory");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   
    $Barcode =$_GET["Barcode"];
    $Description =$_GET["Description"];
    $Building =$_GET["Building"];
    $Room =$_GET["Room"];
    $User =$_GET["User"];
    $Manufacturer =$_GET["Manufacturer"];
    $Model =$_GET["Model"];
    $Cost =$_GET["Cost"];
    $Year =$_GET["Year"];
    $ReplIn =$_GET["Replace"];
    $ReplCost =$_GET["Estimated_Repl_Cost"];
    $Number =$_GET["Serial_Number"];
    $Comments =$_GET["Comments"];
    
    
  
    
    //$sql = "UPDATE AllItems SET Comments = $Comments WHERE Barcode= $Barcode";
    
    
    
    $message = "The update was not successful, try again.";
    $message1 = "Your update has been recorded";
    
    
    
    if ($Comments !== null) {
        $mysqli->query("Update AllItems Set Comments = '$Comments', Description = '$Description', Building = '$Building', Room = '$Room' , user = '$User', Manufacturer = '$Manufacturer', Model = '$Model', Original_Cost = '$Cost' , Purchase_Year = '$Year', Replace_In = '$ReplIn', Estimated_Repl_Cost = '$ReplCost', Serial_Number = '$Number' Where Barcode = '$Barcode'");

        if(!$mysqli->commit()){
            #echo "<script type='text/javascript'>alert('$message');</script>";
            echo "The update was not successful, try again.";
        }
        else{
            $mysqli->commit();
            #echo "<script type='text/javascript'>alert('$message1');</script>";
            //echo "<h1 allign = 'center'> Your update has been recorded </h1>";
           
            
            echo '<center><h1>'.$message1.'</h1></center>';
            
           
        }
    }else{
        $mysqli->query("Update AllItems Set Comments = '-' Where Barcode = '$Barcode'");
    }
    ?>

<!-- Back to reort button, for friendly to user environment-->

<form action="Report.php" method="get">
<button id="sub" class= "button3 button">Back to Report</button>
</form>
</body>

</html>

