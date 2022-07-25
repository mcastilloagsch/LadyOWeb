<?php 
session_start();
if (!isset($_SESSION['user_token'])) {
  header("Location: ../../index.php");
  die();
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestión Administrativa - AGSCH</title>
    <meta charset="utf-8" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="../../js/jquery-3.3.1.js"></script>
    <link href="../../CSS/Style.css" rel="stylesheet" type="text/css" />
    <link href="../../CSS/Header.css" rel="stylesheet" type="text/css" />
    <link href="../../CSS/Section.css" rel="stylesheet" type="text/css" />
    <link href="../../CSS/Footer.css" rel="stylesheet" type="text/css" />
    <link href="../../CSS/Dropbox.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="../../Img/Logo.png" />
    <script src="../../js/Dropbox.js"></script>
    
</head>
<body>
<header>
        <div style="width: 100%; margin: auto; width: 100%;">
            <div class="logo">
                <img src="../../Img/LogoLargo.png" alt="Logo" />
            </div>
            <nav>
                <ul>
                    <li><a href="../../home.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
                    <li>
                      <button onclick="myFunction()" class="dropbtn"><i class="fa fa-microchip" aria-hidden="true"></i> Controlador</button>
                      <div id="myDropdown" class="dropdown-content">
                        <a href="../Country/country.php">Paises</a>
                        <a href="../Region/region.php">Region</a>
                        <a href="province.php">Provincia</a>
                        <a href="#">Comuna</a>s
                      </div>
                    </li>
                    <li><a href="logout.php"><i aria-hidden="true"></i>&nbsp;Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>


<div class="container">
  <br><br>
<?php
function APIGET($ruta){
  $url = "http://localhost:100/api/Provinces/getList/";
  $respuesta = $url . $ruta;
  return $respuesta;
}

$token = APIGET("{token}");
$json = file_get_contents($token);
$datos = json_decode($json,true);
?>

<br>
    <br>
    <br>
    <br>
    <br><h1>Mantenedores de Provincias</h1>
  <br> 
  <div>
    <a class='button' href="new_province.php">Agregar</a>
  </div> 

  <hr>
  <div class="testeo">
  <main>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>ID Region</th>
          <th>Geometry</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($datos["data"] as $clave => $value){
            $id = $value["id"];
            $nombre = $value["name"];
            $region_id = $value["region_id"];
            $geom = $value["geom"];

            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $nombre . "</td>";
            echo "<td>" . $region_id . "</td>";
            echo "<td>" . $geom . "</td>";
            echo "<td class='select'><a class='button' id='edit-button' href='update_province.php?id=$id'>Editar</a><a class='buttoneliminate' href=''>Eliminar</a></td>";
            echo "</tr>";
          }
      ?>
      </tbody>
    </table>
  </main>
        </div>
</div> 
  <footer>
        <h1>AGSCH - Derechos Reservados.<br>
            Comisión Nacional de Tecnologías de la Información.</h1>
  </footer>
</body>




