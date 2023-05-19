<?php
//Oscar Cotto 4-6-2023 IT202-006 Unit 9 Assignment oc4@njit.edu
require_once("database.php");
function add_dessert_manager($email, $password, $fname, $lname) {
  $db = getDB();
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $query = 'INSERT INTO dessertManagers (emailAddress, password, firstName, lastName)
            VALUES (:email, :password, :fname, :lname)';
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->bindValue(':password', $hash);
  $statement->bindValue(':fname', $fname);
  $statement->bindValue(':lname',$lname);
  $statement->execute();
  $statement->closeCursor();
}

add_dessert_manager("johnsmith@gmail.com","john123","John","Smith");
add_dessert_manager("janedoe@gmail.com","jane123","Jane","Doe");
add_dessert_manager("bobjones@gmail.com","bob123","Bob","Jones");
?>