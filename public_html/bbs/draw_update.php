<?php

include_once('./_common.php');

$ord_id           = isset($_POST['ord_id']) ? $_POST['ord_id'] : "";
$drw_price       = isset($_POST['drw_price']) ? $_POST['drw_price'] : "";
$drw_fee         = isset($_POST['drw_fee']) ? $_POST['drw_fee'] : "";
$drw_real_price = isset($_POST['drw_real_price']) ? $_POST['drw_real_price'] : "";
$drw_addr       = isset($_POST['drw_addr']) ? $_POST['drw_addr'] : "";

if($ord_id == "" || $drw_price == "" || $drw_fee == "" || $drw_real_price == "" || $drw_addr == ""){
    alert("잘못된 경로 입니다." , "http://al-lot.com");
}

$sql = "insert into g5_draw set mem_id = '{$member['mb_id']}' , ord_id = '{$ord_id}' , drw_price = '{$drw_price}' , drw_fee = '{$drw_fee}', drw_real_price = '{$drw_real_price}' , drw_addr = '{$drw_addr}'";
$result = sql_query($sql);

$ndate = date("Y-m-d h:i:s");
$sql = "update g5_order set ord_draw_yn = 'Y' , ord_draw_dttm = '{$ndate}' where ord_id = '{$ord_id}'";
$result = sql_query($sql);

alert("출금 신청이 완료 되었습니다." , "http://al-lot.com");



?>
