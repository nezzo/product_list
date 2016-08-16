<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        selector:"textarea",
        language:"ru",
        theme:"modern",
        gecko_spellcheck:"true",
        plugins : "image,code,textcolor,layer,example,table"
      });
</script>

<form class="new_post_form" action="#" method="post">
    <h3>Добавить новую запись</h3>
    <label>Год</label>
    <textarea class="new_post_year" rows="4" cols="100" name="question" placeholder="Год"></textarea>
    <label style="padding-top:25px;">Месяц</label>
    <textarea class="new_post_monts" rows="4" cols="100" name="variant_1" placeholder="Месяц"></textarea>
    <label style="padding-top:25px;">Сельхозпредприятие</label>
    <textarea class="new_post_organ" rows="4" cols="100" name="variant_2" placeholder="Сельхозпредприятие"></textarea>
    <label style="padding-top:25px;">УЧЁТНЫЙ ЛИСТ № ТРАКТОРИСТА-МАШИНИСТА</label>
    <textarea class="new_post_traktorist" rows="4" cols="100" name="variant_3" placeholder="УЧЁТНЫЙ ЛИСТ № ТРАКТОРИСТА-МАШИНИСТА"></textarea>
    <label style="padding-top:25px;">Ф.И.О. тракториста</label>
    <textarea class="new_post_fio" rows="4" cols="100" name="answer" placeholder="Ф.И.О. тракториста"></textarea>
    <label style="padding-top:25px;">Табельный номер</label>
    <textarea class="new_post_number" rows="4" cols="100" name="question" placeholder="Табельный номер"></textarea>
    <label style="padding-top:25px;">Марка машины</label>
    <textarea class="new_post_car" rows="4" cols="100" name="variant_1" placeholder="Марка машины"></textarea>
    <label style="padding-top:25px;">Числа месяца</label>
    <textarea class="new_post_num_monts" rows="4" cols="100" name="variant_2" placeholder="Числа месяца"></textarea>
    <label style="padding-top:25px;">Название культуры и выполненной работы, состав агрегата</label>
    <textarea class="new_post_name_kultr" rows="4" cols="100" name="variant_3" placeholder="Название культуры и выполненной работы, состав агрегата"></textarea>
    <label style="padding-top:25px;">Агротехнические условия выполнения работы</label>
    <textarea class="new_post_agro" rows="4" cols="100" name="answer" placeholder="Агротехнические условия выполнения работы"></textarea>
    <label style="padding-top:25px;">Шифр синтетического и аналитического учета</label>
    <textarea class="new_post_uchet" rows="4" cols="100" name="question" placeholder="Шифр синтетического и аналитического учета"></textarea>
    <label style="padding-top:25px;">Единица измерения</label>
    <textarea class="new_post_edinitsa" rows="4" cols="100" name="variant_1" placeholder="Единица измерения"></textarea>
    <label style="padding-top:25px;">Отработано часов</label>
    <textarea class="new_post_work" rows="4" cols="100" name="variant_2" placeholder="Отработано часов"></textarea>
    <label style="padding-top:25px;">Норма выработки</label>
    <textarea class="new_post_norma" rows="4" cols="100" name="variant_3" placeholder="Норма выработки"></textarea>
    <label style="padding-top:25px;"> в натуре</label>
    <textarea class="new_post_vnature" rows="4" cols="100" name="answer" placeholder="в натуре"></textarea>
    <label style="padding-top:25px;"> на единицу работы</label>
    <textarea class="new_post_edinitsa_work" rows="4" cols="100" name="question" placeholder="на единицу работы"></textarea>
    <label style="padding-top:25px;">всего</label>
    <textarea class="new_post_vsego" rows="4" cols="100" name="answer" placeholder="всего"></textarea>
    <label style="padding-top:25px;">фактически</label>
    <textarea class="new_post_fakt" rows="4" cols="100" name="answer" placeholder="фактически"></textarea>
    <button class="new_post_button">Сохранить</button>
</form>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/fancybox.js" type="text/javascript"></script>
<script src="js/main.js"></script>

