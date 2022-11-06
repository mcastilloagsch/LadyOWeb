<?php

function head_html(){
    $html = <<<HTML
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
    HTML;
    echo $html;
}

function header_html(){
    $html =  <<<HTML
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
                  <a href="country.php">Paises</a>
                  <a href="../Region/region.php">Regiones</a>
                  <a href="../Province/province.php">Provincias</a>
                  <a href="../Commune/commune.php">Comunas</a>
                  <a href="../Sexe/sexe.php">Sexos</a>
                  <a href="../Gender/gender.php">Generos</a>
                  <a href="../Socioeconomic/socioeconomic.php">SocioEconomicos</a>
                  <a href="../Branche/branche.php">Ramas</a>
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
    HTML;
    echo $html;
}

function page_html($titulo,$general_buttons, $label_items, $api_url, $keys, $item_buttons, $id_key){
  head_html();
  header_html();
  $html = <<<HTML
  <body>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>$titulo</h1>
        <br> 
  HTML;
  echo $HTML;

  foreach ($general_buttons as [$endpoint_php => $text]) {
      <div>
        <a class='button' href=$endpoint_php>$text</a>
      </div>
  }
  
  $html = <<<HTML
      <hr>
      <div class="testeo">
      <main>
        <table>
          <thead>
            <tr>
       HTML;
   echo $HTML;

   foreach ($label_items as $i => $value) { 
     echo "<th>".$label_items[$i]." </th>";
   }
   
   $html = <<<HTML       
        </tr>
      </thead>
    <tbody>
    HTML;
    echo $html;
    
    $API_URL=APIGET($api_url);

    $json = file_get_contents($API_URL);
    $datos = json_decode($json,true);

    foreach ($datos["data"] as $clave => $value){
        $id = $value[$id_key];
        
        echo "<tr>";

        foreach($keys as $key => $value2){
            echo "<td>" . $keys[$key] . "</td>";
        }
        
        echo "<td class='select'>";

        foreach($item_buttons as $i => $value){
            echo "<a class='button' id='".$item_buttons[$i]["id"]."' href='".$item_buttons[$i]["href"]."=$id'>".$item_buttons[$i]["text"]." </a>";  
        }
        echo "</tr>";
    }

    $html = <<<HTML
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
    HTML;
    echo $html;
}
?>