<?php
//require_once(PATH_DB);
//var_dump($_POST);
// echo "Bonsoir";

if(isset($_REQUEST['controller'])){
    require_once(PATH_DB);
    var_dump($_POST);
}else{
    echo "c'est une erreur";
}
