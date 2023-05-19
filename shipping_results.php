<?php
//get data
$fullName = filter_input(INPUT_POST,'fullName');
$address = filter_input(INPUT_POST,'address');
$city = filter_input(INPUT_POST,'city');
$state = filter_input(INPUT_POST,'state');
$zipCode = filter_input(INPUT_POST,'zipCode');
$dessert = filter_input(INPUT_POST,'dessert');
$length = filter_input(INPUT_POST,'length',FILTER_VALIDATE_INT);
$width = filter_input(INPUT_POST,'width',FILTER_VALIDATE_INT);
$weight = filter_input(INPUT_POST,'weight',FILTER_VALIDATE_INT);

//validate 
$error_message = "";
function validateZipCode($zipCode) {
  if(preg_match('#[0-9]{5}#', $zipCode)){
    return true;
  }
  else{
    return false;
  }
}
  if (validateZipCode($zipCode) == false){
    $error_message = "Please enter a valid Zip Code.";
  }
  else if($length * $width > 36 || $length * $width <=0){
    $error_message = "Please enter valid dimensions.";
  }
  else if($weight>150|| $weight <= 0){
    $error_message = "Please enter a valid weight.";
  }

//if error occurs
if($error_message != ""){
  include("shipping.php");
  exit(); 
}
?>
<html>
  <head>
    <link type="image/icons8-shop-16.png" sizes="16x16" rel="icon" href="images/icons8-shop-16.png">
    <title>Shipping Label</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&family=Zeyada&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1 id = "header1">Oscar's Dessert Shop</h1>
    </header>

    <div id = "navBar">
      <ul> 
        <li><a href="unit5assignment/dessert_list.php"><button>Dessert</button></a></li>
        <li><a href="home.php"><button>Home</button></a></li>
        <li><a href="shipping.php"><button>Shipping</button></a></li>
        <li><a href="unit7assignment/createPageForm.php"><button>Create</button></a></li>
        <?php
          session_start();
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
    <h3><?php echo "Welcome " . $_SESSION['fname'] . " ". $_SESSION['lname'] . " (". $_SESSION['email'] . ")"; } else{ ?>
      <h3><?php echo "Please log in to continue!";?></h3>
      <?php
      exit();}?></h3>
      <h2 style = "text-align:center;"> Shipping Label</h2>

      <div id = "labelDiv">

        <div class = "company">
        <img id = "ship"src = "images/shipCompany.png">
        </div>

        <div class = "top">
          <div class = "labelFrom">
            <p>From: Oscar's Dessert Shop</p>
            <p style = "margin-left: 44px;"> 249 Kearny Ave</p>
            <p style = "margin-left: 44px;"> Kearny, NJ, 07032</p>
          </div>

          <div class = "labelTo";>
            <p>To : <?php echo $fullName;?></p>
            <p style = "margin-left:30px"> <?php echo $address;?></p>
            <p style = "margin-left:30px"> <?php echo "\t". $city . ', ' . $state . ', ' . $zipCode;?></p>
          </div>
        </div>

        <div class = "middle";>
          <h2 style = "text-align:center;"> Priority Mail</h2>
        </div>

        <div class = "bottom";>
          <h3>Product: <?php echo $dessert?></h3>
          <h3>Dimensions(Length * Width): <?php echo $length * $width . ' inches' ?></h3>
          <h3>Weight: <?php echo $weight . ' lbs'?></h3>
          <h3>Ship Date: <?php echo date("m/d/Y")?></h3>
          <h3>Tracking Number: 123456ABC</h3>
          <h3>Order Number:56289 </h3>
          <h3>FedEx Express</h3>
          <figure>
            <img  style = "margin-left:10px;" src = "images/barCode.png">
          </figure>
          
        </div>
      </div>
      
      <footer>
        123-456-7890 | 249 Kearny Ave ,Kearny, NJ 07032 
      </footer>
      <footer>
        Oscar Cotto 2-17-23 IT202-006, unit 3 assignment, oc4@njit.edu
      </footer>
      
    
  </body>
</html>
