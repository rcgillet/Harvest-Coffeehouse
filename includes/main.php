<?php

require_once(FILE_ROOT . 'includes/baseClass.php');

class main extends BaseClass {
    private $page;
    
    public function __Construct() {
        parent::__construct();        
    }  

    public function run() {  
		if(isset($_GET['page'])) {
			switch($_GET['page']) {
				case '1':
					$pageName = 'home';
					break;
				case '2':
					$pageName = 'store';				
					break;							
			}
		} else {
			$pageName = 'home';				
		}
		$this->displayPage($pageName);
    }

    private function displayPage($mainContent) {
        include(FILE_ROOT . 'templates/' . $this->config->template['appTemplates'][$mainContent]);
    }
}
?>