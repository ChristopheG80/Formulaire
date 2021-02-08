<?php
    function secureString($a){
        $a = stripslashes(trim(htmlentities(htmlspecialchars($a))));
        return $a;
    }
    function showString($a){
        $a = html_entity_decode($a);
        return $a;
    }
?>