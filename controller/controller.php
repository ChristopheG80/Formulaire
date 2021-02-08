<?php
(include('utils/regex.php'));
//(include('../utils/regex.php'))?'':'';
$flag = true;
$flagComplete = false;
// if(isset($_POST['ajax'])){
//     return 'ok';
// }
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fields = array('lastname|Votre nom est|1',
    'firstname|Votre prénom est|1',
    'street|Votre adresse|2',
    'town|Votre ville|1',
    'zipcode|Votre code postal|3',
    'phoneNumber|Votre téléphone|4',
    'email|Votre email|5',
    'birthdate|Votre date de naissance|6',
    'countryBirth|votre pays de naissance|1',
    'nationality|Votre nationalité|1',
    'diploma|Votre diplôme|10',
    'poleEmploi|Votre numéro Pôle Emploi|7',
    'badge|Nombre de badge|8',
    'linkCodecademy|Votre lien Codecademy|9',
    'textHero|Votre texte à propos de votre héros/héroïne|2',
    'textHacks|Votre texte à propos de vos hacks|2',
    'textExp|Votre texte à propos de votre expérience|2');
    $errors = '';
    foreach($fields as $fieldp){
        $field = explode(('|'), $fieldp);
        $champ = $field[0];
        $value = str_replace("'",'\'',$_POST[$field[0]]);
        $valchamp = $field[1];
        $regexnum = $field[2];
        
        switch($regexnum){
            case 1:
                $regex = REGEX_NO_NUMBER;
                break;
            case 2:
                $regex = REGEX_LETTER_NUMBER;
                break;
            case 3:
                $regex = REGEX_ZIPCODE_FRENCH;
                break;
            case 4:
                $regex = REGEX_PHONENUMBER_INT;
                break;
            case 5:
                $regex = REGEX_EMAIL;
                break;
            case 6:
                $regex = REGEX_BIRTHDATE_YYYY_MM_DD;
                break;
            case 7:
                $regex = REGEX_POLEEMPLOI;
                break;
            case 8:
                $regex = REGEX_NUMBER_ONLY;
                break;
            case 9:
                $regex = REGEX_URL;
                break;
            case 10:
                $regex = REGEX_LETTER_NUMBER_OPERATOR;
                break;
            default:
                $regex = '';
        }
        if (($regex != '') && (preg_match($regex, $value))){
                //echo $value . ' ' . 'est correct pour le champ ' . $champ;
                $$champ = $value;
                echo (isset($_POST['ajax']))?'ok':'';
        }
        else{
            $errors .= '<p><span class="text-secondary">' . $valchamp . ' ' . 'manque ou est erronné</span></p>';
            echo (isset($_POST['ajax']))?'notOk':'';
            //var_dump($errors);
        }
    }
    // echo 'Début affichage des erreurs';
    
    // echo 'Fin   affichage des erreurs';
    if($errors == ''){
        $flagComplete = true;
        $flag = false;
        
    }
    else{
        $errors = '<p><span class="text-danger bold">Relancer le formulaire pour corriger</span></p>' . $errors;
    }
}
?>