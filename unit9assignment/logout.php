<?php
    session_start();
    //Oscar Cotto 4-6-2023 IT202-006 Unit 9 Assignment oc4@njit.edu
    // Slide 23 (mostly)
    $_SESSION = [];     // clear all session data
    session_destroy();  // cleanup session ID

    $login_message = 'You have been logged out.';
    include('login.php');
?>