<!doctype html>
<html lang="fr" class="fullscreen-bg">

<head>

    <title>Création de votre compte Pass manager</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="cache-control" content="public, max-age=1">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="view/template_1/assets/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/template_1/assets/lib/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="view/template_1/assets/lib/css/main.css">

    <!-- NOTIFY CSS -->
    <link rel="stylesheet" href="view/template_1/assets/lib/css/notify.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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

    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left" style="padding:30px">
                        <div class="content">
                            <a href="./"
                                style="text-align:initial;color:#676a6d;display:inline-flex;float:left;margin-bottom:20px">
                                <i class="far fa-arrow-alt-circle-left" style="font-size:30px"></i><span
                                    style="margin-top:4px">Retour</span>
                            </a>
                            <div style="clear:both"></div>
                            <div class="header">
                                <div class="logo text-center"><img src="media/img/logo.png" alt="Pass manager Logo">
                                </div>
                                <p class="lead">Créer votre compte Pass manager</p>
                            </div>
                            <form class="form-auth-small" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="login" placeholder="Email" value="<?= $email ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" value="<?= $pseudo ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pass" placeholder="Mot de passe" value="<?= $pass ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pass2"  placeholder="Confirmation mot de passe" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="inscription">VALIDATION</button>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay" style="background-image: url('media/img/inscription-bg.jpg')"></div>
                        <div class="content text">
                            <h1 class="heading">Une outil qui vous simplifera la gestion de vos mots de passe</h1>
                            <br>
                            <a href="view/guillaume_legoff" style="color:white">
                                <p>Par Guillaume LE GOFF</p>
                                <p>Développeur web</p>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div style="text-align:center;margin:30px;font-size:16px">
                    <a href="mailto:guillaumelegoffmail@gmail.com" style="color: #555;"><i class="far fa-envelope"></i>Contactez l'administrateur : guillaumelegoffmail@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content body -->

</body>

</html>