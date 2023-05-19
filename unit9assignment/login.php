<?php 
//Oscar Cotto 4-6-2023 IT202-006 Unit 9 Assignment oc4@njit.edu
if (!isset($login_message)) {
 $login_message = 'You must login to view this page.';
}
?>
<html>
  <head>
    <link rel="stylesheet" href = "../styles.css"/>
    <link type="image/icons8-shop-16.png" sizes="16x16" rel="icon" href="../images/icons8-shop-16.png">
    <link rel="stylesheet" href = "styles.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&family=Zeyada&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&family=ZCOOL+XiaoWei&family=Zeyada&display=swap" rel="stylesheet"><link rel="stylesheet" href = "product_list.css"/>
    <title>Oscar's Dessert Shop</title>
  </head>
  <body>
    <h1>Oscar's Dessert Shop</h1>
  <main>
    <h1 id = "header1">Login</h1>
    <form action="authenticate.php" method="post">
      <label>Email:</label>
      <input type="text" name="email" value="">
      <br>
      <label>Password:</label>
      <input type="password" name="password" value="">
      <br>
      <input type="submit" value="Login">
    </form>
    <p><?php echo $login_message; ?></p>
  </main>
  </body>
</html>