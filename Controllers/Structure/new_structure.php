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
    <link rel="stylesheet" href="../../CSS/Style2.css">
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
                        <a href="../Branche/branche.php">Ramas</a>
                        <a href="../Structure_type/structure_type.php">Tipoestructuras</a>
                        <a href="structure.php">Estructuras</a>
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
  <br><br><br><br><br><br>
  <h2>Agregar estructura</h2>
  
  <form action="create_structure.php" method="post">
        <br>
        <label for="">Nombre</label>
        <input type="text" name="name">
        <br>
        <label for="">Tipo de estructura</label>
        <input type="number" name="structure_type_id">
        <br>
        <label for="">Parent id</label>
        <input type="number" name="parent_id">
        <br>
        <input type="submit" value="Agregar">
    </form>

</div>
<footer>
        <h1>AGSCH - Derechos Reservados.<br>
            Comisión Nacional de Tecnologías de la Información.</h1>
</footer>
</body>


