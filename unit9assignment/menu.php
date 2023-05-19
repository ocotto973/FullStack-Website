<?php
//Oscar Cotto 4-6-2023 IT202-006 Unit 9 Assignment oc4@njit.edu

    session_start();
    if(isset($_SESSION['is_valid_admin'])) {
        header("Location: ../home.php");
?>
    <p>
        <a href="logout.php">Logout</a>
    </p>
<?php exit();} else { ?>
    <p>
        <a href="login.php">Login</a>
    </p>

<?php } ?>