<?php
//Slide 38
require_once('database.php');
$query = 'SELECT * FROM dessertcategories ORDER BY dessertCategoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll(); 
$statement->closeCursor();
?>
<html>
  <head>
    <title>Oscar's Dessert Shop</title>
    <link type="image/icons8-shop-16.png" sizes="16x16" rel="icon" href="../images/icons8-shop-16.png">
    <link rel="stylesheet" href = "../styles.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&family=Zeyada&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&family=ZCOOL+XiaoWei&family=Zeyada&display=swap" rel="stylesheet"><link rel="stylesheet" href = "product_list.css"/>
  </head>
<!-----Slide 39 ---->
  <body>
  <header>
      <h1 id = "header1">Oscar's Dessert Shop</h1>
    </header>
  <div id = "navBar">
      <ul> 
        <li><a href="../unit5assignment/dessert_list.php"><button>Dessert</button></a></li>
        <li><a href="../home.php"><button>Home</button></a></li>
        <li><a href="../shipping.php"><button <?php session_start(); if(!isset($_SESSION['is_valid_admin'])){ ?> style="visibility:hidden;"<?php }//hides button?>>Shipping</button></a></li>
        <li><a href="createPageForm.php"><button <?php if(!isset($_SESSION['is_valid_admin'])){ ?> style="visibility:hidden;"<?php }//hides button?>>Create</button></a></li>
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
    ?>
    <h3><?php echo "Welcome " . $_SESSION['fname'] . " ". $_SESSION['lname'] . " (". $_SESSION['email'] . ")"; }else{
      echo "Please log in to use this page!"; exit();}?></h3>
    <main>
    <?php if(!empty($error)) {?>
      <p> <?php echo htmlspecialchars($error); ?> </p>
      <?php } ?>
      <!-----Form--->
      <form id = "form" action = "add_dessert.php" method = "post">
        <label>Dessert Category:</label>
        <select name = "dessertCategoryID">
          <?php foreach ($categories as $category): ?>
            <option value = "<?php echo $category['dessertCategoryID'];?>">
              <?php echo $category['dessertCategoryName']?>
            </option>
          <?php endforeach; ?>
        </select><br>
        <!---Slide 40--->
        <label>Dessert Code:</label>
        <input type = "text" name = "code" id="code"><span>*</span><br>
        <label>Dessert Name:</label>
        <input type = "text" name = "name" id="name"><span>*</span><br>
        <label>Description:</label><br>
        <textarea name = "description" id="description"></textarea><span>*</span><br>
        <label>Price:</label>
        <input type = "text" name = "price" id="price"><span>*</span><br>
        <input type = "submit" value="Submit">
        <input type = "reset" id="reset" name="reset"value="Reset"><br>
      </form>
      <!--Form Ends--->
      <script
        src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw="
        crossorigin="anonymous">
      </script>
      <script src="../unit11assignment/validation.js"></script>

    </main>
    <figure>
    <img id = "dessertPic2" src = "../images/dessertPic2.webp">
    </figure>

    <footer>
        123-456-7890 | 249 Kearny Ave ,Kearny, NJ 07032
      </footer>
      <footer>
        Oscar Cotto 3-24-23 IT202-006, unit 7 assignment, oc4@njit.edu
      </footer>
  </body>

</html>