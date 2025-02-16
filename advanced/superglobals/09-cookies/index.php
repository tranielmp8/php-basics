<?php
setcookie('username', 'jdoe', time() + 3600, '/');
?>

<!DOCTYPE html>
<html>

<head>
  <title>PHP Cookies</title>
</head>

<body>
  <p>Cookie set. <a href="page.php">Go to page.php</a></A> </p>
  <p>See if cookie has been set. <a href="destroy.php">Go to destroy.php</a></A> </p>
</body>

</html>