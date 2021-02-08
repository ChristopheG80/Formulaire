<?php
setlocale(LC_ALL, "fra.utf8");
$title = "Formulaire/LA MANU";
//$flag = true;
//$flagComplete = false;


include('utils/functions.php');

include('template/header.php');
include('controller/controller.php');
if($flag){
    include('vue/formulaire.php');
}
elseif($flagComplete){
    include('vue/formulaireComplet.php');
}
include('template/footer.php');
?>