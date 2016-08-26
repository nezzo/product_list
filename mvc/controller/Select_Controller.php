<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

class Select_Controller {
    
    function __construct() {
        require_once '../model/Select_Model.php';
        $select_model = new Select_Model();
        $select_model->agro_uslovia();
    }
}

$select_controller = new Select_Controller();