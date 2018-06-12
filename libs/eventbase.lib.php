<?php
class Eventbase {
    var $tpl = null;
    var $action = '';
    var $lang = '';

    public function __construct() {
        $this->tpl = new Eventbase_Smarty;

        $this->action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'home';
        $this->tpl->assign('action',$this->action);

        $this->determine_lang();
        $this->tpl->assign('lang', $this->lang);
    }
    // display functions
    function displayIndex() {
        $this->tpl->assign('page_title','home');
        $this->tpl->assign('current_page', 'home.html');
        $this->tpl->display('index.html');    
    }
    function displaySignin() {
        $this->tpl->assign('current_page', 'signin.html');
        $this->tpl->display('index.html');
    }
    function displayRegister() {
        $this->tpl->assign('current_page', 'register.html');
        $this->tpl->display('index.html');
    }

    function get_action() {
        return $this->action;
    }
    function determine_lang() {
        if (isset($_REQUEST['lang'])) {
            $this->lang = $_REQUEST['lang'];
        } else {
            $this->lang = 'en';
            // TODO determine users language
        }
    }
    
}
?>

