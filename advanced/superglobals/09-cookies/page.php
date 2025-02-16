<?php
// var_dump($_COOKIE);
$username = $_COOKIE['username'] ?? 'Guest';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Page - Cookies</title>
</head>

<body>
  <h1>Welcome <?= $username ?> </h1>
  <a href="destroy.php">Go to destroy page</a>
</body>

</html>