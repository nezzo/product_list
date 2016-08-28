<?php
/*@TODO надо дописать выборку с базы для столбца на единицу*/

ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

require_once '../core/Model.php';

class Select_table_na_edenitsu_Model extends Model {
    
        
    function select_agro_uslovia_id ($id){
        $stmt = $this->connect()->query("SELECT edinitsa  FROM product_list_const WHERE id='$id'" )
                                        ->fetchAll(PDO::FETCH_ASSOC);
        foreach ($stmt as $row){
            echo $row['edinitsa'];
        }
    }
}
