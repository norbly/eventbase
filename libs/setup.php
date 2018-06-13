<?php
//include smarty
require_once('/var/www/html/eventbase/smarty/Smarty.class.php');
// include main class
require('/var/www/html/eventbase/libs/eventbase.lib.php');

class Eventbase_Smarty extends Smarty {
    function __construct() {
        parent::__construct();
        $this->setTemplateDir('templates');
        $this->setCompileDir('templates_c');
        $this->setConfigDir('configs');
        $this->setCacheDir('cache');
        // uncomment the following to test the smarty directories
        //$this->testInstall();
        
      } 
}
?>
 