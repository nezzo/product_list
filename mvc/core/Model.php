<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);   
/**
 * Description of Model
 *
 * @author nestor
 */
class Model {
    protected $login = "root";
    protected $pass = 1111111;
   
    
    function __construct (){
        try {
            $db = new PDO('mysql:host = localhost;dbname = product', $this->login, $this->pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec("set names utf8");
             }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    
}
$model = new Model();
