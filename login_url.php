<?php
require_once 'config.php';

if (isset($_SESSION['user_token'])) {
  header("Location: welcome.php");
} else {
  $login_url = $client->createAuthUrl();
  //echo "<a href='" . $client->createAuthUrl() . "'>Google Login</a>";

}

?>

