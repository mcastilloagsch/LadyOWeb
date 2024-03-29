<?php 
session_start();
if (!isset($_SESSION['user_token'])) {
  header("Location: index.php");
  die();
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestión Administrativa - AGSCH</title>
    <meta charset="utf-8" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="js/jquery-3.3.1.js"></script>
    <link href="CSS/Style.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Header.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Section.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Footer.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Dropbox.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="Img/Logo.png" />
    <script src="js/Dropbox.js"></script>
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

                    <li>
                      <button onclick="myFunction()" class="dropbtn"><i class="fa fa-microchip" aria-hidden="true"></i> Controlador</button>
                      <div id="myDropdown" class="dropdown-content">
                        <a href="Controllers/Country/country.php">Paises</a>
                        <a href="Controllers/Region/region.php">Regiones</a>
                        <a href="Controllers/Province/province.php">Provincias</a>
                        <a href="Controllers/Commune/commune.php">Comunas</a>
                        <a href="Controllers/Sexe/sexe.php">Sexo</a>
                        <a href="Controllers/Gender/gender.php">Genero</a>
                        <a href="Controllers/Socioeconomic/socioeconomic.php">SocioEconomico</a>
                        <a href="Controllers/Branche/branche.php">Ramas</a>
                        <a href="Controllers/Structure_type/structure_type.php">Tipoestructuras</a>
                        <a href="Controllers/Structure/structure.php">Estructuras</a>
                        <a href="Controllers/Religion/religion.php">Religiones</a>
                        <a href="Controllers/Position/position.php">Posiciones</a>
                      </div>
                      
                    </li>
                    <li><a href="logout.php"><i aria-hidden="true"></i>&nbsp;Cerrar sesion</a></li>
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