<?php
require_once 'config.php';

// codigo de autentificacion de google (oauth flow)
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // toma la información del usuario
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();

  
  $userinfo = [
    'email' => $google_account_info['email'],
    'first_name' => $google_account_info['givenName'],
    'last_name' => $google_account_info['familyName'],
    'gender' => $google_account_info['gender'],
    'full_name' => $google_account_info['name'],
    'picture' => $google_account_info['picture'],
    'verifiedEmail' => $google_account_info['verifiedEmail'],
    'token' => $google_account_info['id'],
  ];

  $url = "http://rcore.dev.guiasyscouts.cl/api/Login/Login";

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
    "Content-Type: application/json",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

  $correo = $userinfo['email'];
  //echo json_encode($correo);
  $correo2= 'mcastillo@guiasyscoutschile.cl';

  $data = <<<DATA
  {
      "eMail" : "$correo2"
  }
  DATA;
  
  //echo json_encode($data);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

  //for debug only!
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

  $resp = curl_exec($curl);
  curl_close($curl);
  //echo "'".$resp."'";
  $respuesta= json_decode($resp,true);
  //var_dump($respuesta);
  //echo $respuesta["isValid"];

  
  if ($respuesta["isValid"] == true){
    
  // Verificando si el usuario existe en la base de datos
      $sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // si el usuario existe
        $userinfo = mysqli_fetch_assoc($result);
        $token = $userinfo['token'];
      } else {
        // si el usuario no existe
        $sql = "INSERT INTO users (email, first_name, last_name, gender, full_name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['full_name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          $token = $userinfo['token'];
        } else {
          echo "User is not created";
          die();
        }
      }

      // guardar los datos del usuario
      $_SESSION['user_token'] = $token;
    } else {
      if (!isset($_SESSION['user_token'])) {
        header("Location: message.php");
        die();
      }

      // verificando si el usuario existe en la base de datos
      $sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // si el usuario existe
        $userinfo = mysqli_fetch_assoc($result);
      }
    }
  }
  else {
    session_destroy();
    header("Location: message.php");
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido</title>
</head>

<body>
  <img src="<?= $userinfo['picture'] ?>" alt="" width="90px" height="90px">
  <ul>
    <li>Nombre: <?= $userinfo['full_name'] ?></li>
    <li>Correo: <?= $userinfo['email'] ?></li>
    <li>Genero: <?= $userinfo['gender'] ?></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</body>

</html>