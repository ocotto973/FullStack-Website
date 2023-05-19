<?php
require_once('database.php');
//Slide 41
//get the product data from the form
$dessertCategoryID= filter_input(INPUT_POST,'dessertCategoryID',FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST,'code');
$name = filter_input(INPUT_POST,'name');
$description = filter_input(INPUT_POST,'description');
$price = filter_input(INPUT_POST,'price',FILTER_VALIDATE_FLOAT);
//function for duplicates
function isDuplicate($code){
  $mysqli = new mysqli("localhost","web_user","pa55word","dessert_shop");

  $query = "SELECT * FROM dessert WHERE dessertCode = '$code'";

  $result = $mysqli->query($query);

  if ($result) {
      if (mysqli_num_rows($result) > 0) {
          return true;
      } else {
          return false;
      }
  } 
  // close connection
  mysqli_close($mysqli);
  }
//basic field validation
// if(isDuplicate($code) == true){
//   echo "YES DUPLICATE";
// }
// else{
//   echo "NOT DUPLICATE";
// }
$error = "";
if($code == NULL || isDuplicate($code)==true){
  $error = "Invalid Code data. Check fields and try again.";
}
else if($name == NULL){
  $error = "Invalid Name data. Check fields and try again.";
}
else if($description == NULL){
  $error = "Invalid description data. Check fields and try again.";
}
else if($price == NULL || $price == FALSE){
  $error = "Invalid Price data. Check fields and try again.";
}
//if error occurs
if($error != ""){
  include("createPageForm.php");
  exit(); 
}
else{
  require_once('database.php');
  //Slide 42
  $query = 'INSERT INTO dessert
  (dessertCategoryID, dessertCode, dessertName, description, price,dateAdded)
  VALUE
  (:dessertCategoryID, :code, :name, :description ,:price,NOW())';
  $statement = $db->prepare($query);
  $statement->bindValue(':dessertCategoryID', $dessertCategoryID);
  $statement->bindValue(':code', $code);
  $statement->bindValue(':name', $name);
  $statement->bindValue(':description', $description);
  $statement->bindValue(':price', $price);
  $success = $statement->execute();
  $statement->closeCursor();
  echo "<p>Your new entry was successfully entered!</p>";

}

?>