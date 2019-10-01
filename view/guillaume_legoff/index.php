<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Guillaume LE GOFF</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Police Formulaire -->
    <link rel='stylesheet' id='portfolio-web-googleapis-css'
        href='//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Work+Sans:100,200,300,400,500,600,700,800,900'
        type='text/css' media='all' />

    <!-- Style -->
    <?php 
        // Générateur de CSS
            $scanCss=scandir("css/");
            foreach ($scanCss as $css) {
                if($css!="." AND $css!=".."){
                    echo '<link rel="stylesheet" href="css/'.$css.'"/>';
                }
            }
        // Fin du générateur de CSS
    ?>

    <!-- Script Jquery -->
    <script type='text/javascript' src='js/jquery.js'></script>

</head>

<body class="home page-template-default page page-id-74 wp-custom-logo menu-default acme-animate right-sidebar">
    <div class="site" id="page">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div class="navbar at-navbar " id="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="menu-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button> -->
                </div>
                <div class="at-beside-navbar-header">
                    <a href="#" class="close-menu">
                        <span class="menu-icon">
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <div class="search-woo">
                    </div>
                    <div class="main-navigation navbar-collapse collapse">
                        <ul id="primary-menu" class="nav navbar-nav  acme-normal-page">
                            <li id="menu-item-91"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item menu-item-91">
                                <a href="#" aria-current="page">Home</a></li>
                            <li id="menu-item-89"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89"><a
                                    href="#">About</a></li>
                            <li id="menu-item-87"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87"><a
                                    href="#">Portfolio</a></li>
                            <li id="menu-item-90"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-90"><a
                                    href="#">Blog</a></li>
                            <li id="menu-item-88"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"><a
                                    href="#">Contact</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--.at-beside-navbar-header-->
            </div>
        </div>
        <div class="image-slider-wrapper home-fullscreen full-screen-bg">
            <div class="featured-slider">
                <div class="item"
                    style="background-image:url(images/header.png);background-repeat:no-repeat;background-size:cover;background-position:center;">
                    <div class="slider-content text-left">
                        <div class="container">
                            <div class="banner-title init-animate fadeInDown">Guillaume LE GOFF</div>
                            <div class="image-slider-caption init-animate fadeInDown">
                                <p>Junior Développeur</p>
                            </div>
                            <!--<a href="#" class="init-animate fadeInDown btn btn-primary btn-reverse outline-outward banner-btn">
                                View Portfolio <i class="fa fa-angle-right"></i>
                            </a>-->
                            <a href="cv.pdf" class="init-animate fadeInDown btn btn-primary outline-outward banner-btn"
                                target="blank">
                                Télecharger mon CV<i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--acme slick carousel-->
        </div>
        <!--.image slider wrapper-->
        <aside id="portfolio_web_about-3" class="widget widget_portfolio_web_about">
            <section id="portfolio_web_about-3" class="at-widgets at-feature-about">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 init-animate zoomIn">
                            <div class="at-feature-about-img">
                                <img src="images/logo3.png">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class='at-widget-title-wrapper init-animate zoomIn' style='margin-bottom:10px'>
                                <h2 class="widget-title init-animate zoomIn" style='margin-bottom:20px'><span>A
                                        propos</span></h2>
                                <p class="at-subtitle">Bonjour, je suis développeur web back-end sur Paris.</p>
                            </div>
                            <p class='init-animate zoomIn'>
                                Après avoir été derrière les fourneaux de beaux établissements Parisiens j'ai changé de
                                cap pour faire de <b>l'informatique</b> mon métier de coeur.<br>
                                En tant que développeur back end je réalise des développements orientés serveurs en
                                PHP et MySql, aux sites plus globaux de types vitrine.<br><br>
                                Pour les <b>curieux</b>, allez voir mes projets dans la partie Porfolio en descendant
                                plus bas sur cette page.<br>
                                Pour les plus <b>techniciens</b> je partage mes développements sur mon GitHub
                                ci-dessous.
                            </p>
                            <a href="https://github.com/gui-legoff"
                                class="init-animate zoomIn btn btn-primary btn-reverse" target="blank">
                                GitHub <i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
        <aside id="portfolio_web_skills-3" class="widget widget_portfolio_web_skills">
            <section id="portfolio_web_skills-3" class="at-widgets at-skills   at-parallax"
                style="background-image:url(images/rename1.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed;background-position: center;">
                <div class="container">
                    <div class='at-widget-title-wrapper init-animate zoomIn'>
                        <h2 class="widget-title init-animate zoomIn"><span>Mes Compétences</span></h2>
                    </div>
                    <div class="row featured-entries-col featured-entries-logo">
                        <div class="single-list col-sm-3 col-md-3 init-animate zoomIn">
                            <span class="chart" data-percent="70">
                                <span class="percent">70</span>
                            </span>
                            <h3 class="">
                                <a href="#" class="all-link">PHP</a>
                            </h3>
                            <div class="skills-content">
                            </div>
                        </div>
                        <div class="single-list col-sm-3 col-md-3 init-animate zoomIn">
                            <span class="chart" data-percent="60">
                                <span class="percent">60</span>
                            </span>
                            <h3 class="">
                                <a href="#" class="all-link">MySQL</a>
                            </h3>
                            <div class="skills-content">
                            </div>
                        </div>
                        <div class="single-list col-sm-3 col-md-3 init-animate zoomIn">
                            <span class="chart" data-percent="68">
                                <span class="percent">68</span>
                            </span>
                            <h3 class="">
                                <a href="#" class="all-link"></a>Git
                            </h3>
                            <div class="skills-content">
                            </div>
                        </div>
                        <div class="single-list col-sm-3 col-md-3 init-animate zoomIn">
                            <span class="chart" data-percent="65">
                                <span class="percent">65</span>
                            </span>
                            <h3 class="">
                                <a href="#" class="all-link">Html
                                    &#038; Css</a> </h3>
                            <div class="skills-content">
                            </div>
                        </div>
                    </div>
                    <!--row-->
                </div>
                <!--cointainer-->
            </section>
        </aside>
        <aside id="portfolio_web_service-3" class="widget widget_portfolio_web_service">
            <section id="portfolio_web_service-3" class="at-widgets acme-services  feature at-no-parallax" style="">
                <div class="container">

                    <div class='at-widget-title-wrapper init-animate zoomIn'>
                        <h2 class="widget-title init-animate zoomIn"><span>Mes Services</span></h2>
                    </div>
                    <div class="row featured-entries-col featured-entries-logo">
                        <div class="single-list col-sm-4 col-md-4 column">
                            <div class="single-item init-animate zoomIn">
                                <div class="icon clearfix">
                                    <i class="fa fa-laptop"></i>
                                </div>
                                <h3 class="title">
                                    <a href="#" class="all-link">Site internet</a>
                                </h3>
                                <div class="content">
                                    <div class="details">
                                        <p>Création de site vitrine, sur mesure, en fonctions de vos besoins.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-list col-sm-4 col-md-4 column">
                            <div class="single-item init-animate zoomIn">
                                <div class="icon clearfix">
                                    <i class="fa fa-plus-circle"></i>
                                </div>
                                <h3 class="title">
                                    <a href="#" class="all-link">Ajout de fonctionnabilité a votre site existant</a>
                                </h3>
                                <div class="content">
                                    <div class="details">
                                        <p>En gardant votre site internet, je vous apporte des solutions d'amélioration
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-list col-sm-4 col-md-4 column">
                            <div class="single-item init-animate zoomIn">
                                <div class="icon clearfix">
                                    <i class="fa fa-paint-roller"></i>
                                </div>
                                <h3 class="title">
                                    <a href="#" class="all-link">Refonte graphique</a>
                                </h3>
                                <div class="content">
                                    <div class="details">
                                        <p>Un coup de frais ? un large choix de design est possible !</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row-->
                </div>
                <!--cointainer-->
            </section>
        </aside>
        <aside id="portfolio_web_timeline-3" class="widget widget_portfolio_web_timeline">
            <section id="portfolio_web_timeline-3" class="at-widgets at-timelime tow at-gray-bg">
                <div class="container">
                    <div class='at-widget-title-wrapper init-animate zoomIn'>
                        <h2 class="widget-title init-animate zoomIn"><span>Mon Experience</span></h2>
                    </div>
                    <div class="at-container at-timeline-section">
                        <!-- current experience -->
                        <div class="at-timeline-block current at-odd init-animate zoomIn">
                            <div class="at-timeline-img">
                            </div>
                            <div class="at-timeline-content">
                                <h3>Projet indépendant</h3>
                                <div class="timeline-content">
                                    <p>- Projet  personnel de gestion de mots de passe<br><br>
                                        - Environnement techniques :<br>
                                        - <b>Back-end</b> : Php (POO ET MVC), Mysql, Git<br>
                                        - <b>Front-end</b> : Bootstrap, Jquery, Font awesome, Notify<br>
                                    </p>
                                </div>
                                
                                <span class="at-date">
                                    <strong>Pass manager</strong>
                                    Depuis août 2019
                                    <br><br>
                                    <a href="https://passmanager.fr">https://passmanager.fr</a>
                                </span>
                                <!--.at-date-->
                            </div>
                        </div>
                        <!-- end current experience -->

                        <!-- exp 4 -->
                        <div class="at-timeline-block  at-even init-animate zoomIn">
                            <div class="at-timeline-img">
                            </div> <!-- at-timeline-img -->
                            <div class="at-timeline-content">
                                <h3>Developpeur back-end</h3>
                                <div class="timeline-content">
                                <p>- Conception de modules et override<br>
                                    - Versions de prestashop: 1.5.6 et 1.7<br>
                                    - Environnement techniques : Php (POO et MVC), Mysql, Git, Linux, Readmine <br><br>
                                    </p>
                                </div>
                                
                                <span class="at-date">
                                    <strong>Agence web spécialisé Prestashop</strong>Avril - Mai 2019</span>
                                <!--.at-date-->
                            </div> <!-- at-timeline-content -->
                        </div>
                        <!-- end exp 4 -->

                        <!-- exp 3 -->
                        <div class="at-timeline-block  at-odd init-animate zoomIn">
                            <div class="at-timeline-img">
                            </div>
                            <div class="at-timeline-content">
                                <h3>Developpeur back-end</h3>
                                <div class="timeline-content">
                                    <p>- Analyse des besoins et participations aux différents choix techniques<br>
                                        - Correctif / optimisation et concevoir de nouvelles fonctionnalités sur les
                                        sites Web<br>
                                        - Environnement techniques : Php (natif), Mysql, Git <br><br>
                                        - Relations clients <br>
                                        - Rédaction de cahier des charges et de recettes <br>
                                        - Tester et assurer la mise en production<br>
                                    </p>
                                </div>
                                
                                <span class="at-date">
                                    <strong>The Net Group - Agence web</strong>sept 2018- mars 2019</span>
                                <!--.at-date-->
                            </div>
                        </div>
                        <!-- end exp 3 -->
                        
                        <!-- exp 2 -->
                        <div class="at-timeline-block  at-even init-animate zoomIn">
                            <div class="at-timeline-img">
                            </div> <!-- at-timeline-img -->
                            <div class="at-timeline-content">
                                <h3>Stagiaire Wordpress - webmaster junior</h3>
                                <div class="timeline-content">
                                    <p>En charge de la création des pages du site wordpress avec les différentes
                                        équipes techniques du site
                                        <a href="https://rivegauchemotos.fr">https://rivegauchemotos.fr</a><br>
                                        Community managemer des comptes Facebook et Instagram quotidiennement.
                                    </p>
                                </div>
                                
                                <span class="at-date">
                                    <strong>Rive Gauche Moto - Concessionnaire moto à Paris</strong>juillet 2018</span>
                                <!--.at-date-->
                            </div> <!-- at-timeline-content -->
                        </div>
                        <!-- end exp 2 -->

                        <!-- exp 1 -->
                        <div class="at-timeline-block  at-odd init-animate zoomIn">
                            <div class="at-timeline-img">
                            </div> <!-- at-timeline-img -->
                            <div class="at-timeline-content">
                                <h3>Formation : SAE INSTITUTE PARIS</h3>
                                <div class="timeline-content">
                                    <p>High School Diploma, informatique spécialité web développement<br>
                                        ( équivalent à un bac +2 )</p>
                                </div>
                                
                                <span class="at-date">
                                    <strong>Ecole</strong>2016 – 2018</span>
                                <!--.at-date-->
                            </div> <!-- at-timeline-content -->
                        </div>
                        <!-- end exp 1 -->
                    </div>
                    
                </div>
                <!--.container-->
            </section>
            <!--.at-timelime-->
        </aside>
        <aside id="portfolio_web_gallery-3" class="widget widget_portfolio_web_gallery">
            <section id="portfolio_web_gallery-3" class="at-widgets acme-gallery">
                <div class="full-width-container">
                    <div class='at-widget-title-wrapper'>
                        <h2 class="widget-title init-animate zoomIn"><span>Portfolio</span></h2>
                    </div>
                    <div class="row fullwidth-row">

                        <div class="at-gallery-item  col-sm-3 col-md-3">
                            <div class="gallery-inner-item init-animate zoomIn">
                                <div class="at-bottom-lower">
                                    <h3>
                                        <a href="" class="all-link"
                                            target="blank">Aliena
                                            <p style="font-size:14px">
                                                Site vitrine intégrant des vidéos réalisé sur Adobe After Effects
                                                <br><br>
                                                Langage technique : <br>
                                                Html / CSS / Adobe AE
                                            </p>
                                        </a>
                                    </h3>
                                    <a class="image-gallery-widget" href="images/site_1.jpg">
                                        <i class="fa fa-search gallery-button primary-bg"></i>
                                    </a>
                                </div>
                                <div class="at-gallery-hover"></div>
                                <a href="" class="all-link">
                                    <img src="images/site_1.jpg" alt="Aliena" title="Aliena" />
                                </a>
                            </div>
                        </div>

                        <div class="at-gallery-item  col-sm-3 col-md-3">
                            <div class="gallery-inner-item init-animate zoomIn">
                                <div class="at-bottom-lower">
                                    <h3>
                                        <a href="" class="all-link"
                                            target="blank">
                                            Site de présentation du CMS Nuntium<br><br>
                                            <p style="font-size:14px">
                                                Installer le dès a présent sur votre serveur, suivez les 4 étapes du
                                                configurateur.<br>
                                                Grâce a cet outils téléchargeable vous avez un site déja tous fait.<br>
                                                Vous pouvez modifier tous le contenu de votre site via une simple
                                                interface.<br><br>
                                                Technologie : <br>
                                                Html / CSS - Bootstrap / PHP / MySQL / Structure MVC
                                            </p>
                                        </a>
                                    </h3>
                                    <a class="image-gallery-widget" href="images/nuntium_site.jpg" target="blank">
                                        <i class="fa fa-search gallery-button primary-bg"></i>
                                    </a>
                                </div>
                                <div class="at-gallery-hover"></div>
                                <a href="" class="all-link">
                                    <img src="images/nuntium_site.jpg" alt="nuntium site" title="nuntium site" />
                                </a>
                            </div>
                        </div>

                        <div class="at-gallery-item  col-sm-3 col-md-3">
                            <div class="gallery-inner-item init-animate zoomIn">
                                <div class="at-bottom-lower">
                                    <h3>
                                        <a href="" class="all-link"
                                            target="blank">Itinerantur</a><br><br>
                                        <p style="font-size:14px">
                                            Site vitrine, avec un slider, une galerie d'image et un formulaire de
                                            contact<br><br>
                                            Langage technique : <br>
                                            Html / CSS / Javascript - Jquery
                                        </p>
                                    </h3>
                                    <a class="image-gallery-widget" href="images/site_2.jpg" target="blank">
                                        <i class="fa fa-search gallery-button primary-bg"></i>
                                    </a>
                                </div>
                                <div class="at-gallery-hover"></div>
                                <a href="" class="all-link">
                                    <img src="images/site_2.jpg" alt="itinerantur" title="itinerantur" />
                                </a>
                            </div>
                        </div>

                        <div class="at-gallery-item  col-sm-3 col-md-3">
                            <div class="gallery-inner-item init-animate zoomIn">
                                <div class="at-bottom-lower">
                                    <h3>
                                        <a href="images/site_4.jpg" class="all-link" target="blank">Occurens réseau
                                            social, avec la
                                            possibilité de tchater avec les autres membres<br><br>
                                            <p style="font-size:14px">
                                                Fonctionnalités :<br>
                                                - Inscription au réseau<br>
                                                - Notifications lorque l'on reçoit un message<br>
                                                - Système de like entre membres<br>
                                                - Conversation entre 2 membres<br>
                                                - Système de notifications<br>
                                                <br>
                                                Langage technique : <br>
                                                Html / CSS - Font awesome / Javascript - Jquery / Php / MySQL /
                                                Structure
                                                MVC
                                            </p>
                                        </a>
                                    </h3>
                                    <a class="image-gallery-widget" href="images/site_4.jpg" target="blank">
                                        <i class="fa fa-search gallery-button primary-bg"></i>
                                    </a>
                                </div>
                                <div class="at-gallery-hover"></div>
                                <a href="images/site_4.jpg" class="all-link">
                                    <img src="images/site_4.jpg" alt="Occurens" title="Occurens" />
                                </a>
                            </div>
                        </div>

                        <div class="at-gallery-item  col-sm-3 col-md-3">
                            <div class="gallery-inner-item init-animate zoomIn">
                                <div class="at-bottom-lower">
                                    <h3>
                                        <a href="images/nuntium_admin.jpg" class="all-link" target="blank">
                                            Nuntium administration<br><br>
                                            <p style="font-size:14px">
                                                Mocup de présentation de l'outils d'administration de votre futur site
                                                internet.<br>
                                                Une interface simple et lisible pour modifier le contenu de votre site
                                                en quelque clics.<br><br>
                                                Télécharger-le et rejoingez l'aventure !
                                            </p>
                                        </a>
                                    </h3>
                                    <a class="image-gallery-widget" href="images/nuntium_admin.jpg" target="blank">
                                        <i class="fa fa-search gallery-button primary-bg"></i>
                                    </a>
                                </div>
                                <div class="at-gallery-hover"></div>
                                <a href="images/nuntium_admin.jpg" class="all-link">
                                    <img src="images/nuntium_admin.jpg" alt="Nuntium admin" title="Nuntium admin" />
                                </a>
                            </div>
                        </div>

                        <div class="at-gallery-item  col-sm-3 col-md-3">
                            <div class="gallery-inner-item init-animate zoomIn">
                                <div class="at-bottom-lower">
                                    <h3>
                                        <a href="images/logo1.jpg" class="all-link" target="blank">
                                            Logo deuxième refonte graphique<br><br>
                                            <p style="font-size:14px">
                                                Incrustation de type mocup pour une utilisation de type flyer, carte de
                                                visite ou autre ...<br><br>
                                                Outils techniques : Photoshop, Illustrator
                                            </p>
                                        </a>
                                    </h3>
                                    <a class="image-gallery-widget" href="images/logo1.jpg" target="blank">
                                        <i class="fa fa-search gallery-button primary-bg"></i>
                                    </a>
                                </div>
                                <div class="at-gallery-hover"></div>
                                <a href="images/logo1.jpg" class="all-link">
                                    <img src="images/logo1.jpg" alt="Logo version 2" title="Logo version 2" />
                                </a>
                            </div>
                        </div>

                        <div class="at-gallery-item  col-sm-3 col-md-3">
                            <div class="gallery-inner-item init-animate zoomIn">
                                <div class="at-bottom-lower">
                                    <h3>
                                        <a href="images/site_3.jpg" class="all-link" target="blank">
                                            Prophety<br><br>
                                            <p style="font-size:14px">
                                                Maquette de site vitrine réalisée pour un projet scolaire<br>
                                                Projet concept-cars onyx Peugeot<br><br>
                                                Langage technique : Html, Css
                                            </p>
                                        </a>
                                    </h3>
                                    <a class="image-gallery-widget" href="images/site_3.jpg" target="blank">
                                        <i class="fa fa-search gallery-button primary-bg"></i>
                                    </a>
                                </div>
                                <div class="at-gallery-hover"></div>
                                <a href="images/site_3.jpg" class="all-link">
                                    <img src="images/site_3.jpg" alt="prophety" title="prophety" />
                                </a>
                            </div>
                        </div>

                        <div class="at-gallery-item  col-sm-3 col-md-3">
                            <div class="gallery-inner-item init-animate zoomIn">
                                <div class="at-bottom-lower">
                                    <h3>
                                        <a href="https://www.youtube.com/watch?v=6JjY-tcI0fE" class="all-link"
                                            target="blank">
                                            Massel GFX<br><br>
                                            <p style="font-size:14px">
                                                Illustration réalisée sur Photoshop en 2012 sur la base d'un icone
                                                2D.<br>
                                                Reçu 2ème au concours organisé par l'auteur.<br><br>
                                                Vidéo accéléré disponible sur mon Youtube
                                                <i class="fab fa-youtube"></i>
                                            </p>
                                        </a>
                                    </h3>
                                    <a class="image-gallery-widget" href="images/image_2.jpg" target="blank">
                                        <i class="fa fa-search gallery-button primary-bg"></i>
                                    </a>
                                </div>
                                <div class="at-gallery-hover"></div>
                                <a href="https://www.youtube.com/watch?v=6JjY-tcI0fE" class="all-link">
                                    <img src="images/image_2.jpg" alt="Massel GFX" title="Massel GFX" />
                                </a>
                            </div>
                        </div>

                        <div class="at-gallery-item  col-sm-3 col-md-3">
                            <div class="gallery-inner-item init-animate zoomIn">
                                <div class="at-bottom-lower">
                                    <h3>
                                        <a href="https://www.youtube.com/watch?v=39H985ArWnw" class="all-link"
                                            target="blank">
                                            The strange man<br><br>
                                            <p style="font-size:14px">
                                                Illustration abstraite réalisée sur Photoshop en 2012<br><br>
                                                Vidéo accélérer disponible sur mon Youtube
                                                <i class="fab fa-youtube"></i>
                                            </p>
                                        </a>
                                    </h3>
                                    <a class="image-gallery-widget" href="images/image_3.jpg" target="blank">
                                        <i class="fa fa-search gallery-button primary-bg"></i>
                                    </a>
                                </div>
                                <div class="at-gallery-hover"></div>
                                <a href="https://www.youtube.com/watch?v=39H985ArWnw" class="all-link">
                                    <img src="images/image_3.jpg" alt="The strange man" title="The strange man" />
                                </a>
                            </div>
                        </div>

                    </div>
                    <!--row-->
                </div>
            </section>
        </aside>

        <div class='clearfix'></div>
        <aside id="portfolio_web_contact-3" class="widget widget_portfolio_web_contact">
            <section id="portfolio_web_contact-3" class="at-widgets at-timelime tow at-gray-bg">
                <div class="contact-form-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class='at-widget-title-wrapper init-animate zoomIn'>
                                <h2 class="widget-title init-animate zoomIn"><span>Contactez-moi</span></h2>
                            </div>
                            <div class="col-md-5  init-animate zoomIn">
                                <div class="contact-page-content">
                                    <div id="pl-94" class="panel-layout">
                                        <div id="pg-94-0" class="panel-grid panel-no-style">
                                            <div id="pgc-94-0-0" class="panel-grid-cell">
                                                <div id="panel-94-0-0-0"
                                                    class="widget_text so-panel widget widget_custom_html panel-first-child panel-last-child"
                                                    data-index="0">
                                                    <div class="textwidget custom-html-widget">
                                                        <div class="contact-info">
                                                            <ul>
                                                                <li>
                                                                    <strong><i class="fas fa-at"></i> Adresse
                                                                        Email</strong>
                                                                    <a href="#">guillaumelegoffmail@gmail.com</a></li>
                                                                <li>
                                                                    <strong><i class="fas fa-phone"></i> Numéro de
                                                                        télephone</strong>
                                                                    07 60 10 01 86</li>
                                                                <li>
                                                                    <strong><i class="fas fa-map-marker-alt"></i>
                                                                        Localisation </strong>
                                                                    Paris 15ème
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.linkedin.com/in/guillaume-le-goff/"
                                                                        class="btn btn-primary btn-reverse white"
                                                                        target="blank">
                                                                        Linkedin
                                                                        <i class="fab fa-linkedin"></i>
                                                                    </a>
                                                                    <a href="https://github.com/gui-legoff"
                                                                        class="btn btn-primary btn-reverse white"
                                                                        target="blank">
                                                                        GitHub
                                                                        <i class="fab fa-github"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 init-animate zoomIn">
                                <div class="contact-form">
                                    <div role="form" class="wpcf7">
                                        <div class="screen-reader-response"></div>
                                        <form method="post" class="wpcf7-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Votre Nom (obligatoire)<br />
                                                        <span class="wpcf7-form-control-wrap votre-name">
                                                            <input type="text" name="nom" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false" /></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label> Votre Email (obligatoire)<br />
                                                        <span class="wpcf7-form-control-wrap votre-email"><input
                                                                type="email" name="mail" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                aria-required="true" aria-invalid="false" /></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>Objet<br />
                                                        <span class="wpcf7-form-control-wrap votre-objet"><input
                                                                type="text" name="objet" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text"
                                                                aria-invalid="false" /></span> </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>Votre Message<br />
                                                        <span class="wpcf7-form-control-wrap votre-message"><textarea
                                                                name="text" cols="40" rows="10"
                                                                class="wpcf7-form-control wpcf7-textarea"
                                                                aria-invalid="false"
                                                                style="min-width: 100%;max-width: 100%;"></textarea></span>
                                                    </label>
                                                </div>

                                                <div class="col-md-12">
                                                    <?php
                                                        require_once "php/mail.php";
                                                        echo "<p style='color:green'>$sResponseMail</p>";
                                                        echo "<p style='color:red'>$sErrorMail</p>";        
                                                    ?>
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <input type="submit" value="Envoyer"
                                                        class="wpcf7-form-control wpcf7-submit" />
                                                </div>

                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </aside>

        <div class="clearfix"></div>
    </div>



    <!-- Modal -->
    <div id="at-shortcode-bootstrap-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking Table</h4>
                </div>
            </div>
            <!--.modal-content-->
        </div>
    </div>
    <!--#at-shortcode-bootstrap-modal-->

    <!-- Script JS -->
    <?php 
        // Générateur de script JS
        $scanjs=scandir("js/");
        foreach ($scanjs as $js) {
            if($js!="." AND $js!=".." AND $js!="jquery.js" AND $js!="portfolio-web-custom.js"){
                echo '<script src="js/'.$js.'"></script>';
            }
        }
        // Fin du générateur de script JS
    ?>

    <script type='text/javascript' src='js/portfolio-web-custom.js?ver=1.0.5'></script>

    <!-- end Script JS -->
</body>

</html>