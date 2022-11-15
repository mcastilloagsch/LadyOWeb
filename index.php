<?php
    require_once 'login_url.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/Index.css" rel="stylesheet" type="text/css" />
    <title>Asociación de Guías y Scouts de Chile - AGSCH</title>
</head>
<body>
	<div class="imgcontainer">
		<img src="Img/Logo.png" alt="Avatar" class="avatar">
		<h1>Lady O_</h1>
		<h4>Sistema de Registro Institucional<h4>
	</div>
	<div class='g-sign-in-button'>
		<div class=content-wrapper>
			<div class='logo-wrapper'>
				<img src='Img/GoogleLogo.png'>
			</div>
			<span class='text-container'>
				<span onclick="window.location = '<?php echo $login_url;?> '">Sign in with Google</span>
            </span>
		</div>
	</div>
</body>
</html>


