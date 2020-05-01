<!doctype html>
<html lang="fr" class="fullscreen-bg">
<head>

    <title>Pass manager l'outil qui vous simplifie la gestion de vos mots de passe</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="cache-control" content="public, max-age=1">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <!-- ICONS -->
    <link rel="icon" type="image/png" sizes="96x96" href="media/img/favicon.png">

    <!-- CSS -->
    <?php foreach ($cssLinks as $c) {
        echo '<link rel="stylesheet" href="view/template_1/assets/lib/css/'.$c.'" />';
    } ?>

    <link rel="stylesheet" href="view/template_1/assets/css/commun.css">

    <!--  Css custom page -->
    <?php if(!empty(lien('css'))){ ?>
        <link rel="stylesheet" href="<?= lien('css'); ?>"/>
    <?php } ?>
    <!-- END CSS -->

    <!-- SCRIPTS JS -->
    <script src="view/template_1/assets/lib/js/jquery.js"></script>
    <script src="view/template_1/assets/lib/js/notify.js"></script>

</head>

<body>
    <!-- Message popup notify -->
    <?php require 'php/controller/MessageController.php'; ?>

    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
            <div class="brand">
                <a href="./"><img src="media/img/logo.png" alt="Pass manager Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i
                            class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <div style="float:left" class="brand">
                    <h3 style="line-height:30px" class="float-l m-t-0 m-b-0">Bonjour <?= $aUserData['pseudo'] ?><i
                            class="far fa-hand-peace" style="margin-left:8px"></i></h3>
                    <p class="panel-subtitle float-l m-b-0" id="connexion_last" style="line-height: 30px;padding-left:20px">Dernière connexion :
                        <?= $aUserData['last_connexion'] ?></p>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right" id="navbar_menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= $imageProfil ?>"
                                    class="img-circle avatar" alt="Avatar">
                                <span id="avatar_span"><?= $aUserData['pseudo'] ?></span>
                                <i id="avatar_i" class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="profil"><i class="lnr lnr-user"></i> <span>Mon Profil</span></a></li>
                                <!-- <li><a href="parametres"><i class="lnr lnr-cog"></i> <span>Paramètres</span></a></li> -->
                                <li><a href="php/controller/UnsetSessionsController.php"><i class="lnr lnr-exit"></i>
                                        <span>Déconnexion</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->

        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="./"><i class="lnr lnr-home"></i> <span>Tableau de bord</span></a></li>
                        <li><a href="corbeille"><i class="lnr lnr-trash"></i> <span>Corbeille</span></a></li>
                        <li><a href="generateur"><i class="lnr lnr-lock"></i> <span>Générateur</span></a></li>
                        <li><a href="statistiques"><i class="lnr lnr-chart-bars"></i> <span>Statistiques</span></a></li>
                        <!-- <li><a href="telecharger"><i class="lnr lnr-download"></i> <span>Télécharger</span></a> -->
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->

        <!-- MAIN CONTENT -->
        <div class="main" id="content_body">
            <div class="main-content" style="padding-top: 12px;">
                <?php
                    if( empty($_GET['url']) ){
                        require_once 'view/template_1/pages/accueil.php';
                    }else{
                        require_once 'view/template_1/pages/'.$_GET['url'].'.php';                     
                    }                      
                ?>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
</body>

<!-- Javascript links -->
<?php
foreach ($jsLinks as $j) {
    echo '<script src="view/template_1/assets/lib/js/'.$j.'"></script>';
}
?>

<!--  JS custom page -->
<?php if(!empty(lien('js'))){ ?>
    <script src="<?php echo lien('js') ?>"></script>
<?php } ?>

</html>