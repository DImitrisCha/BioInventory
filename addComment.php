<!DOCTYPE html>

<html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylistic choices for the page (inputs, table, buttons etc)-->
<style>
* {
    box-sizing: border-box;
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

#myTable {
border-collapse: collapse;
width: 100%;
border: 1px solid #ddd;
font-size: 18px;
}

#myTable th, #myTable td {
text-align: left;
padding: 12px;
}

#myTable tr {
border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
background-color: #f1f1f1;
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




<!-- Creating the table (widths, columns)-->


<table id="myTable" cellspacing="1">
<thead>
<tr class="header">
<th style="width:60%;">Barcode</th>
<th style="width:40%;">Description</th>
<th style="width:60%;">Building</th>
<th style="width:60%;">Room</th>
<th style="width:40%;">User</th>
<th style="width:60%;">Manufacturer</th>
<th style="width:60%;">Model</th>
<th style="width:40%;">Original_Cost</th>
<th style="width:60%;">Purchase_Year</th>
<th style="width:60%;">Replace_In</th>
<th style="width:40%;">Estimated Replace Cost</th>
<th style="width:60%;">Serial Number</th>
<th style="width:60%;">Comments</th>
</thead>
</tr>
<tr>

<!-- PHP code that access the information and puts it in our table-->

<?php
    error_reporting(E_ERROR | E_PARSE);
    
     $Barcode =$_GET["Barcode"];
    
    
    $con = mysqli_connect("localhost","root","Zaqw1234$#@!","BioInventory");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    
   
    
    $cursor = mysqli_query($con,"SELECT * FROM AllItems WHERE Barcode = $Barcode");
    

    
    while($row = mysqli_fetch_array($cursor))
    {
        echo "<tr>";
        echo "<td>" . $row['Barcode'] . "</td>";
        echo "<td>" . $row['Description'] . "</td>";
        echo "<td>" . $row['Building'] . "</td>";
        echo "<td>" . $row['Room'] . "</td>";
        echo "<td>" . $row['user'] . "</td>";
        echo "<td>" . $row['Manufacturer'] . "</td>";
        echo "<td>" . $row['Model'] . "</td>";
        echo "<td>" . $row['Original_Cost'] . "</td>";
        echo "<td>" . $row['Purchase_Year'] . "</td>";
        echo "<td>" . $row['Replace_In'] . "</td>";
        echo "<td>" . $row['Estimated_Repl_Cost'] . "</td>";
        echo "<td>" . $row['Serial_Number'] . "</td>";
        echo "<td>" . $row['Comments'] . "</td>";
    }
    echo "</table>";
   
    mysqli_close($con);
?>
</table>
<section id="mid_section">
<div id="boxes">


<!-- Forms for user to complete in order to create the query-->

<form action="added.php" method="get">
Barcode:<input id="Barcode" type= "text" value= "" name="Barcode">
Description:<input id="Description" type= "text" value= "" name="Description">
Building:<input id="Building" type= "text" value= "" name="Building">
Room:<input id="Room" type= "text" value= "" name="Room">
User:<input id="User" type= "text" value= "" name="User">
Manufacturer:<input id="Manufacturer" type= "text" value= "" name="Manufacturer">
Model:<input id="Model" type= "text" value= "" name="Model">
Original Cost:<input id="Cost" type= "text" value= "" name="Cost">
Purchase Year:<input id="Year" type= "text" value= "" name="Year">
Replace In:<input id="Replace" type= "text" value= "" name="Replace">
Estimated_Repl_Cost:<input id="Estimated_Repl_Cost" type= "text" value= "" name="Estimated_Repl_Cost">
Serial Number:<input id="Serial_Number" type= "text" value= "" name="Serial_Number">
Enter Comment:<input id="Comments" type= "text" value= "" name="Comments">
<button id="sub" class= "button3 button">Submit</button>
</form>
</div>







<!-- Javascript code for clickable table and onSubmit sending values-->
<script>

(function () {
 if (window.addEventListener) {
 window.addEventListener('load', run, false);
 } else if (window.attachEvent) {
 window.attachEvent('onload', run);
 }
 
 function run() {
 var t = document.getElementById('myTable');
 var rows = t.rows; //rows collection - https://developer.mozilla.org/en-US/docs/Web/API/HTMLTableElement
 for (var i=0; i<rows.length; i++) {
 rows[i].onclick = function (event) {
 //event = event || window.event; // for IE8 backward compatibility
 //console.log(event, this, this.outerHTML);
 if (this.parentNode.nodeName == 'THEAD') {
 return;
 }
 var cells = this.cells; //cells collection
 var f1 = document.getElementById('Barcode');
 var f2 = document.getElementById('Description');
 var f3 = document.getElementById('Building');
 var f4 = document.getElementById('Room');
 var f5 = document.getElementById('User');
 var f6 = document.getElementById('Manufacturer');
 var f7 = document.getElementById('Model');
 var f8 = document.getElementById('Cost');
 var f9 = document.getElementById('Year');
 var f10 = document.getElementById('Replace');
 var f11 = document.getElementById('Estimated_Repl_Cost');
  var f12 = document.getElementById('Serial_Number');
 var f13 = document.getElementById('Comments');
 
 f1.value = cells[0].innerHTML;
 f2.value = cells[1].innerHTML;
 f3.value = cells[2].innerHTML;
 f4.value = cells[3].innerHTML;
 f5.value = cells[4].innerHTML;
 f6.value = cells[5].innerHTML;
 f7.value = cells[6].innerHTML;
 f8.value = cells[7].innerHTML;
 f9.value = cells[8].innerHTML;
 f10.value = cells[9].innerHTML;
 f11.value = cells[10].innerHTML;
 f12.value = cells[11].innerHTML;
 f13.value = cells[12].innerHTML;
 };
 }
 }
 })();



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


