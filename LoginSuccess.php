<!DOCTYPE html>
<html>
<head>

<!-- Stylistic choices for the main page (dropdown buttons, menu, image etc)-->
<style>



ul {
    list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
display: inline-block;
color: white;
    text-align: center;
padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
display: inline-block;
}

.dropdown-content {
display: none;
position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
    text-decoration: none;
display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
    
.dropdown:hover .dropdown-content {
display: block;
}

li {
    float: left;
}

li a {
display: block;
color: white;
    text-align: center;
padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

img {
position: absolute;
top: 50%;
left: 50%;
transform: translateX(-50%) translateY(-50%);
    max-width: 100%;
    max-height: 100%;
}

</style>
</head>
    
<body>
    
<!-- Script for getting current year-->
    
<script>
    function dateFunction(){
        n =  new Date();
        y = n.getFullYear();
        //document.getElementById("date").innerHTML = y;
        document.getElementById("dateLink").href= 'Update.php?room=0&year=' + y;
    }
    function dateFunction1(){
        n =  new Date();
        y = n.getFullYear();
        //document.getElementById("date").innerHTML = y;
        document.getElementById("dateLink1").href= 'missingNow.php?year=' + y;
    }
</script>

    <ul>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Reports</a>
    <div class="dropdown-content">
    <a href="report.php">Sortable Report</a>
    <a href="reportFilter.php">Report with filters</a>
    </div>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
    <a href="Insert.php">Insert Item</a>
    <a href="Update.php" id='dateLink'>Update Item</a>
    <script>
        dateFunction();
    </script>
    <a href="UploadPic.php">Upload Picture</a>
    <a href="Delete.php">Delete Item</a>
    </div>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Missing Items</a>
    <div class="dropdown-content">
    <a href="missing.php">Missing Items</a>
    <a href="missingNow.php" id='dateLink1' >Currently Missing Items</a>
    <script>
        dateFunction1();
    </script>
    </div>
    </li>
    
    <li style="float:right"><a class="active" href="Main.php">Exit</a>
    <li style="float:right"><a class="active" href="AboutUs.php">AboutUs</a>
    <li style="float:right"><a class="active" href="Help.php">Help</a>
    <li style="float:right"><a class="active" href="addUser.php">Add User</a>
    </ul>

<div>
<img src="wildcat.jpg">
</div>

  
    <!-- Script for the dropdown buttons-->
    <script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    
    function myFunction1() {
        document.getElementById("myDropdown1").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
   
    
    function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    </script>
    
    
</body>
</html>
