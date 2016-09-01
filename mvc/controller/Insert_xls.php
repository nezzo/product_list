<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

//@TODO надо с помощью цыкла внести данные  таблицу в блокноте описанно как это сделать 

// Подключаем класс для работы с excel
require_once('../PHPExcel/PHPExcel.php');
// Подключаем класс для вывода данных в формате excel
require_once('../PHPExcel/PHPExcel/Writer/Excel5.php');


class Insert_xls {
     
   
   function __construct() {
       $this->write_xls();
   }
   
   /*Принимаем данные и записываем в массив*/
   function write_xls(){
        $year = $_POST['year'];
        $monts = $_POST['monts'];
        $sg = $_POST['sg'];
        $uchet = $_POST['uchet'];
        $fio = $_POST['fio'];
        $tab_number = $_POST['tab_number'];
        $marka_car = $_POST['marka_car'];
        $mas = $_POST['mas'];
        $rows_table = $_POST['rows_table'];
                
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
        $sheet->setCellValue("A4", $year);
        $sheet->getStyle('A4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('A4')->getFill()->getStartColor()->setRGB('EEEEEE');
        // Объединяем ячейки
       // $sheet->mergeCells('R1:X1');
        
        /*(Месяц)*/
        $sheet->setCellValue("B4", $monts);
        $sheet->getStyle('B4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('B4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*Сельхозпредприятие*/
        $sheet->setCellValue("D4", $sg);
        $sheet->getStyle('D4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('D4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*УЧЁТНЫЙ ЛИСТ № ТРАКТОРИСТА-МАШИНИСТА*/
        $sheet->setCellValue("H3", 'УЧЁТНЫЙ ЛИСТ №__ '.$uchet.'__ТРАКТОРИСТА-МАШИНИСТА');
        $sheet->getStyle('H3')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('H3')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*Ф.И.О. тракториста*/
        $sheet->setCellValue("J4", $fio);
        $sheet->getStyle('J4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('J4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*Табельный номер*/
        $sheet->setCellValue("R4", $tab_number);
        $sheet->getStyle('R4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('R4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*Марка машины*/
        $sheet->setCellValue("S4", $marka_car);
        $sheet->getStyle('S4')->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('S4')->getFill()->getStartColor()->setRGB('EEEEEE');
        
        /*Узнаем сколько строк добавлено и если добавлено больше чем в шаблоне
        * с помощью расчет мы добавляем новые строки  
         *        */
       for ($i = 0; $i< $rows_table; $i++){
           $index = 9 + $i; 
       }
        
        if ($index > 21){
               $new_rows = $index - 21;
               
               $sheet->insertNewRowBefore(30, $new_rows);
               
            }
       
        
        
        /*Создаем цыкл для массива и заполняем все оставшиеся поля*/
       for ($i = 0; $i< $rows_table; $i++){
           $index = 9 + $i;
           
          // (Числа месяца)
        $sheet->setCellValue('A'.$index, $mas[$i][0]);
        $sheet->getStyle('A'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('A'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
       
         // (Название культуры и выполненной работы, состав агрегата)
        $sheet->setCellValue('C'.$index, $mas[$i][1]);
        $sheet->getStyle('C'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('C'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         // (Агротехнические условия выполнения работы)
        $sheet->setCellValue('E'.$index, $mas[$i][2]);
        $sheet->getStyle('E'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('E'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(Шифр синтетического и аналитического учета)
        $sheet->setCellValue('I'.$index, $mas[$i][3]);
        $sheet->getStyle('I'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('I'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         // (Единица измерения)
        $sheet->setCellValue('J'.$index, $mas[$i][4]);
        $sheet->getStyle('J'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('J'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(Отработано часов)
        $sheet->setCellValue('K'.$index, $mas[$i][5]);
        $sheet->getStyle('K'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('K'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(Норма выработки)
        $sheet->setCellValue('L'.$index, $mas[$i][6]);
        $sheet->getStyle('L'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('L'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //( в натуре)
        $sheet->setCellValue('O'.$index, $mas[$i][7]);
        $sheet->getStyle('O'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('O'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(на единицу работы)
        $sheet->setCellValue('V'.$index, $mas[$i][8]);
        $sheet->getStyle('V'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('V'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         // (всего)
        $sheet->setCellValue('W'.$index, $mas[$i][9]);
        $sheet->getStyle('W'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('W'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
        
         //(фактически)
        $sheet->setCellValue('X'.$index, $mas[$i][10]);
        $sheet->getStyle('X'.$index)->getFill()->setFillType(
            PHPExcel_Style_Fill::FILL_SOLID);
        $sheet->getStyle('X'.$index)->getFill()->getStartColor()->setRGB('EEEEEE');
          
      }
      
        
        /*Сохраняем данные в файл (путь/файл) и скачиваем*/
         $objWriter = new PHPExcel_Writer_Excel5($xls);
         $data = date("d.m.Y");
         $objWriter->save('../otchet/otchet.xls');
         
         /*переименовываем файл по дате для скачивания*/
         $new_name = rename("../otchet/otchet.xls", "../otchet/otchet($data).xls");
         
        /*передаем с помощью GET запроса на скрипт для скачивания отчета*/
         if($new_name == true){
                echo "/product/mvc/downoload_script_otchet/downoload.php?file=../otchet/otchet($data).xls";
         }
         
          
           
   }
}

$insert_xls = new Insert_xls();
