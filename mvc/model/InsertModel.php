<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InsertModel
 *
 * @author nestor
 */
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

require_once '../core/Model.php';

class InsertModel extends Model {
      
    /*Заносим введеные данные в базу*/
    function insert_bd($veddennue_dannue) {
     $stmt = $this->connect()->prepare("INSERT INTO product_list_otchet (id, year, monts,sg,uchet,fio,tab_number,marka_car,
                            int_monts,name_kultura,agro_uslovia,shufr,edinitsa,work_time,norm_vurabotka,v_nature,na_edinitsu,all_vse,fakt) 
                            VALUES (:id, :year, :monts,:sg,:uchet,:fio,:tab_number,:marka_car,:int_monts,
                            :name_kultura,:agro_uslovia,:shufr,:edinitsa,:work_time,:norm_vurabotka,:v_nature,:na_edinitsu,:all_vse,:fakt)");
    $stmt->bindParam(':id', $veddennue_dannue['id_str']);
    $stmt->bindParam(':year', $veddennue_dannue['year']);
    $stmt->bindParam(':monts', $veddennue_dannue['monts']);
    $stmt->bindParam(':sg', $veddennue_dannue['sg']);
    $stmt->bindParam(':uchet', $veddennue_dannue['uchet']);
    $stmt->bindParam(':fio', $veddennue_dannue['fio']);
    $stmt->bindParam(':tab_number', $veddennue_dannue['tab_number']);
    $stmt->bindParam(':marka_car', $veddennue_dannue['marka_car']);
    $stmt->bindParam(':int_monts', $veddennue_dannue['int_monts']);
    $stmt->bindParam(':name_kultura', $veddennue_dannue['name_kultura']);
    $stmt->bindParam(':agro_uslovia', $veddennue_dannue['agro_uslovia']);
    $stmt->bindParam(':shufr', $veddennue_dannue['shufr']);
    $stmt->bindParam(':edinitsa', $veddennue_dannue['edinitsa']);
    $stmt->bindParam(':work_time', $veddennue_dannue['work_time']);
    $stmt->bindParam(':norm_vurabotka', $veddennue_dannue['norm_vurabotka']);
    $stmt->bindParam(':v_nature', $veddennue_dannue['v_nature']);
    $stmt->bindParam(':na_edinitsu', $veddennue_dannue['na_edinitsu']);
    $stmt->bindParam(':all_vse', $veddennue_dannue['all']);
    $stmt->bindParam(':fakt', $veddennue_dannue['fakt']);
    $stmt->execute();
   
    }
}

