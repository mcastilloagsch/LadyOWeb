<?php
require_once '../authorization.php';
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
                        <a href="../Region/region.php">Regiones</a>
                        <a href="../Province/province.php">Provincias</a>
                        <a href="../Commune/commune.php">Comunas</a>
                        <a href="../Sexe/sexe.php">Sexos</a>
                        <a href="../Gender/gender.php">Generos</a>
                        <a href="../Socioeconomic/socioeconomic.php">SocioEconomicos</a>
                        <a href="branche.php">Ramas</a>
                        <a href="../Structure_type/structure_type.php">Tipoestructuras</a>
                        <a href="../Structure/structure.php">Estructuras</a>
                        <a href="../Religion/religion.php">Religiones</a>
                        <a href="../Position/position.php">Posiciones</a>
                      </div>
                    </li>
                    <li><a href="../../logout.php"><i aria-hidden="true"></i>&nbsp;Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>


<div class="container">
  <br><br>
<?php
function APIGET($token){
  $file = fopen( '../../bin/urls_api.config', "r");
  $url = array();

  while (!feof($file)) {
      $url[] = fgetcsv($file,null,';');
  }
  fclose($file);
  $APIBranchesGetlist = $url[1][1];
  $respuesta = $APIBranchesGetlist . $token;
  return $respuesta;
}

$token = $_SESSION['user_token'];
$ruta = APIGET($token);
$json = file_get_contents($ruta);
$datos = json_decode($json,true);
?>

<br>
    <br>
    <br>
    <br>
    <br><h1>Mantenedores de Branches</h1>

  <br> 
  <div>
    <a class='button' href="new_branche.php">Agregar</a>
  </div> 

  <hr>
  <div class="testeo">
  <main>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Nombre unidad</th>
          <th>Pequeño equipo</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($datos["data"] as $clave => $value){
            $id = $value["id"];
            $nombre = $value["name"];
            $unit_name = $value["unit_name"];
            $small_team = $value["small_team"];

            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $nombre . "</td>";
            echo "<td>" . $unit_name . "</td>";
            echo "<td>" . $small_team . "</td>";
            echo "<td class='select'><a class='button' id='edit-button' href='update_branche.php?id=$id'>Editar</a><a class='buttoneliminate' href=''>Eliminar</a></td>";
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