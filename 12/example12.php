<?php
  if (isset($_SERVER['PHP_AUTH_USER']) &&
  	  isset($_SERVER['PHP_AUTH_PW']))
  {
    echo "Welcome User: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']);
    echo "<br>";
    echo "You Password: " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
    //var_dump($_SERVER);
  }
  else
  {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die("Please enter your username and password");
  }
?>
