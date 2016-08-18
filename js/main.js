//@TODO надо доработать систему удаления строк в таблице, а то удаляет только самую первую
$(document).ready(function(){
    /*
    $(".various_button_new_post,.various_button_post_select").fancybox({
        maxWidth	: 900,
        maxHeight	: 400,
        fitToView	: false,
        width		: '100%',
        height		: '100%',
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none'
    });
    */
   /*Создаем новые поля*/
   $('.button_new_post').click(function(){
       $('.table tbody').append('<tr id="tr_on"><td><input type="text" name="year"> </td><td><input type="text" name="monts"> </td>\n\
                                <td><input type="text" name="sg"> </td><td><input type="text" name="uchet"> </td>\n\
                                <td><input type="text" name="fio"> </td><td><input type="text" name="tab_number"> </td>\n\
                                <td><input type="text" name="marka_car"> </td><td><input type="text" name="int_monts"> </td><td><input type="text" name="name_kultura"> </td>\n\
                                <td><input type="text" name="agro_uslovia"> </td><td><input type="text" name="shufr"> </td><td><input type="text" name="edinitsa"> </td>\n\
                                <td><input type="text" name="work_time"> </td><td><input type="text" name="norm_vurabotka"> </td><td><input type="text" name="v_nature"> </td><td><input type="text" name="na_edinitsu"> </td>\n\
                                <td><input type="text" name="all"> </td><td><input type="text" name="fakt"> </td>\n\
                                <td><input type="radio" name="delete"> </td></tr>');
   });
   
   /*Удаляем выбраные поля*/
   $('.button_del_post').click(function(){
      var id = $( "input:checked" ).val();
      console.log(id);
      if(id == 'on'){
          $('#tr_on'+id).remove();
      }
   });
});