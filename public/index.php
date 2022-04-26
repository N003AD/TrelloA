<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods", "GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers", "Origin,X-Requested-With, Content-Type, Accept");
//inclusion des constantes
require_once dirname(dirname(__FILE__))."/config/constantes.php";
//inclusion du Validator
require_once dirname(dirname(__FILE__))."/config/validator.php";
//
require_once dirname(dirname(__FILE__))."/config/orm.php";
//inclusion des roles
require_once dirname(dirname(__FILE__))."/config/role.php";
//Chargement du router
require_once dirname(dirname(__FILE__))."/config/router.php";
?>

