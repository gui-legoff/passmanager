    <!-- OVERVIEW -->
    <div class="panel panel-headline" style="margin:0 1%">
        <div class="panel-heading">
            <div style="float:left">
                <h1>Mon profil</h1>
            </div>
            <div style="clear:both"></div>
            <p class="panel-subtitle">Vous pouvez ici modifier et avoir accès a informations personnelles</p>
        </div>
    </div>
    <!-- END OVERVIEW -->

    <!-- MAIN CONTENT -->
    <div class="container-fluid">
        <!-- PROFILE DETAIL -->
        <div class="row">
            <div class="col-md-5" style="margin-top:15px" id="panel">
                <!-- INPUTS -->
                <div class="panel">
                    <form method="post" enctype="multipart/form-data">

                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main"
                                style="background-image: url('media/img/background_profile.jpg');">
                                <img src="<?= $imageProfil ?>" class="img-circle" alt="Avatar" style="width:120px;height:120px;object-fit: cover">
                                <h3 class="name"><?= $aUserData['pseudo'] ?></h3>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->


                        <div class="profile-detail">
                            <div class="profile-info" style="margin-bottom: 10px;">
                                <h3 class="heading">Informations :</h3>
                                <hr>
                                <p class="panel-subtitle">Identifiant</p>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" placeholder="<?= $aUserData['login'] ?>" type="text" name="login">
                                </div>
                                <br>
                                <p class="panel-subtitle">Nouveau mot de passe maitre</p>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                    <input class="form-control" type="password" name="password" placeholder="************">
                                </div>
                                <br>
                                <p class="panel-subtitle">Image de profil</p>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="far fa-image"></i></span>
                                    <input type="file" class="form-control" name="image" style="height: auto"/>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Enregistrer" style="margin: 35px auto 0 auto;display: block">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END INPUTS -->
            </div>
        </div>
        <!-- END PROFILE DETAIL -->
    </div>
    <!-- END MAIN CONTENT -->
  