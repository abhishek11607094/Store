<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Store.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
		<style>
		.bannerImage{
    padding-top:75px;
    padding-bottom:50px;
    margin-bottom: 20px;
    text-align:center;
    color:#f8f8f8;
    background-image:url("intro.jpg");
    background-size:cover;
}
</style>

    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div class="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>  We sell .</h1>
                       <p>Flat 40% OFF on all the items.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/aaa.jpg" alt="Fruits" width="275" height="200">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Fruits</p>
                                        <p>Choose your favourite fruit.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/food.jpg" alt="Food" width="300" height="200">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Meal</p>
                                    <p>Choose your favourite meal.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/sweet.jpg" alt="Sweet" width="200" height="150">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Sweet</p>
                                   <p>Choose your favourite sweet.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="https://Store.com">Store.com</a> All Rights Reserved.</p>
                   <p>This website is developed by Abhishek Singh</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>