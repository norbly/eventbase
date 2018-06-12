<?php
//define paths
define('EVENTBASE_DIR', './var/www/html/eventbase/');

//include setup file
require('./libs/setup.php');

$eventbase = new Eventbase; 

$action = $eventbase->get_action();
switch($action) {
    case 'home' :
        $eventbase->displayIndex(); 
        break;
    case 'signin' :
        $eventbase->displaySignin();
        break;
    case 'register' :
        $eventbase->displayRegister();
        break;
    default :
        $eventbase->displayIndex();
        break;
}
?>