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
					$pageName = 'staff';				
					break;
				case '3':
					$pageName = 'carousel';
					break;
				case '4':
					$pageName = 'hero';				
					break;
				case '5':
					$pageName = 'enrollment';				
					break;
				case '6':
					$pageName = 'starter-template';				
					break;				
				case '7':
					$pageName = 'signin';				
					break;				
				default:
					$pageName = 'index';									
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