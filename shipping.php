<?php
if (!isset($fullName)) {
  $fullName = "";}
if (!isset($address)) {
  $address = "";}
if (!isset($city)) {
  $city = "";}
if (!isset($state)) {
  $state = "";}
if (!isset($zipCode)) {
  $zipCode = "";}
?>


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
    <title>Shipping</title>
  </head>

  <body>
    <header>
      <h1 id = "header1">Oscar's Dessert Shop</h1>
    </header>
    <div id = "navBar">
      <ul> 
        <li><a href="unit5assignment/dessert_list.php"><button>Dessert</button></a></li>
        <li><a href="home.php"><button>Home</button></a></li>
        <li><a href="shipping.php"><button <?php session_start(); if(!isset($_SESSION['is_valid_admin'])){ ?> style="visibility:hidden;"<?php }?>>Shipping</button></a></li>
        <li><a href="unit7assignment/createPageForm.php"><button <?php if(!isset($_SESSION['is_valid_admin'])){ ?> style="visibility:hidden;"<?php }?>>Create</button></a></li>
        <?php
          //session_start();
          if(isset($_SESSION['is_valid_admin'])) {
        ?>
          <li><a href="unit9assignment/logout.php"><button>Logout</button></a></li>

        <?php } else {?>

          
          <li><a href="unit9assignment/login.php"><button>Login</button></a></li>


        <?php } ?>
      </ul>
    </div>
    <?php
      if(isset($_SESSION['is_valid_admin'])) { 
    ?>
    <h3><?php echo "Welcome " . $_SESSION['fname'] . " ". $_SESSION['lname'] . " (". $_SESSION['email'] . ")"; } else{
      echo "Please log in to use this page!"; exit();}?></h3>
    <main>
      <?php if(!empty($error_message)) {?>
      <p> <?php echo htmlspecialchars($error_message); ?> </p>
      <?php } ?>
      <form  id = "form" action = "shipping_results.php" method = "post">
        <label>First Name and Last Name:</label>
        <input type = "text" name = "fullName" value= "<?php echo htmlspecialchars($fullName);?>" />
        <br>
        <label>Street Address:</label>
        <input type = "text" name = "address" value= "<?php echo htmlspecialchars($address);?>" />
        <br>
        <label>City:</label>
        <input type = "text" name = "city" value= "<?php echo htmlspecialchars($city);?>" />
        <br>
        <label>State:</label>
        <select name = "state">
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District Of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select>
        <br>
        <label>Zip Code: </label>
        <input type = "text" name = "zipCode" value= "<?php echo htmlspecialchars($zipCode);?>" />
        <br>
        <label>Select your dessert:</label>
        <select name = "dessert">
          <option value = "Cake">Cake</option>
          <option value = "Ice cream">Ice Cream</option>
          <option value = "Pie">Pie</option>
          <option value = "Crepe">Crepe</option>
          <option value = "Cookies">Cookies</option>
        </select>
        <br>
        <label>Enter desired length for dessert(inches):</label>
        <input type = "number" name = "length" value= "<?php echo htmlspecialchars($length);?>" />
        <br>
        <label>Enter desired width for dessert(inches):</label>
        <input type = "number" name = "width" value= "<?php echo htmlspecialchars($width);?>" />
        <br>
        <label>Enter desired weight for dessert(lbs):</label>
        <input type = "number" name = "weight" value= "<?php echo htmlspecialchars($weight);?>" />
        <br>
        <input type = "submit" value = "Submit"/>
      </form>
    </main>
        
    </div>

    <figure>
      <img id = "shipPic" src = "images/shipPic.png">
      </figure>

    <footer>
        123-456-7890 | 249 Kearny Ave ,Kearny, NJ 07032 
      </footer>
    <footer>
        Oscar Cotto 2-17-23 IT202-006, unit 3 assignment, oc4@njit.edu
    </footer>

  </body>
</html>
