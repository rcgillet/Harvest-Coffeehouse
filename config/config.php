<?php

//require_once(FILE_ROOT . '../smarty/libs/Smarty.class.php');
//require_once(SERVER_PATH . '/../configs/smarty/Smarty.class.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . '/grace/smarty/libs/Smarty.class.php');

class config {
    public $appSettings;
    public $css;
    public $template;

    function __Construct() {
        $this->appSettings = array(
            'apptitle'      => 'Test',
            'css'           => array (
                                ),                
            'js'            => array (
                                )
        );

        $this->template = array(   
            'appTemplates'    => array (
                                    'home'                  => 'harvestCoffeeHome.html',
                                    'store'                 => 'shop.html'
                                ),             

        );     
    }        
}
?>
