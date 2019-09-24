<!DOCTYPE html>




<html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylistic choices for the page, filters, table, buttons etc-->

<style>
* {
    box-sizing: border-box;
}



#myInputBarcode {
background-image: url('/css/searchicon.png');
background-position: 10px 10px;
background-repeat: no-repeat;
width: 100%;
font-size: 16px;
padding: 12px 20px 12px 40px;
border: 1px solid #ddd;
margin-bottom: 12px;
}
#myInputDescription {
background-image: url('/css/searchicon.png');
background-position: 10px 10px;
background-repeat: no-repeat;
width: 100%;
font-size: 16px;
padding: 12px 20px 12px 40px;
border: 1px solid #ddd;
margin-bottom: 12px;
}
#myInputSerialNumber {
background-image: url('/css/searchicon.png');
background-position: 10px 10px;
background-repeat: no-repeat;
width: 100%;
font-size: 16px;
padding: 12px 20px 12px 40px;
border: 1px solid #ddd;
margin-bottom: 12px;
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
width: 100%;
}


.button3 {width: 107%;}

</style>
</head>
<body>


<h2>BIOLOGY DEPARTMENT INVENTORY</h2>

<!-- Filters -->

<input type="text" id="myInputBarcode" onkeyup="myFunction()" placeholder="Search for barcode.." title="Type in a barcode">
<input type="text" id="myInputDescription" onkeyup="myFunction2()" placeholder="Filter by description.." title="Type description">
<input type="text" id="myInputSerialNumber" onkeyup="myFunction3()" placeholder="Filter by serial number.." title="Type serial number">


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

<!-- PHP code that accesses the information of the
database and puts it in the table-->

<?php
    $con = mysqli_connect("localhost","root","Zaqw1234$#@!","BioInventory");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    
    
    $cursor = mysqli_query($con,"SELECT * FROM AllItems");
    
    
    
    while($row = mysqli_fetch_array($cursor))
    {
        echo "<tr>";
        echo '<td> <a href="DeleteConfirm.php?Barcode=' . urlencode($row['Barcode']).
        '">' . $row['Barcode'] . '</a> </td>';
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
<form action="LoginSuccess.php" method="get">
<button id= "sub" class="button3 button">Back</button>

</form>


<!-- Script code for filter functionality -->

<script>
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInputBarcode");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function myFunction2() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInputDescription");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function myFunction3() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInputSerialNumber");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}


</script>


</body>
</html>


