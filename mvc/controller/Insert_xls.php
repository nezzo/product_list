<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

//@TODO надо с помощью цыкла внести данные  таблицу в блокноте описанно как это сделать 

// Подключаем класс для работы с excel
require_once('../PHPExcel/PHPExcel.php');
// Подключаем класс для вывода данных в формате excel
require_once('../PHPExcel/PHPExcel/Writer/Excel5.php');


class Insert_xls {
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
       $this->write_xls();
   }
   
   /*Принимаем данные и записываем в массив*/
   function write_xls(){
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
        
       // Создаем объект класса PHPExcel
       $xls = new PHPExcel();
       //Открываем файл-шаблон
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $xls = $objReader->load('../PHPExcel/shablon.xls');
        // Устанавливаем индекс активного листа
        $xls->setActiveSheetIndex(0);
        // Получаем активный лист
        $sheet = $xls->getActiveSheet();
        // Подписываем лист
        $sheet->setTitle('Формирование товарного листа');
        
        
        // Вставляем текст в ячейку R1
        $sheet->setCellValue("R1", 'Hi world');
        $sheet->getStyle('R1')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('R1')->getFill()->getStartColor()->setRGB('EEEEEE');
        // Объединяем ячейки
        $sheet->mergeCells('R1:X1');
        
        /*Сохраняем данные в файл (путь/файл)*/
         $objWriter = new PHPExcel_Writer_Excel5($xls);
        $objWriter->save('../PHPExcel/otchet.xls');
   }
}

$insert_xls = new Insert_xls();
