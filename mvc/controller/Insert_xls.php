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
        $rows_table = $_POST['rows_table'];
        
        /*Создаем массив и записываем туда все данные*/
        $dannue_array =array($this->int_monts,$this->name_kultura,$this->agro_uslovia,
                             $this->shufr,$this->edinitsa,$this->work_time,$this->norm_vurabotka,
                             $this->v_nature,$this->na_edinitsu,$this->all,$this->fakt);
        
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
        
        
        // Вставляем текст в ячейку A4 (Год)
        $sheet->setCellValue("A4", $this->year);
        $sheet->getStyle('A4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('A4')->getFill()->getStartColor()->setRGB('EEEEEE');
        // Объединяем ячейки
       // $sheet->mergeCells('R1:X1');
        
        /*(Месяц)*/
        $sheet->setCellValue("B4", $this->monts);
        $sheet->getStyle('B4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('B4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*Сельхозпредприятие*/
        $sheet->setCellValue("D4", $this->sg);
        $sheet->getStyle('D4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('D4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*УЧЁТНЫЙ ЛИСТ № ТРАКТОРИСТА-МАШИНИСТА*/
        $sheet->setCellValue("H3", 'УЧЁТНЫЙ ЛИСТ №__ '.$this->uchet.'__ТРАКТОРИСТА-МАШИНИСТА');
        $sheet->getStyle('H3')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('H3')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*Ф.И.О. тракториста*/
        $sheet->setCellValue("J4", $this->fio);
        $sheet->getStyle('J4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('J4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*Табельный номер*/
        $sheet->setCellValue("R4", $this->tab_number);
        $sheet->getStyle('R4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('R4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*Марка машины*/
        $sheet->setCellValue("S4", $this->marka_car);
        $sheet->getStyle('S4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('S4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        
        /*@TODO тут трабл с  цыклом почему то задваивает запись из-за этого в фай записывается 
          2 одинаковые записи, что не есть хорошо надо разобраться*/ 
        
        /*Создаем цыкл для массива и заполняем все оставшиеся поля*/
       for ($i = 0; $i< $rows_table; $i++){
           $index = 9 + $i;
           
           var_dump($index);
            var_dump($dannue_array[0]);
            // (Числа месяца)
        $sheet->setCellValue('A'.$index, $dannue_array[0]);
        $sheet->getStyle('A'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('A'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         // (Название культуры и выполненной работы, состав агрегата)
        $sheet->setCellValue('C'.$index, $dannue_array[1]);
        $sheet->getStyle('C'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('C'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         // (Агротехнические условия выполнения работы)
        $sheet->setCellValue('E'.$index, $dannue_array[2][$i]);
        $sheet->getStyle('E'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('E'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(Шифр синтетического и аналитического учета)
        $sheet->setCellValue('I'.$index, $dannue_array[3][$i]);
        $sheet->getStyle('I'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('I'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         // (Единица измерения)
        $sheet->setCellValue('J'.$index, $dannue_array[4][$i]);
        $sheet->getStyle('J'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('J'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(Отработано часов)
        $sheet->setCellValue('K'.$index, $dannue_array[5][$i]);
        $sheet->getStyle('K'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('K'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(Норма выработки)
        $sheet->setCellValue('L'.$index, $dannue_array[6][$i]);
        $sheet->getStyle('L'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('L'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //( в натуре)
        $sheet->setCellValue('O'.$index, $dannue_array[7][$i]);
        $sheet->getStyle('O'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('O'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(на единицу работы)
        $sheet->setCellValue('V'.$index, $dannue_array[8][$i]);
        $sheet->getStyle('V'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('V'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         // (всего)
        $sheet->setCellValue('W'.$index, $dannue_array[9][$i]);
        $sheet->getStyle('W'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('W'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(фактически)
        $sheet->setCellValue('X'.$index, $dannue_array[10][$i]);
        $sheet->getStyle('X'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('X'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
            
      }
        
        /*Сохраняем данные в файл (путь/файл) и скачиваем*/
         $objWriter = new PHPExcel_Writer_Excel5($xls);
         $data = date("d.m.Y");
         
         /*
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="('.$data.')otchet.xls"');
            header('Cache-Control: max-age=0');
            $objWriter->save('php://output');
            echo "($data)otchet.xls";
          * 
          */
            $objWriter->save('../PHPExcel/otchet.xls');
   }
}

$insert_xls = new Insert_xls();
