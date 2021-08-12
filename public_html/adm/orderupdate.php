<?php
    $sub_menu = '400300';
    include_once('./_common.php');

    $type = isset($_GET['type']) ? $_GET['type'] : "";
    $ord_id = isset($_GET['ord_id']) ? $_GET['ord_id'] : "";

    $ndate = date("Y-m-d h:i:s");

    if($type == "sc"){
        $sql = "update g5_order set ord_sc_yn = 'Y' , ord_sc_dttm = '{$ndate}' , ord_txid = '관리자승인' where ord_id = '{$ord_id}'";
        $result = sql_query($sql);

        if($result){
            alert("정상처리 되었습니다.", "./orderlist.php");
        }
    }

?>
