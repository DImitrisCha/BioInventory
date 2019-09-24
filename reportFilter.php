<!DOCTYPE html>




<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

#myTable {
    border-collapse: collapse;
width: 100%;
}

th, td {
    text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
    
    th {
        background-color: #A80000 ;
    color: white;
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
    
    
    .button3 {width: 100%;}


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




    
    </style>
    </head>
    <body>
    </style>
    </head>
    <body>







<input type="text" id="myInputBarcode" onkeyup="myFunction()" placeholder="Search for barcode.." title="Type in a barcode">
<input type="text" id="myInputDescription" onkeyup="myFunction2()" placeholder="Search for description.." title="Search for description">


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
    
    
    
    $cursor = mysqli_query($con,"SELECT * FROM AllItems");
    
   
    
    while($row = mysqli_fetch_array($cursor))
    {
        echo "<tr>";
        echo '<td> <a href="itemHistory.php?Barcode=' . urlencode($row['Barcode']).
        '">' . $row['Barcode'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Description'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Building'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Room'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['user'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Manufacturer'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Model'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Original_Cost'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Purchase_Year'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Replace_In'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Estimated_Repl_Cost'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Serial_Number'] . '</a> </td>';
        echo '<td> <a href="addComment.php?Barcode='. urlencode($row['Barcode']).
        '">' . $row['Comments'] . '</a> </td>';
        echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close($con);
    ?>


</table>


    <form action="LoginSuccess.php" method="get">
    <button id="sub" class= "button3 button">Back to home page</button>
    </form>

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
    
</script>


</body>
</html>





