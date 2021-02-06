    <?php if(!empty($aUserAccounts)){ ?>
    <!-- SEARCH BAR -->
    <div id="search_content" class="p-t-10">
        <div class="float-l" id="search_div">
            <form class="navbar-form navbar-left width100" method="post">
                <div class="input-group width100">
                    <input type="text" class="form-control" id="search" placeholder="Nom du site..." name="keyword"
                        value="<?php if(isset($search)){echo $search;}?>">
                    <span class="input-group-btn">
                        <button type="submit" class="btn border0 bg-orange color-white" id="btn_search">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <a class="btn float-r m-r-30 p-t-10 p-b-10 border0 bg-orange" href="#popupAdd" title="ajouter" id="popup_Add">
            <i class="fas fa-plus color-white"></i><span class="color-white">Ajouter un site</span>
        </a>
        <div style="clear:both"></div>

        <ul>
            <?php
            if(!empty($accountSearchBar)){
                foreach ($accountSearchBar as $key => $v) {
            ?>
            <li class="vignette">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title float-l"><?= $v['name'] ?></h3>
                        <div>
                            <a href="?delete=<?= $v['id']; ?>#delete_<?= $v['id']; ?>" style="color:black">
                                <i class="lnr lnr-trash float-r iVignette"
                                    style="font-size:17px;cursor:pointer"></i>
                            </a>
                            <a href="?show=<?= $v['id']; ?>#show_<?= $v['id']; ?>" style="color:black">
                                <i class="lnr lnr-pencil float-r iVignette"
                                    style="font-size:17px;cursor:pointer"></i>
                            </a>
                        </div>
                        <img src="media/img/vignette/<?= $v['image'] ?>" alt="<?= $v['name'] ?>" class="vgn_img">
                    </div>
                    <div class="panel-body" style="display: block;">
                        <p><i class="fas fa-user"></i><?= $v['login'] ?></p>
                        <p>
                            <span><i class="fas fa-lock float-l"></i></span>
                            <input type="password" class="form-control password float-l" id="pwd_<?= $v['id'] ?>"
                                onclick="copyToClipboard('#pwd_<?= $v['id'] ?>')" value="<?= $v['pass']; ?>"
                                style="width:70%;padding:0;height:auto">
                            <button type="button" class="btn btn-secondary toggle-password"
                                toggle="#password-field">
                                <i class="fa fa-eye-slash" style="margin:0"></i>
                            </button>
                            <div style="clear:both"></div>
                        </p>
                            <!-- notes -->
                        <?php if(!empty($v['notes'])){ ?>
                            <p><i class='far fa-sticky-note'></i>
                            <?= CutString($v['notes'],20); ?>
                            </p>
                        <?php }; ?>
                        <!-- lien -->
                        <?php if(!empty($v['link'])){ ?>
                            <p><i class='fas fa-link'></i><a href='<?= $v['link'] ?>' target='_blank'>
                            <?= CutString($v['link'],20); ?>
                            </a></p>
                        <?php }; ?>
                    </div>
                </div>
            </li>
            <?php
                }
            }
            ?>
        </ul>
        <div style="clear:both"></div>
    </div>
    <!-- END SEARCH BAR -->
    <?php } ?>

    <!-- LIST ACCOUNTS -->
    <?php if(!empty($aUserAccounts)){ ?>
        <ul class="p-l-30 p-r-30">
            <?php
                foreach ($aUserAccounts as $key => $v) { ?>
                    <li class="vignette m-b-0 m-l-10 m-r-10 m-t-25">
                        <a href="?show=<?= $v['id']; ?>#show_<?= $v['id']; ?>" style="color:black">
                            <div class="panel p-b-0 m-b-0 m-t-0">
                                <div class="panel-heading">
                                    <!-- <h3 class="panel-title float-l"><?= $v['name'] ?></h3> -->
                                    <div>
                                        <!--
                                        <a href="?delete=<?= $v['id']; ?>#delete_<?= $v['id']; ?>" style="color:black">
                                            <i class="lnr lnr-trash float-r iVignette"></i>
                                        </a>
                                        <a href="?update=<?= $v['id']; ?>#update_<?= $v['id']; ?>" style="color:black">
                                            <i class="lnr lnr-pencil float-r iVignette"></i>
                                        </a>
                                        -->
                                    </div>
                                    <div class="vignette-default" style="background: no-repeat center/100% url('media/img/vignette/<?= $v['image'] ?>')">
                                    <?php if ($v['image'] == 'vignette-default.png') { ?>
                                        <h3 class="t-align-center"><?= $v['name'] ?></h3>
                                    <?php } ?>    
                                    </div>
                                </div>
                                <!--
                                <div class="panel-body" style="display: block;">
                                
                                    <p><i class="fas fa-user"></i><?= $v['login'] ?></p>
                                    <p>
                                        <i class="fas fa-lock float-l"></i>
                                        <input type="password" class="form-control password float-l" id="pwd_<?= $v['id'] ?>"
                                            onclick="copyToClipboard('#pwd_<?= $v['id'] ?>')" value="<?= $v['pass']; ?>"
                                            style="width:55%;padding:0;height:auto;margin-right:10px">
                                        <button type="button" class="btn btn-secondary toggle-password" toggle="#password-field">
                                            <i class="fa fa-eye-slash" style="margin:0"></i>
                                        </button>
                                        <p style="clear:both"></p>
                                    </p>
                                    <?php if(!empty($v['notes'])){ ?>
                                        <p><i class='far fa-sticky-note'></i>
                                        <?= CutString($v['notes'],20); ?>
                                        </p>
                                    <?php }; ?>
                                    <?php if(!empty($v['link'])){ ?>
                                        <p><i class='fas fa-link'></i><a href='<?= $v['link'] ?>' target='_blank'>
                                        <?= CutString($v['link'],20); ?>
                                        </a></p>
                                    <?php }; ?>
                                </div>
                                -->
                            </div>
                        </a>
                    </li>
                <?php } 
            ?>
            <div style="clear:both"></div>
        </ul>
    <?php
    // END LIST ACCOUNTS 
    }else{ 
    ?>
    <div class="auth-box lockscreen clearfix" id="statistiques">
        <div class="content">
            <a href="#popupAdd">

                <i class="far fa-plus-square text-center" style="font-size:170px;display:block"></i>
            </a>
            <h4 class="text-center" style="margin:55px 0 20px 0">Commencer à ajouter votre premier site </h4>
        </div>
    </div>
    <?php 
        }
    ?>

    <!-- POPUP ADD WEBSITE-->
    <div id="popupAdd" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="panel-body">
                    <form method="post">
                        <h2>Ajouter un site</h2><br>

                        <label for="link"><i class="far fa-file"></i>Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>" required><br>

                        <label for="login"><i class="far fa-user"></i>Identifiant</label>
                        <input type="text" class="form-control" id="login" name="login" value="<?= $login ?>"
                            required><br>

                        <label for="pass"><i class="fas fa-key"></i>Mot de passe</label>
                        <input type="password" class="form-control" id="pass" name="pass" value="<?= $pass ?>"
                            required><br>

                        <label for="link"><i class="fas fa-link"></i>Lien</label>
                        <input type="text" class="form-control" id="link" name="link" value="<?= $link ?>"><br>

                        <label for="notes"><i class="far fa-sticky-note"></i>Notes suplémentaires :</label>
                        <textarea class="form-control" placeholder="Ces notes ne sont pas obligatoires" rows="4"
                            id="notes" name="notes"><?= $notes ?></textarea><br>

                        <input class="btn btn-primary" style="float:right" type="submit" value="Enregistrer"
                            name="addWebsite">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End POPUP ADD WEBSITE -->


    <!-- POPUP DELETE WEBSITE -->
    <div id="delete_<?= $idVignette; ?>" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="panel-body">
                    <form method="post">
                        <h2>Etes vous sur de supprimer ?</h2><br>
                        <p><i class="far fa-trash-alt"></i>Le site sera temporairement placé dans votre <a
                                href="./corbeille.php">corbeille</a></p>
                        <input type="hidden" name="id" value="">
                        <input class="btn btn-primary" style="float:right" type="submit" value="Oui"
                            name="deleteVignette">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End POPUP DELETE WEBSITE -->


    <!-- POPUP UPDATE WEBSITE -->
    <div id="show_<?= $idVignette; ?>" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="panel-body">
                    <form method="post">
                        <h2>Mettre a jour le site</h2><br>

                        <label for="link"><i class="far fa-file"></i>Nom</label>
                        <input type="text" class="form-control" id="link" name="name" value="<?= $upName ?>"
                            required><br>

                        <label for="login"><i class="far fa-user"></i>Identifiant</label>
                        <input type="text" class="form-control" id="login" name="login" value="<?= $upLogin ?>"
                            required><br>

                        <label for="pass"><i class="fas fa-key"></i>Mot de passe</label>
                        <input type="text" class="form-control" id="pass" name="pass" value="<?= $upPass ?>"
                            required><br>

                        <label for="link"><i class="fas fa-link"></i>Lien</label>
                        <input type="text" class="form-control" id="link" name="link" value="<?= $upLink ?>"><br>

                        <label for="notes"><i class="far fa-sticky-note"></i>Notes suplémentaires :</label>
                        <textarea class="form-control" rows="4" id="notes" name="notes"><?= $upNotes ?></textarea><br>

                        <input type="hidden" name="id" value="<?= $idVignette ?>">

                        <input class="btn btn-primary" style="float:right" type="submit" value="Mettre a jour"
                            name="updateWebsite">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End POPUP UPDATE WEBSITE -->