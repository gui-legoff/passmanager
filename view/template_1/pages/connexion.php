<!doctype html>
<html lang="fr" class="fullscreen-bg">
<head>

	<title>Connexion à votre gestionnaire de mot de passe / Pass manager</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="cache-control" content="public, max-age=1">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="view/template_1/assets/lib/css/bootstrap.min.css">
	<link rel="stylesheet" href="view/template_1/assets/lib/css/font-awesome.min.css">
	
	<!-- CSS -->
    <link rel="stylesheet" href="view/template_1/assets/lib/css/main.css">
    <link rel="stylesheet" href="view/template_1/assets/css/pages/connexion.css">

    <!-- NOTIFY CSS -->
    <link rel="stylesheet" href="view/template_1/assets/lib/css/notify.css">
    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="media/img/favicon.png">

    <!-- SCRIPTS JS -->
    <script src="view/template_1/assets/lib/js/jquery.js"></script>
    <script src="view/template_1/assets/lib/js/notify.js"></script>

</head>


<body>

    <!-- Content body -->

    <!-- Message popup notify -->
    <?php require 'php/controller/MessageController.php' ?>

    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="media/img/logo.png" alt="Pass manager Logo">
                                </div>
                                <p class="lead">Se connecter à votre compte</p>
                            </div>
                            <form class="form-auth-small" action="" method="post">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" name="login"
                                        value="<?= $login ?>" placeholder="Email"> 
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" name="pass"
                                        value="" placeholder="Mot de passe" required >
                                </div>
                                <!-- <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Se souvenir de moi</span>
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="connexion">CONNEXION</button>
                                <div class="bottom">
                                    <span class="helper-text"><i class="fas fa-user-plus"></i><a href="inscription">Pas encore inscrit ?</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <a href="view/passmanager_showcase" style="position: absolute;"><img src="media/img/con_banniere.jpg" alt="banniere" id="banniere"></a>
                        <div class="content text">
                            <h1 class="heading">Connectez-vous a votre compte Pass manager</h1>
                            <br>
                            <p>Consultez vos mots de passe en toute sécurité</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div style="text-align:center;margin:30px;font-size:16px">
                        <a href="mailto:guillaumelegoffmail@gmail.com" style="color: #555;"><i class="far fa-envelope"></i>Contactez l'administrateur : guillaumelegoffmail@gmail.com</a>
                        <br>
                        <a href="view/passmanager_showcase" style="color: #555;margin-top:8px;display:block;"><i class="fas fa-desktop"></i>A propos de Pass manager</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->



    <!-- End Content body -->

</body>

</html>