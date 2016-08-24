<?php
#@TODO надо в proverka() поставить условия если ничего нету то не выводить ошибку
# а выводить как пустое значение
/**
 * Description of Insert_Controller
 *
 * @author nestor
 */
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

class Insert_Controller {
   public $id_str; 
   public $year;
   public $monts;
   public $sg;
   public $uchet;
   public $fio;
   public $tab_number;
   public $marka_car;
   public $int_monts;
   public $name_kultura;
   public $shufr;
   public $edinitsa;
   public $work_time;
   public $norm_vurabotka;
   public $v_nature;
   public $all;
   public $fakt;
      
   function __construct() {
       $this->insert($this->veddennue_dannue());
   }
   /*Принимаем данные и записываем в массив*/
   function veddennue_dannue(){
        $this->id_str = $_POST['id_str'];
        $this->year = $_POST['year'];
        $this->monts = $_POST['monts'];
        $this->sg = $_POST['sg'];
        $this->uchet = $_POST['uchet'];
        $this->fio = $_POST['fio'];
        $this->tab_number = $_POST['tab_number'];
        $this->marka_car = $_POST['marka_car'];
        $this->int_monts = $_POST['int_monts'];
        $this->name_kultura = $_POST['name_kultura'];
        $this->agro_uslovia = $_POST['agro_uslovia'];
        $this->shufr = $_POST['shufr'];
        $this->edinitsa = $_POST['edinitsa'];
        $this->work_time = $_POST['work_time'];
        $this->norm_vurabotka = $_POST['norm_vurabotka'];
        $this->v_nature = $_POST['v_nature'];
        $this->na_edinitsu = $_POST['na_edinitsu'];
        $this->all = $_POST['all'];
        $this->fakt = $_POST['fakt'];
        
       $danue_otchet = array(
           'id_str' => $this->id_str,
           'year'   => $this->year,
           'monts'  => $this->monts,
           'sg'     => $this->sg,
           'uchet'  => $this->uchet,
           'fio'    => $this->fio,
           'tab_number' => $this->tab_number,
           'marka_car' =>  $this->marka_car,
           'int_monts' =>   $this->int_monts,
           'name_kultura' => $this->name_kultura,
           'agro_uslovia' => $this->agro_uslovia,
           'shufr' => $this->shufr,
           'edinitsa' => $this->edinitsa,
           'work_time' => $this->work_time,
           'norm_vurabotka' => $this->norm_vurabotka,
           'v_nature' => $this->v_nature,
           'na_edinitsu' => $this->na_edinitsu,
           'all' => $this->all,
           'fakt' => $this->fakt
       );
       
       return $danue_otchet;
   }
   
   /*Передаем полученные данные в модель*/
   function insert($veddennue_dannue){
       require_once '../model/InsertModel.php';
       $insert_model = new InsertModel();
       $result = $insert_model->insert_bd($veddennue_dannue);
       
       return $result;
   }
   
}

 $insert_controller = new Insert_Controller();
 