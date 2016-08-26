<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

class Select_table_agro_Controller {
    
    function __construct() {
        require_once '../model/Select_table_agro_Model.php';
        $select_model = new Select_table_agro_Model();
        $select_model->agro_uslovia_id_name();
        
    }
    
}

$select_controller = new Select_table_agro_Controller();