<html>

  <head>
  <link type="image/icons8-shop-16.png" sizes="16x16" rel="icon" href="images/icons8-shop-16.png">
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&family=Zeyada&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&family=ZCOOL+XiaoWei&family=Zeyada&display=swap" rel="stylesheet">
    <title>Oscar's Dessert Shop</title>
  </head>

  <body>
    <header>
      <h1 id = "header1">Oscar's Dessert Shop</h1>
    </header>
    <div id = "navBar">
      <ul> 
        <li><a href="unit5assignment/dessert_list.php"><button>Dessert</button></a></li>
        <li><a href="home.php"><button>Home</button></a></li>
        <li><a href="shipping.php"><button <?php session_start(); if(!isset($_SESSION['is_valid_admin'])){ //if not set, hide it?> style="visibility:hidden;"<?php }?>>Shipping</button></a></li>
        <li><a href="unit7assignment/createPageForm.php"><button <?php if(!isset($_SESSION['is_valid_admin'])){ ?> style="visibility:hidden;"<?php }?>>Create</button></a></li>
        <?php
          //session_start();
          if(isset($_SESSION['is_valid_admin'])) {
        ?>
        <li><a href="unit9assignment/logout.php"><button>Logout</button></a></li>
        <?php } 
          else {?>
          
        <li><a href="unit9assignment/login.php"><button>Login</button></a></li>

        <?php } ?>
      </ul>
    </div>
    <?php
      if(isset($_SESSION['is_valid_admin'])) { 
    //welcome user with info from mysql table?>
    <h3><?php echo "Welcome " . $_SESSION['fname'] . " ". $_SESSION['lname'] . " (". $_SESSION['email'] . ")"; }?></h3>
                 
    <main>
      <div id = "description2">
          <h3>Recently founded in 2023, Oscar's Dessert Shop is ready to hit the streets of Kearny, NJ. Located on the main street,
            249 Kearny Ave. Here at Oscar's Dessert Shop we pride ourselves on making the best desserts for any occasions. 
            Birthdays? Check! Holidays? Check! A Random Wednesday? Check! We offer a vast array of desserts including cakes, pies, crepes, 
            ice cream, and more! Please look below for a glimpse at our tasty treats! For orders please head to our shipping section.
            For any questions please call us at 123-456-7890.</h3>
      </div>
    </main>
      <figure id = "picFigure">

        <img class = "pic"src = "images/pic1.jpg">
        <img class = "pic"src = "images/pic2.webp">
        <img class = "pic"src = "images/pic3.jpeg">
        <img class = "pic"src = "images/pic4.jpg">
        
      </figure>
      <footer>
        123-456-7890 | 249 Kearny Ave ,Kearny, NJ 07032
      </footer>
      <footer>
        Oscar Cotto 2-17-23 IT202-006, unit 3 assignment, oc4@njit.edu
      </footer>
    
      
  </body>
</html>