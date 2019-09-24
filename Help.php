<!DOCTYPE html>


<html>
<head>
<!-- This page is based on bootstrap template-->

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}


@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
            *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            line-height: 1.5em
            }
            
            body{
            background: #D7423C;
            box-sizing: border-box;
            }
            section{
            padding: 10% 20%;
            }
            .animate{
            transition: all .3s;
            }
            
            input[name=question]{
            display: none;
            }
            input[name=question] + label{
            position: relative;
            display: block;
            padding: 20px 20px;
            font-size: 1.2em;
            cursor: pointer;
            background: rgba(246, 246, 246, 1);
            color: #5a9aa8;
            z-index: 2;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
            border-radius: 3px;
            }
            
            .response{
            position: relative;
            background: #7B2623;
            color: #7A2723;
            padding: 10px 20px;
            -webkit-transform: translate3d(0,-40px, 0) rotate(-.5deg);
            z-index: 1;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
            opacity: 0;
            border-radius: 3px;
            }
            
            input[name=question]:checked + label{
            background: #F6F6F6;
            color: #5a9aa8;
            }
            input[name=question]:checked + label + .response{
            opacity: 1;
            visibility: visible;
            padding: 10px 20px;
            -webkit-transform: translate3d(0, 0, 0) rotate(0deg);
            -webkit-filter: blur(0px);
            margin-bottom: 20px;
            color: white;
            }
            
            .fixed-height{
            height: 50px;
            overflow: hidden;
            opacity: 1 !important;
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
            }
            
            
            .button3 {width: 100%;}


</style>
</head>
<body>


<section>
<input class="animate" type="radio" name="question" id="q1"/>
<label class="animate" for="q1">Q: How do I change an item's attribute?</label>
<p class="response animate">A: To change and an item's attribute you need to click on the reports section and select the type of report you prefer. Then, find the item you want to update and click on any of the attribute (besides the barcode). Once your item's information are diplayed, click on the row and change the value on the corresponding text field.</p>

<input class="animate" type="radio" name="question" id="q2"/>
<label class="animate" for="q2">Q: How can I see the Found history of an item?</label>
<p class="response animate">A: You can find an item's history by clicking on the Barcode attribute/link of a table either on the reports section or on the missing items section.</p>

<input class="animate" type="radio" name="question" id="q3"/>
<label class="animate" for="q3">Q: How can I give access to another user? </label>
<p class="response animate">A: You can provide access to another user by filling out his/her email and password on the CSV file. The process of providing access might take some hours so please be patient. If the access is not given by 24 hours, please contact us.</p>

<input class="animate" type="radio" name="question" id="q4"/>
<label class="animate" for="q4">Q: How do I use the sortable functionality?</label>
<p class="response animate">A: The sortable functionality on the reports allows you to sort the table by any of its attributes. To do that, click on the column name of the attribute you want to sort by. One click is ascending order while the second is for descending.</p>

            <form action="LoginSuccess.php" method="get">
            <button id="sub" class= "button1 button">Back to Home page</button>
            </form>
            </body>
            </section>



            



<script>

$(function(){
              
function setHeight(){
    $(".response").each(function(index,element){
            var target = $(element);
            target.removeClass("fixed-height");
            var height = target.innerHeight();
            target.attr("data-height", height)
            .addClass("fixed-height");
            });
        };
              
    $("input[name=question]").on("change", function(){
    $("p.response").removeAttr("style");
                                           
        var target = $(this).next().next();
        target.height(target.attr("data-height"));
        })
              
    setHeight();
    });

</script>


</body>
</html>



