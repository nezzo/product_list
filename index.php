<?php

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
                        <div class="table">
                            <div class='buttons'>
                                    <a href='modal_new_post.php' class='various_button_new_post fancybox.ajax'>+Добавить</a>
                                    <a href='modal_update_post.php' class='various_button_post_select fancybox.ajax'>~Редактировать</a>
                                    <a href='#' class='button_del_post'>-Удалить</a>
                                    </div>
                                    <form class='form_product' action='model.php' name='table' method='POST'>
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
                                         </thead>
                                         <tbody>

                                         <?php foreach ($question as $row):?>
                                             <tr id="tr_<?=$row['id'];?>">
                                                 <td><center><?=$row['id'];?></center></td>
                                                 <td><?=$row['question'];?></td>
                                                 <td><?=$row['variant_1'];?></td>
                                                 <td><?=$row['variant_2'];?></td>
                                                 <td><?=$row['variant_3'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><?=$row['answer'];?></td>
                                                 <td><center><input type='checkbox' name='check[]' value='<?=$row['id'];?>'></center></td>
                                             </tr>
                                         <?php endforeach;?>
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
