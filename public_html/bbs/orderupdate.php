<?php
include_once('./_common.php');

$prd_id = isset($_GET['prd_id']) ? $_GET['prd_id'] : "";
$ord_id = isset($_GET['ord_id']) ? $_GET['ord_id'] : "";
$ord_txid = isset($_GET['ord_txid']) ? $_GET['ord_txid'] : "";
$w = isset($_GET['w']) ? $_GET['w'] : "";

if($prd_id == ""){
    alert("Wrong path" , "./content.php?co_id=product");
}

$sql = "select * from g5_product where prd_id = '{$prd_id}' and prd_del_yn ='N'";
$prd = sql_fetch($sql);

if( ! $prd['prd_id']){
    echo "해당 정보가 존재 하지 않습니다.";
}

if($w == ""){
    $sql = "insert into g5_order set
                mem_id = '{$member['mb_id']}' ,
                prd_id = '{$prd_id}' ,
                ord_price = '{$prd['prd_price']}'";

    $result = sql_query($sql);

    if($result){

        $sql = "select * from g5_order where mem_id = '{$member['mb_id']}' and ord_del_yn = 'N' and ord_sc_yn = 'N' and ord_txid is null";
        $ord = sql_fetch($sql);
        alert("Success" , "./content.php?co_id=deposit&ord_id={$ord['ord_id']}");
    }else {
        alert("Fail" , "./content.php?co_id=product");
    }

}else if($w == "u"){

    if( ! $ord_txid){
        alert("TXID를 입력해주세요." , "./content.php?co_id=deposit&ord_id={$ord['ord_id']}");
    }

    $sql = "select * from g5_order where ord_txid = '{$ord_txid}'";
    $result = sql_query($sql);

    if($result->num_rows > 0 ){
        alert("올바르지 않은 TXID 입니다." , "./content.php?co_id=mypage");
    }

    $sql = "update g5_order set ord_txid = '{$ord_txid}' where ord_id = '{$ord_id}'";
    $result = sql_query($sql);

    if($result){
        alert("TXID 확인 중입니다. 이자는 다음날 10:00 부터 지급됩니다." , "./content.php?co_id=mypage");
    }

}else if($w == "d"){

    $ndate = date("Y-m-d h:i:s");
    $sql ="update g5_order set ord_del_yn = 'Y' , ord_del_dttm = '{$ndate}' where ord_id = '{$ord_id}'";
    $result = sql_query($sql);

    if($result){
        alert("상품을 취소 하였습니다." , "./content.php?co_id=product");
    }

}


?>
