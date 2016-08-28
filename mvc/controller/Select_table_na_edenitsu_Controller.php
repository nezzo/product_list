<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
/*@TODO надо дописать выборку с базы для столбца на единицу*/
class Select_table_na_edenitsu_Controller {
    
    function __construct(){
        $this->agro_uslovia_id();
    }
  
    function agro_uslovia_id(){
        $agro_uslovia_id = $_POST['agro_uslovia_id'];
        require_once '../model/Select_table_na_edenitsu_Model.php';
        $Select_table_na_edenitsu_Model = new Select_table_na_edenitsu_Model();
        $Select_table_na_edenitsu_Model->select_agro_uslovia_id($agro_uslovia_id);
        
         
        
        
    }
}
$Select_table_na_edenitsu_Controller = new Select_table_na_edenitsu_Controller();