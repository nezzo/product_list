//@TODO надо придумать как по двойному щелчку открывать инпут,а теряя фокус выводило значение
//@TODO возможно change  от джейквери нам подойдет 
/*@TODO надо к классу agro_uslovia  добавить селектор <select></select> 
                 * и внутырь поставить переменную data где уже все выводиться в 
                 * <option></option>. А дальше по id надо вытягивать
                 * данные на которые умножать что бы получились данные.
*/
$(document).ready(function(){
   
   /*Создаем новые поля*/
   $('.button_new_post').click(function(){
       var date = new Date();
        var id = date.getTime();
       
       
       $.ajax({
           url : 'mvc/controller/Select_Controller.php',
            type : 'POST',
            dataType:'text',
            data :{
                
            },
             success:function(data){
                console.log(data);
                
                /*тут надо установить select*/
                $('.agro_uslovia').appendChild(p);
                
            },
            error:function (xhr, ajaxOptions, thrownError){
                console.log(thrownError); //выводим ошибку
            }
            
       });       
       
      $('.table tbody').append('<tr id="tr_'+id+'"><td><input type="text" name="year"></td><td><input type="text" name="monts"> </td>\n\
                                <td><input type="text" name="sg"> </td><td><input type="text" name="uchet"> </td>\n\
                                <td><input type="text" name="fio"> </td><td><input type="text" name="tab_number"> </td>\n\
                                <td><input type="text" name="marka_car"> </td><td><input type="text" name="int_monts"> </td><td><input type="text" name="name_kultura"> </td>\n\
                                <td><div class="agro_uslovia"></div> </td><td><input type="text" name="shufr"> </td><td><input type="text" name="edinitsa"> </td>\n\
                                <td><input type="text" name="work_time"> </td><td><input type="text" name="norm_vurabotka"> </td><td><input type="text" name="v_nature"> </td><td><div class="na_edinitsu"></div></td>\n\
                                <td><input type="text" name="all"> </td><td><input type="text" name="fakt"> </td>\n\
                                <td><input type="radio" name="delete" value="'+id+'" ></td></tr>');
   
      
       
       
       /*Получаем данные с полей и отправляем  на сервер*/
       $('.save_downoload').click(function(){
       var id_str = "tr_"+id;
       var year = $("#tr_"+id+" input[name='year']").val();
       var monts = $("#tr_"+id+" input[name='monts']").val();
       var sg = $("#tr_"+id+" input[name='sg']").val();
       var uchet = $("#tr_"+id+" input[name='uchet']").val();
       var fio = $("#tr_"+id+" input[name='fio']").val();
       var tab_number = $("#tr_"+id+" input[name='tab_number']").val();
       var marka_car = $("#tr_"+id+" input[name='marka_car']").val();
       var int_monts = $("#tr_"+id+" input[name='int_monts']").val();
       var name_kultura = $("#tr_"+id+" input[name='name_kultura']").val();
       var agro_uslovia = $(".agro_uslovia").val();
       var shufr = $("#tr_"+id+" input[name='shufr']").val();
       var edinitsa = $("#tr_"+id+" input[name='edinitsa']").val();
       var work_time = $("#tr_"+id+" input[name='work_time']").val();
       var norm_vurabotka = $("#tr_"+id+" input[name='norm_vurabotka']").val();
       var v_nature = $("#tr_"+id+" input[name='v_nature']").val();
       var na_edinitsu = $(".na_edinitsu").val();
       var all = $("#tr_"+id+" input[name='all']").val();
       var fakt = $("#tr_"+id+" input[name='fakt']").val();
       
       
       $.ajax({
            url : 'mvc/controller/Insert_Controller.php',
            type : 'POST',
            dataType:'text',
            data :{
                id_str:id_str,
                year:year,
                monts:monts,
                sg:sg,
                uchet:uchet,
                fio:fio,
                tab_number:tab_number,
                marka_car:marka_car,
                int_monts:int_monts,
                name_kultura:name_kultura,
                agro_uslovia:agro_uslovia,
                shufr:shufr,
                edinitsa:edinitsa,
                work_time:work_time,
                norm_vurabotka:norm_vurabotka,
                v_nature:v_nature,
                na_edinitsu:na_edinitsu,
                all:all,
                fakt:fakt
            },
            success:function(data){
                console.log(data);
                
                
            },
            error:function (xhr, ajaxOptions, thrownError){
                console.log(thrownError); //выводим ошибку
            }
        });
       
       
   });        
   
   }); 
        
     /*Удаляем выбраные поля*/
   $('.button_del_post').click(function(){
      var id = $( "input:checked" ).val();
      $("#tr_"+id).remove();
   });
    
});