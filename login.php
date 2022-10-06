<?php
    require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login With Google</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" ,align="center">
                <div class="Imagen">
                    <img src="images/login.png"><br><br>
                </div>
                <form action="loginDB.php" method="post">
                    <input type="email" placeholder="Email..." name="email" class="form-control"><br>
                    <input type="password" placeholder="Contraseña..." name="contraseña" class="form-control"><br>
                    <div class="Botones">
                        <input type="submit" value="Log In" class="btn btn-primary">
                        <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
<style>
    .Imagen{
        margin: 100px 0 50px 0;
        display: flex;
        justify-content : center;
    }

    .Imagen img{
        width: 20%;
    }
    .Botones{
        display: flex;
        justify-content : center;
    }

</style>