<?php
#@TODO надо в proverka() поставить условия если ничего нету то не выводить ошибку
# а выводить как пустое значение
/**
 * Description of Insert_Controller
 *
 * @author nestor
 */
class Insert_Controller {
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
   
   function __construct(){
       $this->proverka();
   }
   
   /*Принимаем данные и записываем в массив*/
   function proverka(){
        $this->year = $_POST['year'];
        $this->monts = $_POST['monts'];
        $this->sg = $_POST['sg'];
        $this->uchet = $_POST['uchet'];
        $this->fio = $_POST['fio'];
        $this->tab_number = $_POST['tab_number'];
        $this->marka_car = $_POST['marka_car'];
        $this->int_monts = $_POST['int_monts'];
        $this->name_kultura = $_POST['name_kultura'];
        $this->shufr = $_POST['shufr'];
        $this->edinitsa = $_POST['edinitsa'];
        $this->work_time = $_POST['work_time'];
        $this->norm_vurabotka = $_POST['norm_vurabotka'];
        $this->v_nature = $_POST['v_nature'];
        $this->all = $_POST['all'];
        $this->fakt = $_POST['fakt'];
        
       $danue_otchet = array(
           'year'   => $this->year,
           'monts'  => $this->monts,
           'sg'     => $this->sg,
           'uchet'  => $this->uchet,
           'fio'    => $this->fio,
           'tab_number' => $this->tab_number,
           'marka_car' =>  $this->marka_car,
           'int_monts' =>   $this->int_monts,
           'name_kultura' => $this->name_kultura,
           'shufr' => $this->shufr,
           'edinitsa' => $this->edinitsa,
           'work_time' => $this->work_time,
           'norm_vurabotka' => $this->norm_vurabotka,
           'v_nature' => $this->v_nature,
           'all' => $this->all,
           'fakt' => $this->fakt
       );
       
       return $danue_otchet;
       
   }
   
   
}

$insert_controller = new Insert_Controller();
