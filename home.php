<?php
    session_start();
    if (!isset($_SESSION['Username'])) {
        header('Location: index.html');
        exit(100);
    }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Home Page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="icon" type="image/png" href="img/home-icon.png">
</head>
<body>
   <nav>
      <h3>Welcome!</h3>
      <a href="logout.php">Logout</a>
   </nav>
   <div class="content">
     <h1>Welcome to the Home Page</h1>
      <p>There is a secret account in this web program. Hint: It is in the username</p>
   </div>
</body>
</html>
