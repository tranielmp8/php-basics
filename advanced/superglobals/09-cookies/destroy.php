<?php
setcookie("username", "", time() - 3600, "/");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Destroy Page</title>
</head>

<body>
  Your cookie has been deleted! <a href="page.php">Go to page.php</a>
  Your cookie has been deleted! <a href="index.php">Go to index.php</a>
</body>

</html>