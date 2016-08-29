//@TODO надо придумать как по двойному щелчку открывать инпут,а теряя фокус выводило значение
//@TODO возможно change  от джейквери нам подойдет 

$(document).ready(function(){
   
   /*Создаем новые поля*/
   $('.button_new_post').click(function(){
       var date = new Date();
        var id = date.getTime();
       
       
       /*Получаем по селекту данные для столбца агро-тех условия*/
       $.ajax({
           url : 'mvc/controller/Select_table_agro_Controller.php',
            type : 'POST',
            dataType:'text',
            data :{
                
            },
             success:function(data){
                 
       
      $('.table_two tbody').append('<tr id="tr_'+id+'"><td><input type="text" name="int_monts"> </td><td><input type="text" name="name_kultura"> </td>\n\
                                <td><div class="agro_uslovia"><select><option style="text-align:center; color:red;">Выберите условие:</option>'+data+'</select></div> </td><td><input type="text" name="shufr"> </td><td><input type="text" name="edinitsa"> </td>\n\
                                <td><input type="text" name="work_time"> </td><td><input type="text" name="norm_vurabotka"> </td><td><input type="text" name="v_nature"> </td><td><div class="na_edinitsu"></div></td>\n\
                                <td><div class="all"></div></td><td><div class="fakt"></div> </td>\n\
                                <td><input type="radio" name="delete" value="'+id+'" ></td></tr>');
        
         /*отправляем в базу id для получения "на еденицу работы"в ответ получим данные 
          * и занесем в таблицу*/
         $("#tr_"+id+" .agro_uslovia").change(function () {
             var agro_uslovia_id = $("#tr_"+id+" .agro_uslovia option:selected").val();
            
             $.ajax({
               url : 'mvc/controller/Select_table_na_edenitsu_Controller.php',
               type : 'POST',
               dataType:'text',
               data :{
                agro_uslovia_id:agro_uslovia_id
            },
             success:function(data){
                 $("#tr_"+id+" .na_edinitsu").text(data);
                 
             },
             error:function (xhr, ajaxOptions, thrownError){
                console.log(thrownError); //выводим ошибку
            }
              
           });
        });
        
        $("#tr_"+id+" input[name='v_nature']").change(function(){
            var v_nature = $("#tr_"+id+" input[name='v_nature']").val();
            var na_edinitsu = $("#tr_"+id+" .na_edinitsu").text();
            
            var summa = v_nature*na_edinitsu;
            
            $("#tr_"+id+" .all").text(summa);
            $("#tr_"+id+" .fakt").text(summa);
            
        });
             },
            error:function (xhr, ajaxOptions, thrownError){
                console.log(thrownError); //выводим ошибку
            }
            
       }); 
            
       
       /*Получаем данные с полей и отправляем  на сервер "Функия сохранить и скачать"*/
       $('.save_downoload').click(function(){
       var id_str = "tr_"+id;
       var year = $("input[name='year']").val();
       var monts = $("input[name='monts']").val();
       var sg = $("input[name='sg']").val();
       var uchet = $("input[name='uchet']").val();
       var fio = $("input[name='fio']").val();
       var tab_number = $("input[name='tab_number']").val();
       var marka_car = $("input[name='marka_car']").val();
       var int_monts = $("#tr_"+id+" input[name='int_monts']").val();
       var name_kultura = $("#tr_"+id+" input[name='name_kultura']").val();
       var agro_uslovia = $("#tr_"+id+" .agro_uslovia option:selected").text();
       var shufr = $("#tr_"+id+" input[name='shufr']").val();
       var edinitsa = $("#tr_"+id+" input[name='edinitsa']").val();
       var work_time = $("#tr_"+id+" input[name='work_time']").val();
       var norm_vurabotka = $("#tr_"+id+" input[name='norm_vurabotka']").val();
       var v_nature = $("#tr_"+id+" input[name='v_nature']").val();
       var na_edinitsu = $("#tr_"+id+" .na_edinitsu").text();
       var all = $("#tr_"+id+" .all ").text();
       var fakt = $("#tr_"+id+" .fakt").text();
       
       /*Получаем количество строк в таблице и минусуем одну посколько там идут заголовки табицы*/
       var rows_table = document.getElementsByClassName('table_two').item(0).getElementsByTagName('tr').length - 1;
         
           
          
       $.ajax({
           /* заносим  данные отчета в базу
            url : 'mvc/controller/Insert_Controller.php',
           */    
          //Передаем данные для формирование xsl файла
           url : 'mvc/controller/Insert_xls.php',
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
                fakt:fakt,
                rows_table:rows_table
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