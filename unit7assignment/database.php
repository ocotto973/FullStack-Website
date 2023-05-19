<?php
    // Slide 24
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
?>