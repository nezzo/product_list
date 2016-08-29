<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Товарный лист</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/fancybox.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <h3>Формирование товарного листа</h3>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                           
                             <div class='buttons'>
                                 <div class="col-md-12">
                                     <div class="row">
                                         <div class="col-md-6">
                                    <button class='button_new_post'>+Добавить</button>
                                    <button class='button_del_post'>-Удалить</button>
                                         </div>
                                         <div class="col-md-6">
                                    <button class='save_downoload'>Сохранить и скачать</button>
                                    <button class='delete_otchet'>Очистить базу</button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                            <div class="table_one">
                                    <form class='form_product'  name='table' method='POST'>
                                     <table>
                                         <thead>
                                         <th>Год</th>
                                         <th>Месяц</th>
                                         <th>Сельхозпредприятие</th>
                                         <th>УЧЁТНЫЙ ЛИСТ № ТРАКТОРИСТА-МАШИНИСТА</th>
                                         <th>Ф.И.О. тракториста</th>
                                         <th>Табельный номер</th>
                                         <th>Марка машины</th>
                                         </thead>
                                         <tbody>
                                         <tr>
                                             <td><input type="text" name="year"></td>
                                             <td><input type="text" name="monts"> </td>
                                             <td><input type="text" name="sg"> </td>
                                             <td><input type="text" name="uchet"> </td>
                                             <td><input type="text" name="fio"></td>
                                             <td><input type="text" name="tab_number"></td>
                                             <td><input type="text" name="marka_car"></td>
                                         </tr>
                                         </tbody>

                                     </table>
                                         
                                    </form>
                                </div>
                          
                            <div class="table_two">
                                    <form class='form_product'  name='table' method='POST'>
                                     <table>
                                         <thead>
                                         <th>Числа месяца</th>
                                         <th>Название культуры и выполненной работы, состав агрегата</th>
                                         <th>Агротехнические условия выполнения работы</th>
                                         <th>Шифр синтетического и аналитического учета</th>
                                         <th>Единица измерения</th>
                                         <th>Отработано часов</th>
                                         <th>Норма выработки</th>
                                         <th> в натуре</th>
                                         <th>на единицу работы</th>
                                         <th>всего</th>
                                         <th>фактически</th>
                                         <th>Выделить</th>
                                         </thead>
                                         <tbody></tbody>

                                     </table>
                                         
                                    </form>
                                </div>
                                    
                           </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <script src="js/jquery.js" type="text/javascript"></script>
            <script src="js/fancybox.js"></script>
            <script src="js/lighttabs.js"></script>
            <script src="js/main.js" type="text/javascript"></script>
        </footer>
    </body>
</html>
