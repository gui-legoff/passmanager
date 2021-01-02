    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <div style="float:left">
                <h1 class="m-t-0">Corbeille</h1>
                <p class="panel-subtitle">Liste de vos comptes supprimés</p>
            </div>
            <?php if(!empty($aUserAccounts)){ ?>
               <a class="btn btn-primary update-pro float-r" href="corbeille#deleteAllVignette"
                title="ajouter"><i class="fas fa-trash-alt"></i></i> <span>Tout supprimer</span>
                </a> 
            <?php } ?>
            
            <div style="clear:both"></div>
        </div>
    </div>
    <!-- END OVERVIEW -->
    
    <!-- VIDE -->
    <?php
        if(empty($aUserAccounts)){ ?>
        <div class="auth-box lockscreen clearfix" id="statistiques">
            <div class="content">
                <i class="far fa-trash-alt text-center" style="font-size:170px;display:block"></i>
                <h4 class="text-center" style="margin:55px 0">Votre corbeille est vide</h4>
                <div class="user text-center">
                    <button type="button" class="btn btn-primary">
                        <a href="./" style="color:white;font-size:18px">
                        Accueil<i class="fas fa-running" style="margin-left:10px"></i><i class="fas fa-door-open"></i>
                    </a>
                </button>
                </div>
            </div>
        </div>
    <!-- END VIDE -->

    <ul>
    <!-- LIST ACCOUNTS -->
    <?php
        }else{
            foreach ($aUserAccounts as $key => $v) { ?>
            <li class="vignette">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title float-l"><?= $v['name'] ?></h3>
                        <div>
                            <a href="corbeille&delete=<?= $v['id']; ?>#delete_<?= $v['id']; ?>" style="color:black">
                                <i class="lnr lnr-cross float-r iVignette"></i>
                            </a>
                            <a href="corbeille&rescue=<?= $v['id']; ?>#rescue_<?= $v['id']; ?>" style="color:black">
                                <i class="lnr lnr-magic-wand float-r iVignette"></i>
                            </a>

                            
                        </div>
                        <img src="media/img/vignette/<?= $v['image'] ?>" alt="<?= $v['name'] ?>" class="vgn_img">
                    </div>
                    <div class="panel-body" style="display: block;">
                        <p><i class="fas fa-user"></i><?= $v['login'] ?></p>
                        <p><i class="fas fa-lock"></i><input class="password" type="password" value="<?= $v['pass'] ?>" disabled></p>
                        
                        <?php if(!empty($v['notes'])){ ?>
                            <p><i class="far fa-lightbulb"></i><?= $v['notes'] ?></p>
                        <?php }; ?>
                        <?php if(!empty($v['link'])){ ?>
                            <p><i class="fas fa-link"></i><a href="<?= $v['link'] ?> " target="_blank"><?= $v['link'] ?></a></p>
                        <?php }; ?>
                        
                    </div>
                </div>
            </li>
            <?php
            }
        }    
    ?>
    </ul>
    <!-- END LIST ACCOUNTS  -->

    <!-- POPUP DELETE VIGNETTE -->        
    <div id="delete_<?= $idVignette; ?>" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="panel-body">
                    <form method="post">
                        <h2>Etes vous sur de le supprimer définitivement ?</h2><br>
                        <p><i class="far fa-trash-alt"></i>Cette action sera irréversible</p>
                        <input class="btn btn-primary" style="float:right" type="submit" value="Supprimer" name="deleteVignette">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End POPUP DELETE VIGNETTE -->

    <!-- POPUP RESCUE VIGNETTE -->        
    <div id="rescue_<?= $idVignette; ?>" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="panel-body">
                    <form method="post">
                        <h2>Etes vous sur de récuperer ce site ?</h2><br>
                        <p>Vous pourez le retrouver dans votre <a href="./">tableau de bord</a></p>
                        <input class="btn btn-primary" style="float:right" type="submit" value="Récuperer" name="rescueVignette">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End POPUP RESCUE VIGNETTE -->   

     <!-- POPUP DELETE ALL VIGNETTE -->        
    <div id="deleteAllVignette" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="panel-body">
                    <form method="post">
                        <h2>Etes vous sur de tous supprimer ?</h2><br>
                        <p><i class="far fa-trash-alt"></i>Cette action sera irréversible attention !</p>
                        <input class="btn btn-primary" style="float:right" type="submit" value="Tous supprimer" name="deleteAllVignette">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End POPUP DELETE ALL 
    VIGNETTE -->       