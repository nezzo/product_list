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
                            <div class="col-md-6">
                             <div class='buttons'>
                                    <button class='button_new_post'>+Добавить</button>
                                    <button class='button_del_post'>-Удалить</button>
                                    </div>
                                    <form class='form_product' action='model.php' name='table' method='POST'>
                                        <div class="table">
                                     <table>
                                         <thead>
                                         <th>Год</th>
                                         <th>Месяц</th>
                                         <th>Сельхозпредприятие</th>
                                         <th>УЧЁТНЫЙ ЛИСТ № ТРАКТОРИСТА-МАШИНИСТА</th>
                                         <th>Ф.И.О. тракториста</th>
                                         <th>Табельный номер</th>
                                         <th>Марка машины</th>
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
                                         <tbody>
                                         </tbody>

                                     </table>
                                    </form>
                        </div>
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
