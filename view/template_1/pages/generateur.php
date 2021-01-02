    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <div style="float:left">
                <h1 class="m-t-0">Générateur de mots de passe</h1>
            </div>
            <div style="clear:both"></div>
            <p class="panel-subtitle">Vous pouvez générer un mot de passe aléatoir avec plusieurs choix possible :
                majuscules, chiffres, caractères spéciaux ...</p>
        </div>
    </div>
    <!-- END OVERVIEW -->

    <div class="contain">
        <div class="row">
            <!-- LEFT BLOCK -->
            <div class="col-md-6">
                <div class="panel">
                    <form method="post">
                        <div class="panel-heading">
                            <h3 class="panel-title" id="h3">Quels types de caractères voulez-vous intégrer à votre mot de passe
                                :</h3>
                        </div>
                        <div class="panel-body">
                            <label class="fancy-radio">
                                <input name="minuscules" type="checkbox" checked>
                                <span style="font-size:16px"><i></i>Lettres minuscules</span>
                            </label>

                            <label class="fancy-radio">
                                <input name="majuscules" type="checkbox" checked>
                                <span style="font-size:16px"><i></i>Lettres majuscules</span>
                            </label>
                            <label class="fancy-radio">
                                <input name="chiffres" type="checkbox" checked>
                                <span style="font-size:16px"><i></i>Chiffres</span>
                            </label>
                            <label class="fancy-radio">
                                <input name="caracteresspeciaux" type="checkbox" checked>
                                <span style="font-size:16px"><i></i>Caractères speciaux</span>
                            </label>
                            <div class="panel-heading" style="padding-left:0">
                                <h3 class="panel-title float-l" style="margin-right:15px;margin-bottom:15px">Combien de caractères aura le mot de
                                    passe ?</h3>
                                <select name="longueur" id="longueur">
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10" selected="selected">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Générer !" class="btn btn-primary" id="btn_gen">
                            </div>
                    </form>
                    <hr>
                    <em>Pour information : il y a exactement 83 caractères disponibles si vous
                        sélectionnez toutes les options.<br>
                        Si vous choississez de mettre n caractères dans votre mot de passe, il
                        y aura alors 83^n possibilités de mots de passe.<br>
                        Par exemple pour n = 10, cela fait en tout... 15516041187205853449
                        possibilités.
                    </em>
                </div>
            </div>
        </div>
        <!-- END LEFT BLOCK -->

        <!-- RIGHT BLOCK -->
        <?php if(!empty($motdepasse)){ ?>
        <div class="col-md-6">
            <div class="panel">

                    <div class="contain">
                        <div style="float:left">
                            <h4 style="margin-top:0">
                                <i class="fas fa-lock" style="margin-right:10px;font-size:30px"></i>Mot de passe généré
                                :
                                <button id="btn" onclick="copyToClipboard('#btn')" class="btn btn-success update-pro"><?= $motdepasse ?></button>
                            </h4>
                        </div>
                        <div style="clear:both"></div>
                    </div>
              
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- END RIGHT BLOCK -->
    </div>