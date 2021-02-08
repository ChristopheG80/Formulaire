<?php
include('utils/countries.php');
include('utils/exams.php');
?>
<div class="container-fluid text-center">
<?php
//var_dump($email);
if(isset($errors)){
    ?>
    <div class="col-12"><?=$errors;?></div>
    
    <?php
}
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">
        Inscription
    </button>
    <form id="modalform" method="POST" action="index.php">
        <!-- Première modale -->
        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vos coordonnées</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="lastname" class="col-6">Nom : </label><input type="text" name="lastname" id="lastname" class="col-6 largeur error-register" value="<?=(isset($lastname))?$lastname:'';?>"/>
                        <label for="firstname" class="col-6">Prénom : </label><input type="text" name="firstname" id="firstname" class="col-6 success-register"  value="<?=(isset($firstname))?$firstname:'';?>"/>
                        <label for="street" class="col-6">Adresse :</label><input type="text" name="street" id="street" class="col-6"  value="<?=(isset($street))?$street:'';?>"/>
                        <label for="zipcode" class="col-6">Code Postal :</label><input type="text" name="zipcode" id="zipcode" class="col-6" value="<?=(isset($zipcode))?$zipcode:'';?>"/>
                        <label for="town" class="col-6">Ville : </label><input type="text" name="town" id="town" class="col-6" value="<?=(isset($town))?$town:'';?>"/>
                        <label for="phoneNumber" class="col-6">Téléphone : </label><input type="text" name="phoneNumber" id="phoneNumber" placeholder="+33712345678" class="col-6" value="<?=(isset($phoneNumber))?$phoneNumber:'';?>" />
                        <label for="email" class="col-6">Email : </label><input type="email" name="email" id="email" class="col-6" value="<?=(isset($email))?$email:'';?>" />

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2" data-dismiss="modal" id="forward1">></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Deuxième modale -->
        <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vos infos perso</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="birthdate" class="col-6 text-center">Date de naissance : </label><input type="date" name="birthdate" id="birthdate" class="col-6" value="<?=(isset($birthdate))?$birthdate:'';?>" />
                        <label for="countryBirth" class="col-6">Pays de naissance : </label>
                        <select id="countryBirth" name="countryBirth" id="countryBirth" class="largeur">
                            <?php
                            echo '<optgroup label="Choisir un pays">';
                            $flagCountry = false;
                            foreach ($countries_en as &$value) {
                                $sel = '';
                                if (isset($_POST['countryBirth']) && $value == $_POST['countryBirth']) {
                                    $sel = 'selected';
                                    $flagCountry = true;
                                }
                                if (!$flagCountry && $value == 'France') {
                                    $sel = 'selected';
                                }
                                echo '<option value="' . $value . '"' . $sel . '>' . $value . '</option>';
                            }
                            ?>
                        </select>
                        <label for="nationality" class="col-6">Nationalité :</label><input type="text" name="nationality" id="nationality" class="col-6" value="<?=(isset($nationality))?$nationality:'';?>" />
                        <label for="diploma" class="col-6">Diplôme </label>
                        <select id="diploma" name="diploma" size="0">
                            <?php
                            foreach ($diploma_fr as $value) {
                                $sel = '';
                                if (isset($_POST['diploma']) && $value == $_POST['diploma']) {
                                    $sel = 'selected';
                                }
                                echo '<option value="' . $value . '"' . $sel . '>' . $value . '</option>';
                            }
                            ?>
                        </select>
                        <label for="poleEmploi" class="col-6">Numéro Pôle Emploi : </label><input type="text" maxlength="8" name="poleEmploi" id="poleEmploi" class="col-6" value="<?=(isset($poleEmploi))?$poleEmploi:'';?>" />
                        <label for="badge" class="col-6">Badge : </label><input type="text" maxlength="5" name="badge" id="badge" class="col-6" value="<?=(isset($badge))?$badge:'';?>" />
                        <label for="linkCodecademy" class="col-6">Lien Codecademy : </label><input type="url" name="linkCodecademy" id="linkCodecademy" class="col-6" value="<?=(isset($linkCodecademy))?$linkCodecademy:'';?>" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1" data-dismiss="modal"><</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal3" data-dismiss="modal" id="forward2">></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Troizième modale -->
        <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vos expériences</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12"><label for="textHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label></div>
                        <div class="col-12"><textarea cols="50" rows="5" id="textHero" name="textHero"><?=(isset($_POST['textHero'])) ? showString($textHero) : '';?></textarea></div>
                        <div class="col-12"><label for="textHacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label></div>
                        <div class="col-12"><textarea cols="50" rows="5" id="textHacks" name="textHacks"><?=(isset($_POST['textHacks'])) ?  showString($textHacks) : ''; ?></textarea></div>
                        <div class="col-12"><label for="textExp">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label></div>
                        <div class="col-12"><textarea cols="50" rows="5" id="textExp" name="textExp"><?=(isset($_POST['textExp'])) ?  showString($textExp) : '';?></textarea></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2" data-dismiss="modal"><</button>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalFin" id="saveForm">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="modal fade" id="ModalFin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vous êtes inscrit à LAMANU</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        une fenêtre
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->
    </form>
</div>