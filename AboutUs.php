<!DOCTYPE html>
<html>
<head>
<!-- Stylistic choices for the page, filters, table, buttons etc-->
<style>
{
background:#00bcd4;
}
html {
    scroll-behavior: smooth;
}
h1
{
color:#fff;
margin:40px 0 60px 0;
    font-weight:300;
}

.our-team-main
{
width:100%;
height:auto;
    border-bottom:5px #323233 solid;
background:#fff;
    text-align:center;
    border-radius:10px;
overflow:hidden;
position:relative;
transition:0.5s;
    margin-bottom:28px;
}


.our-team-main img
{
    border-radius:50%;
    margin-bottom:20px;
width: 90px;
}

.our-team-main h3
{
    font-size:20px;
    font-weight:700;
}

.our-team-main p
{
    margin-bottom:0;
}

.team-back
{
width:100%;
height:auto;
position:absolute;
top:0;
left:0;
padding:5px 15px 0 15px;
    text-align:left;
background:#fff;
    
}

.team-front
{
width:100%;
height:auto;
position:relative;
    z-index:10;
background:#fff;
padding:15px;
bottom:0px;
transition: all 0.5s ease;
}

.our-team-main:hover .team-front
{
bottom:-200px;
transition: all 0.5s ease;
}

.our-team-main:hover
{
    border-color:#777;
transition:0.5s;
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
position: absolute;
bottom: 0%;
}


.button3 {width: 100%;}

</style>

</head>

<!-- Using bootstrap template, information about us and our project-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<h1 class="text-center">Biology Department Inventory Designers</h1>


<div class="container">
<div class="row">



<!--team-4-->
<div class="col-lg-4">
<div class="our-team-main">

<div class="team-front">
<img src="http://placehold.it/110x110/4caf50/fff?text=Dilip" class="img-fluid" />
<h3>Andriy Molchanov</h3>
<p>Web Designer</p>
</div>

<div class="team-back">
<span>
<h6>Andriy is a Davidson College student majoring in Computer Science and Economics. He is a people connector who seeks to leverage his experiences and expertise to bridge technical experts with business executives.<h6>
</span>
</div>

</div>
</div>
<!--team-4-->

<!--team-5-->
<div class="col-lg-4">
<div class="our-team-main">

<div class="team-front">
<img src="http://placehold.it/110x110/e91e63/fff?text=Dilip" class="img-fluid" />
<h3>Andrea Garcia</h3>
<p>Web Designer</p>
</div>

<div class="team-back">
<span>
<h6> Andrea is a student in Davidson College majoring in Economics and minoring in Computer Science. She is interested in the interaction between Economics and Computer Science and she wants to apply her technical knowledge and her problem solving skills into the Business world.
</span>
</div>

</div>
</div>
<!--team-5-->

<!--team-6-->
<div class="col-lg-4">
<div class="our-team-main">

<div class="team-front">
<img src="http://placehold.it/110x110/2196f3/fff?text=Dilip" class="img-fluid" />
<h3>Dimitrios Chavouzis</h3>
<p>Web Designer</p>
</div>

<div class="team-back">
<span>
<h6>Dimitrios Chavouzis is a student at Davidson College where he studies Computer Science. Dimitrios is interested in Web Design, Software Design and App Development. His projects include a Bot development and a machine learning project for MSensis (a Greek company) as well as a Space Reservation System for Davidson College. <h6>
</span>
</div>

</div>
</div>
<!--team-6-->



</div>
</div>

</section>

<body>
<div style="position: relative">
<p style="position: fixed; bottom: 60%; width:100%; text-align: center">
<b>Background</b></p>
<p style="position: fixed; bottom: 37%; width:100%; text-align: center">
This project works with the Biology department at Davidson College <br> and their inventory of laboratory supplies. The project <br> implements a database containing the existing inventory and <br>allows for access to this database through a website.<br> The website displays a report of the inventory that can be sorted <br> by different attributes of an item and allows for updates <br> on the database, including deletion and addition of items <br> as well as updates on whether an item is found or lost a particular year.<br>
    </p>
<p style="position: fixed; bottom: 30%; width:100%; text-align: center">
<b>Functionalities</b></p>
<p style="position: fixed; bottom: 7%; width:100%; text-align: center">
 Insert items in the inventory <br>
 Delete items from the inventory <br>
 Update existing information <br>
 Display reports of existing items <br>
 Sortable and filtered reports <br>
 Reports missing items <br>
 Ability to see the found-history of an item <br>
 Secure login
</p>
</div>
<form action="LoginSuccess.php" method="get">
<button id="sub" class= "button1 button">Back to Home page</button>
</form>
</body>
</html>
