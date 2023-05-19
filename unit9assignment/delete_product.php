<?php
    // Slide 37
    require_once('database.php');
    //Oscar Cotto 4-6-2023 IT202-006 Unit 9 Assignment oc4@njit.edu
    $db = new PDO('mysql:host=localhost;dbname=dessert_shop', 'web_user', 'pa55word'); //makes pdo object
    // get ID values from the form
    $dessertCode = filter_input(INPUT_POST, 'dessertCode'); //use code to locate specific dessert

    if($dessertCode != FALSE)
    {
        // delete the product from the database
        $query = 'DELETE FROM dessert WHERE dessertCode = :dessertCode';
        $statement = $db->prepare($query);
        $statement->bindValue(':dessertCode', $dessertCode);
        $success = $statement->execute();
        $statement->closeCursor();
        //echo "<p>Your delete status is successful.</p>";
        header("Location: ../unit5assignment/dessert_list.php"); //go back to dessert menu page after success
        exit();
    }
    else{
        echo "<p>Fail</p>";
    }
?>