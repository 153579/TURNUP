<?php
    $sub_menu = '400400';
    include_once('./_common.php');

    $type = isset($_GET['type']) ? $_GET['type'] : "";
    $ord_id = isset($_GET['ord_id']) ? $_GET['ord_id'] : "";
    $drw_id = isset($_GET['drw_id']) ? $_GET['drw_id'] : "";

    $ndate = date("Y-m-d h:i:s");

    if($type == "sc"){
        $sql = "update g5_draw set drw_sc_yn = 'Y' , drw_sc_dttm = '{$ndate}' where drw_id = '{$drw_id}'";
        $result = sql_query($sql);

        $sql = "update g5_order set ord_draw_sc_yn = 'Y' , ord_draw_sc_dttm = '{$ndate}' where ord_id = '{$ord_id}'";
        $result = sql_query($sql);

        if($result){
            alert("정상처리 되었습니다.", "./drawlist.php");
        }
    }

?>
