<?php
    require_once 'login_url.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	width: 240px;
	margin: auto;
}
form {border: 3px solid #f1f1f1;}

.imgcontainer {
  text-align: center;
  margin: 24px 0 0px 0;
}

img.avatar {
  width: 100%;
  border-radius: 50%;
}

.container {
  padding: 0px;
}
	h1{
		color: #ffffff;
		background-color:#26377A;
		padding:0;
		margin:0;
		font-size:24px;
	}
	h4{
		/*color: #ffffff;*/
		/*background-color:#26377A;*/
		color: #26377A;
		padding:0;
		margin:0;
	}
</style>
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
<style>
        *, *:before, *:after {
            box-sizing: border-box;
        }

        .g-sign-in-button {
            margin: 0px;
            display: inline-block;
            width: 240px;
            height: 50px;
            background-color: #4285f4;
            color: #fff;
            border-radius: 1px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.25);
            transition: background-color .218s, border-color .218s, box-shadow .218s;
        }

        .g-sign-in-button:hover {
            cursor: pointer;
            -webkit-box-shadow: 0 0 3px 3px rgba(66, 133, 244, 0.3);
            box-shadow: 0 0 3px 3px rgba(66, 133, 244, 0.3);
        }

        .g-sign-in-button:active {
            background-color: #3367D6;
            transition: background-color 0.2s;
        }

        .g-sign-in-button .content-wrapper {
            height: 100%;
            width: 100%;
            border: 1px solid transparent;
        }

        .g-sign-in-button img {
            width: 18px;
            height: 18px;
        }

        .g-sign-in-button .logo-wrapper {
            padding: 15px;
            background: #fff;
            width: 48px;
            height: 100%;
            border-radius: 1px;
            display: inline-block;
        }

        .g-sign-in-button .text-container {
            font-family: Roboto,arial,sans-serif;
            font-weight: 500;
            letter-spacing: .21px;
            font-size: 16px;
            line-height: 48px;
            vertical-align: top;
            border: none;
            display: inline-block;
            text-align: center;
            width: 180px;
        }	
</style>
</body>
</html>


