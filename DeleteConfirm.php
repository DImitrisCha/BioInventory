<!DOCTYPE html>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylistic choices for the page, filters, table, buttons etc-->

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


<h2>BIOLOGY DEPARTMENT INVENTORY</h2>

<!-- Creating the table-->

<table id="myTable">

<tr ="header">
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


</tr>
<tr>



<?php
    $con = mysqli_connect("localhost","root","Zaqw1234$#@!","BioInventory");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $Barcode = $_GET["Barcode"];
    $Barcode = (string)$Barcode;
    
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
        echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close($con);
    ?>


</table>

<section id="mid_section">
<div id="boxes">


<form action="DeleteFinal.php" method="get">
Barcode:<input id="Barcode" type= "text" value= "" name="Barcode">
<button id="sub" class= "button3 button">Submit</button>
</form>
</div>



<!-- Script code for clickable table and onclick send information-->
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
 var f2 = document.getElementById('Comments');
 
 f1.value = cells[0].innerHTML;
 f2.value = cells[12].innerHTML;
 
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


