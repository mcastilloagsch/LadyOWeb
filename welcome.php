<?php
require_once 'config.php';

function function_alert($message) {
      
  // Display the alert box 
  echo "<script>alert('$message');</script>";
}

// codigo de autentificacion de google (oauth flow)
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
if(!isset($token['error']))
{
  $client->setAccessToken($token['access_token']);

  $_SESSION['access_token'] = $token['access_token'];

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

  

  // toma la información del usuario
  
  
 

  $url = "http://rcore.dev.guiasyscouts.cl/api/Login/Login";
  //$url = "http://localhost:100/api/LogIn/LogInUser";

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
        $token = $respuesta['token'];
      } else {
        // si el usuario no existe
        $sql = "INSERT INTO users (email, first_name, last_name, gender, full_name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['full_name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$respuesta['token']}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          $token = $respuesta['token'];
        } else {
          echo "User is not created";
          die();
        }
      }

      // guardar los datos del usuario
      $_SESSION['user_token'] = $token;
    } else {
      if (!isset($_SESSION['user_token'])) {
        echo "<script>
        
            alert('Tu usuario no es apto para ingresar, contactate con el administrador');
            window.location.href='index.php';
            </script>";
        //header("Location: message.php");
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
}
  else {
    session_destroy();
    header("Location: index.php");
  }


?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestión Administrativa - AGSCH</title>
    <meta charset="utf-8" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="js/jquery-3.3.1.js"></script>
    <link href="CSS/Style.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Header.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Section.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Footer.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="Img/Logo.png" />
</head>
<body>
    <header>
        <div style="width: 100%; margin: auto; width: 100%;">
            <div class="logo">
                <img src="Img/LogoLargo.png" alt="Logo" />
            </div>
            <nav>
                <ul>
                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <form id="form1" runat="server" method="post">
        </form>
    </section>
    <footer>
        <h1>AGSCH - Derechos Reservados.<br>
            Comisión Nacional de Tecnologías de la Información.</h1>
    </footer>
</body>
</html>