<?php
  //Oscar Cotto 4-16-2023 IT202-006 Unit 11 Assignment oc4@njit.edu
  require_once('database.php');
$dessertID = $_GET['dessert_id'];
$queryProducts = 'SELECT * FROM dessert WHERE dessertID = :dessertID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':dessertID', $dessertID);
$statement3->execute();
$items = $statement3->fetchAll();
$statement3->closeCursor();
?>
<html>
  <head>
  <link rel="stylesheet" href = "dessert_list.css"/>
    <link type="image/icons8-shop-16.png" sizes="16x16" rel="icon" href="../images/icons8-shop-16.png">
    <link rel="stylesheet" href = "../styles.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&family=Zeyada&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&family=ZCOOL+XiaoWei&family=Zeyada&display=swap" rel="stylesheet">
    <title>Dessert</title>
  </head>
  <body>
    <main>
      <header>
        <h1 id = "header1">Oscar's Dessert Shop</h1>
      </header>

      <div id = "navBar">
        <ul> 
          <li><a href="../unit5assignment/dessert_list.php"><button>Dessert</button></a></li>
          <li><a href="../home.php"><button>Home</button></a></li>
          <li><a href="../shipping.php"><button <?php session_start(); if(!isset($_SESSION['is_valid_admin'])){ ?> style="visibility:hidden;"<?php }?>>Shipping</button></a></li>
          <li><a href="../unit7assignment/createPageForm.php"><button <?php if(!isset($_SESSION['is_valid_admin'])){ ?> style="visibility:hidden;"<?php }?>>Create</button></a></li>
          <?php
            //session_start();
            if(isset($_SESSION['is_valid_admin'])) {
          ?>
            <li><a href="../unit9assignment/logout.php"><button>Logout</button></a></li>
          <?php } else {?>
            
            <li><a href="../unit9assignment/login.php"><button>Login</button></a></li>

          <?php } ?>
        </ul>
      </div>
    <?php
      if(isset($_SESSION['is_valid_admin'])) { 
        echo "<h3>"."Welcome " . $_SESSION['fname'] . " ". $_SESSION['lname'] . " (". $_SESSION['email'] . ")" . "</h3>";
      }
      echo "<h1 style='text-align: center;'>Details</h1>";
      if(isset($_GET['dessert_id'])){
        foreach($items as $item){
          echo "<div style = 'text-align:center;''>";
          echo "<h4>"."Dessert ID: ".$item['dessertID']."</h4>";//prints id
          echo "<h4>"."Dessert Category ID: ".$item['dessertCategoryID']."</h4>"; //prints category id
          echo "<h4>"."Dessert Code: ".$item['dessertCode']."</h4>"; //prints dessert code
          echo "<h4>"."Dessert Name: ".$item['dessertName']."</h4>"; //prints dessert name
          echo "<h4>"."Dessert Description: ".$item['description']."</h4>"; //prints dessert description
          echo "<h4>"."Dessert Price: ".$item['price']."</h4>"; //prints dessert code
          echo "<h4>"."Date Added: ".$item['dateAdded']."</h4>";
          echo "</div>";
        }
        echo "<ul id='dessertPic2'>";
        switch($dessertID){
          case 1:
            echo "<img src='../images/1-modified.jpg' style='height:350px; width:500px;'";
          case 2:
            echo "<img src='../images/2-modified.jpg' style='height:350px; width:500px;'";
          case 3:
            echo "<img src='../images/3-modified.jpg' style='height:350px; width:500px;'";
          case 7:
            echo "<img src='../images/7-modified.jpg' style='height:350px; width:500px;'";
          case 9:
            echo "<img src='../images/9-modified.jpg' style='height:350px; width:500px;'";
          case 11:
            echo "<img src='../images/11-modified.jpg' style='height:350px; width:500px;'";
          default:
            echo "<img src='../images/noAvailable-modified.png' style='height:350px; width:500px;'";
        }
        echo "</ul>";
        echo '<script
        src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw="
        crossorigin="anonymous"></script>';
        echo '<script src="hover.js"></script>';
      }
      echo '<footer>
              123-456-7890 | 249 Kearny Ave ,Kearny, NJ 07032
              </footer>
              <footer>
              Oscar Cotto 4-16-23 IT202-006, unit 11 assignment, oc4@njit.edu
            </footer>'
    ?>
  </body>
</html>
