<?php
require_once 'config.php';
include_once 'Common/functions.php';

// codigo de autentificacion de google (oauth flow)
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  if(!isset($token['error'])) {
    $client->setAccessToken($token['access_token']);

    $_SESSION['access_token'] = $token['access_token'];

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    // toma la información del usuario
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

    //read file urls_api.config

    $API_ABS_PATH = PARAMGET('API_ABS_PATH');
    $APILogInUser = APIGET('APILogInUser');

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $API_ABS_PATH.$APILogInUser);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
      "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $correo = $userinfo['email'];

    $data = <<<DATA
    {
        "eMail" : "$correo",
        "token" :  ""
    }
    DATA;

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);

    $respuesta= json_decode($resp,true);

    
    error_log(var_dump($resp),0);
    error_log(var_dump($respuesta),0); 

    if ($respuesta["isValid"] == true) {

    // Verificando si el usuario existe en la base de datos
      $sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // si el usuario existe
        $userinfo = mysqli_fetch_assoc($result);
        $token = $respuesta['data']['token'];
      } else {
        // si el usuario no existe
        $sql = "INSERT INTO users (email, first_name, last_name, gender, full_name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['full_name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$respuesta['token']}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          $token = $respuesta['data']['token'];
        } else {
          echo("User is not created");
          die();
        }
      }

      // guardar los datos del usuario
      $_SESSION['user_token'] = $token;
      header("Location: home.php");
    } else {
      if (!isset($_SESSION['user_token'])) {
        echo("<script>
            alert('Tu usuario no es apto para ingresar, contactate con el administrador');
            window.location.href='index.php';
            </script>");
        session_destroy();
        die();
      }

      /* verificando si el usuario existe en la base de datos */
      $temp = "{$_SESSION['user_token']}";
      $sql = "SELECT * FROM users WHERE token = $temp";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        /* si el usuario existe */
        $userinfo = mysqli_fetch_assoc($result);
        header("Location: home.php");
      } else {
        session_destroy();
        header("Location: home.php");
     }
    }
  } else {
    session_destroy();
    header("Location: index.php");
    die();

  }
} else {
  session_destroy();
  header("Location: index.php");;
  die();
}

?>
