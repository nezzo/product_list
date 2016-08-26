<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
require_once '../core/Model.php';

class Select_Model extends Model {
    
    function agro_uslovia(){
        $stmt = $this->connect()->query("SELECT id, agro_uslovia FROM product_list_const" )->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($stmt as $row){
            $id = $row['id'];
            $uslovia = $row['agro_uslovia'];
            echo "<option id=\"$id\" value=\"$uslovia\">$uslovia</option>";
        }
        
         
    }
}
