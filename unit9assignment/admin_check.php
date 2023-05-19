<?php
    require_once('database.php');
    //Oscar Cotto 4-6-2023 IT202-006 Unit 9 Assignment oc4@njit.edu
    // Slide 18
    //function to check if info is correct
    function is_valid_admin_login($email, $password) 
    {
        $db = getDB();
        $query = 'SELECT password FROM dessertmanagers WHERE emailAddress = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        if($row === false)
        {
            return false;
        }
        else
        {
            $hash = $row['password'];
            return password_verify($password, $hash);
        }
    }
?>