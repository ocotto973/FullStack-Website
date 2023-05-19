<?php
require_once('database.php');

$query = 'SELECT dessertCategoryName, dessertID,dessertCode,dessertName, description, price 
FROM dessertcategories INNER JOIN dessert
on dessertcategories.dessertCategoryID = dessert.dessertCategoryID';
$statement = $db->prepare($query);
$statement->execute();
$dessertcategories = $statement->fetchAll(); 
$statement->closeCursor();
// categoryName      code       name    description    price
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
        <li><a href="dessert_list.php"><button>Dessert</button></a></li>
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
    ?>
    <h3><?php echo "Welcome " . $_SESSION['fname'] . " ". $_SESSION['lname'] . " (". $_SESSION['email'] . ")"; } ?></h3>
      <section>
        <table>
          <tr>
            <th>Category</th>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
          </tr>
          <?php foreach($dessertcategories as $category) :?>  <!-----Gets $categories from line 9-->
            <tr>
              <td><?php echo $category['dessertCategoryName'];?></td>
              <td><a href="../unit11assignment/details.php?dessert_id=<?php echo $category['dessertID'];?>"><?php echo $category['dessertCode']; ?></a></td>
              <td><?php echo $category['dessertName'];?></td>
              <td><?php echo $category['description']; ?></td>
              <td><?php echo $category['price']; ?></td>
              <?php if(isset($_SESSION['is_valid_admin'])) { ?>
                
              <td>
                <form action="../unit9assignment/delete_product.php" method="post">
                  <input id="change" type="hidden" name="dessertCode" value="<?php echo $category['dessertCode']; ?>"/>
                  <input type="submit" value="Delete" onclick="verifyDelete(event)"/>
                </form>
              </td>
              <script>
                //Oscar Cotto 4-13-23 IT202-006 Unit 11 Assignment oc4@njit.edu
                //unit 11 assignment javascript 
                  function verifyDelete(evt){
                    const confirmDelete = confirm("Are you sure you want to delete this item?");
                    if (!confirmDelete) {                        
                        evt.preventDefault();
                    }
                  };
                </script>
              <?php }?>
            </tr>           
          <?php endforeach; ?>
        </table>
      </section>
    </main>
    <figure>
    <img id = "dessertPic" src = "../images/dessertPic.jpg">
    </figure>
    <footer>
        123-456-7890 | 249 Kearny Ave ,Kearny, NJ 07032 
      </footer>
    <footer>
        Oscar Cotto 3-1-23 IT202-006, unit 5 assignment, oc4@njit.edu
    </footer>
  </body>
</html>