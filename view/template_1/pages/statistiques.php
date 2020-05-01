    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <div style="float:left">
                <h1 class="m-t-0">Statistiques de votre compte</h1>
            </div>
            <div style="clear:both"></div>    
            <p class="panel-subtitle">Vous retrouverez ici, différents test effectués sur vos mots de passe</p>
        </div>
    </div>
    <!-- END OVERVIEW -->

    <!-- VIDE -->
    <?php if(empty($aAccounts)){ ?>
        <div class="auth-box lockscreen clearfix" id="statistiques">
            <div class="content">
                <i class="far fa-clock text-center" style="font-size:170px;display:block"></i>
                <h4 class="text-center" style="margin:55px 0">Vous n'avez pas de mot de passe a analyser pour le moment</h4>
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
    
    <!-- LIST OF ACCOUNTS -->
        <?php }else{ ?>
            <div class="contain">
                <div style="float:left">
                    <h4 style="margin-top:0"><i class="far fa-chart-bar" style="margin-right:8px;font-size:30px"></i>Nombre de sites analysés : <b><?= $nbPass ?></b></h4>
                </div>
                <div style="clear:both"></div>
                <div style="float:left">
                    <h4 style="margin-top:0"><i class="far fa-angry" style="margin-right:8px;font-size:30px"></i>Mot de passe le plus récurent : <b><?= $referPass ?></b></h4>
                </div>
                <div style="clear:both"></div>
            </div>

            <div class="contain">
                <div class="row">
                    <div class="col-md-6">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                                <div class="panel-heading" style="padding-bottom: 0">
                                    <div style="float:left">
                                        <h4 style="margin-top:0"><i class="far fa-dizzy" style="margin-right:8px;font-size:30px"></i>Mot de passe <b>identique</b> :</h4>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr><th>#</th><th>NOM</th><th>MOT DE PASSE</th></tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($aAccounts['identique'] as $k => $v) { ?>
                                                <tr><td>-</td><td><?= $v['name'] ?></td><td><?= $v['pass'] ?></td></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <!-- END BASIC TABLE -->
                    </div>
                    <div class="col-md-6">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading" style="padding-bottom: 0">
                                <div style="float:left">
                                    <h4 style="margin-top:0"><i class="far fa-grin-wink" style="margin-right:8px;font-size:30px"></i>Mot de passe <b>différent</b></h4>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr><th>#</th><th>NOM</th><th>MOT DE PASSE</th></tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($aAccounts['dif'] as $k => $v) { ?>
                                            <tr><td>-</td><td><?= $v['name'] ?></td><td><?= $v['pass'] ?></td></tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC TABLE -->
                    </div>  
                </div>
            </div>
        <?php } ?>
    <!-- END LIST OF ACCOUNTS -->