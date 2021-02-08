<?php
if (($errors == '') && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $datebirthday = explode('-', $birthdate);
    $datebirth = $datebirthday[2] . '-' . $datebirthday[1] . '-' . $datebirthday[0];
?>
    <div class="container">
        <div class="row">
            <div class="text-center col-12 text-primary font-weight-bolder">Votre formulaire est complet</div>
            <div class="text-center col-12">Bonjour <?= showString($firstname) ?>&nbsp;<?= showString($lastname) ?></div>
            <div class="text-right col-6">Votre date de naissance le </div>
            <div class="col-6"><?= showString($datebirth) ?>&nbsp;en&nbsp;<?= showString($countryBirth) ?></div>
            <div class="text-right col-6">Votre nationalité&nbsp;</div>
            <div class="col-6"><?= showString($nationality); ?></div>
            <div class="text-right col-6">Votre adresse </div>
            <div class="col-6"><?= showString($street); ?>&nbsp;<?= showString($zipcode); ?><?= showString($town); ?></div>
            <div class="text-right col-6">Votre email </div>
            <div class="col-6"><?= showString($email) ?></div>
            <div class="text-right col-6">Votre téléphone </div>
            <div class="col-6"><?= showString($phoneNumber); ?></div>
            <div class="text-right col-6">Votre diplôme </div>
            <div class="col-6"><?= showString($diploma); ?></div>
            <div class="text-right col-6">Votre # Pôle Emploi </div>
            <div class="col-6"><?= showString($poleEmploi); ?></div>
            <div class="text-right col-6">Vous avez obtenu </div>
            <div class="col-6"><?= showString($badge); ?>&nbsp;badge<?= (($badge > 1) ? 's' : ''); ?></div>
            <div class="text-right col-6">Votre URL sur codecademy </div>
            <div class="col-6"><?= showString($linkCodecademy); ?></div>
            <div class="text-right col-6">Votre Hero's story </div>
            <div class="col-6"><?= showString($textHero); ?></div>
            <div class="text-right col-6">Votre histoire de hacks </div>
            <div class="col-6"><?= showString($textHacks); ?></div>
            <div class="text-right col-6">Votre expérience codage </div>
            <div class="col-6"><?= showString($textExp); ?></div>
            <div class="text-center col-12"><input type="submit" value="Validation finale de votre inscription" class="btn btn-primary" /></div>
        </div>
    </div>
<?php
}
?>