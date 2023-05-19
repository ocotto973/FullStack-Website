<?php
    // Slide 24
    //Oscar Cotto 4-6-2023 IT202-006 Unit 9 Assignment oc4@njit.edu

    function getDB() {
        // NEW CODE
        $dsn = 'mysql:host=localhost;dbname=dessert_shop';
        $username = 'web_user';
        $password = 'pa55word';

        try 
        {
            $db = new PDO($dsn, $username, $password);
            //echo '<p>You are connected to the database!</p>';
        } catch (PDOException $exception)
        {
            $error_message = $exception->getMessage();
            include('database_error.php');
            exit();
        }
        // NEW CODE
        return $db;
    }
    
?>