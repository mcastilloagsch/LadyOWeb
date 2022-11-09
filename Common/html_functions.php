<?php

function head_html($style){
    $html = <<<HTML
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head runat="server">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gestión Administrativa - AGSCH</title>
        <meta charset="utf-8" />
        <link href="/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <script src="../../js/jquery-3.3.1.js"></script>
        <link href="../../CSS/Style.css" rel="stylesheet" type="text/css" />
        <link href="../../CSS/Header.css" rel="stylesheet" type="text/css" />
        <link href="../../CSS/Section.css" rel="stylesheet" type="text/css" />
        <link href="../../CSS/Footer.css" rel="stylesheet" type="text/css" />
        <link href="../../CSS/Dropbox.css" rel="stylesheet" type="text/css" />
        <link rel="icon" type="image/png" href="../../Img/Logo.png" />
        <script src="../../js/Dropbox.js"></script>
    HTML;
    echo $html;

    if($style == 1) {
        echo "<link rel='stylesheet' href='../../CSS/Style2.css'>\n";
    }
    echo "</head>\n";
    
}

function header_html($local){

    $controllers = [
        ["path" => "Country", "controller" => "country.php", "text" => "Paises"],
        ["path" => "Region", "controller" => "region.php", "text" => "Regiones"],
        ["path" => "Province", "controller" => "province.php", "text" => "Provincias"],
        ["path" => "Commune", "controller" => "commune.php", "text" => "Comunas"],
        ["path" => "Sexe", "controller" => "sexe.php", "text" => "Sexos"],
        ["path" => "Gender", "controller" => "gender.php", "text" => "Generos"],
        ["path" => "Socioeconomic", "controller" => "socioeconomic.php", "text" => "SocioEconomicos"],
        ["path" => "Branche", "controller" => "branche.php", "text" => "Ramas"],
        ["path" => "Structure_type", "controller" => "structure_type.php", "text" => "Tipoestructuras"],
        ["path" => "Structure", "controller" => "structure.php", "text" => "Estructuras"],
        ["path" => "Religion", "controller" => "religion.php", "text" => "Religiones"],
        ["path" => "Position", "controller" => "position.php", "text" => "Posiciones"],
    ];

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
    HTML;
    echo "$html\n";

    foreach($controllers as $i => $controller){
        $html = "<a href='";

        if($local != $controller["controller"]){
            $html = $html."../".$controller["path"]."/";
        }

        $html = $html.$controller["controller"]."'>".$controller["text"]."</a>\n";
        echo $html;
    }
    $html = <<<HTML
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

function controller_page_html($caller, $titulo,$general_buttons, $objects, $api_url, $buttons, $id_key){
  head_html(0);
  header_html($caller);
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
  echo $html;

  foreach ($general_buttons as $i => $value) {
      echo "<div>";
      echo "  <a class='button' href='".$general_buttons[$i]["href"]."' >".$general_buttons[$i]["text"]." </a>";
      echo "</div>";
  }
  
  $html = <<<HTML
      <hr>
      <div class="testeo">
      <main>
        <table>
          <thead>
            <tr>
   HTML;
   echo $html;

   foreach ($objects as $i => $item) {
        if( $item["hidden"]==0 ){
            echo "<th>".$item["label"]." </th>";
        }
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
        
        echo "<tr>\n";

        foreach($objects as $i => $item){

            if( $item["hidden"]==0 ){
        
                $display_value = $value[$item["key"]];
                
                if ( $item["key"] == "IsDeleted" ){
                    if ( $display_value != "") {
                        $display_value = "*";
                    }
                }
                echo "<td>" . $display_value . "</td>\n";
            }
        }
        
        

        foreach($buttons as $i => $item){
            echo "<td class='select'>";
            if ( $item["active"] == 1){
                echo "<a class='button' id='".$item["id"]."' href='".$item["href"]."$id'>".$item["text"]." </a>";
            }
            else {
                echo "<a class='buttoneliminate' href=''>".$item["text"]."</a>";
            }
            echo "</td>\n";

        }
        echo "</tr>\n";
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

function controller_new_item_page($titulo,$items,$action,$method,$back){
    head_html(1);
    echo "<body>\n";
    header_html($back);
    $html = <<<HTML
    <div class="container">
    <br><br><br><br><br><br>
    <h2>$titulo</h2>
    HTML;
    echo $html;

    echo "<form action='$action' method='$method'>\n";
    echo "<br>\n";
    
    foreach($items as $i => $item){
        echo "<label for=''>".$item["for"]."</label>\n";
        echo "<input type='".$item["type"]."' name='".$item["name"]."'>\n";
        echo "<br>\n";
    }
    echo "<input type='submit' value='Agregar'>\n";
    echo "    <a href='".$back."'>Volver</a>\n";

    $html = <<< HTML
    </form>

    </div>
    <footer>
        <h1>AGSCH - Derechos Reservados.<br>
            Comisión Nacional de Tecnologías de la Información.</h1>
    </footer>
    </body>
    HTML;
}

function controller_update_item_page($id_get,$titulo,$items,$action,$method,$back){
    head_html(1);
    echo "<body>\n";
    header_html($back);
    $html = <<<HTML
    <div class="container">
    <br><br><br><br><br><br>
    <h2>$titulo</h2>
    HTML;
    echo $html;

    $id = $_GET[$id_get];

    $API_URL=APIGET('APICountryGetObject')."/".$id;

    $json = file_get_contents($API_URL);
    $datos = json_decode($json,true);
    
    echo "<form action='$action' method='$method'>\n";
    
    foreach($items as $i => $item){
        $actual = $datos["data"][$item["name"]];
        
        if($item["hidden"]==0){
            echo "<label for=''>".$item["for"]."</label>\n";
            echo "<input type='".$item["type"]."' name='".$item["name"]."' value='".$actual."'>\n";
        }
        else{
            echo "<input type='hidden' name='".$item["name"]."' value='".$actual."'>\n";
        }
        
        echo "<br>\n";
    }
    echo "<input type='submit' value='Editar'>\n";
    echo "    <a href='".$back."'>Volver</a>\n";

    $html = <<< HTML
    </form>

    </div>
    <footer>
        <h1>AGSCH - Derechos Reservados.<br>
            Comisión Nacional de Tecnologías de la Información.</h1>
    </footer>
    </body>
    HTML;
}
?>