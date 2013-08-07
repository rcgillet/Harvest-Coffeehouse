<?php

require_once(FILE_ROOT . '/config/config.php');

abstract class BaseClass {
    protected $config;
    private $errors;

    function __Construct() {
         $this->config = new config();
    }

    public function setError($error) {
        $this->errors[] = $error;
    }

    public function setErrors($errors) {
        foreach($errors as $error) {
           $this->setError($error);
        }
    }

    public function getErrors() {
        return $this->errors;
    }
}
?>