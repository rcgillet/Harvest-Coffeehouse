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
                                    'mainTemplate'  		=> 'mainTemplate.html',
                                    'index'         		=> 'index.html',
									'marketing-narrow' 		=> 'marketing-narrow.html',
									'fluid' 				=> 'fluid.html',
									'hero'	 				=> 'hero.html',
									'carousel' 				=> 'carousel.html',
									'marketing-alternate'	=> 'marketing-alternate.html',
									'signin' 				=> 'signin.html',
									'starter-template'		=> 'starter-template.html',
									'enrollment'			=> 'Enrollment.html',
									'staff'					=> 'staff.html',
                                    'register'              => 'register.html',
                                    'home'                  => 'harvestCoffeeHome.html',
                                    'store'                 => 'test.html'
                                ),             

        );     
    }        
}
?>
