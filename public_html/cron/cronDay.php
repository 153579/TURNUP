<?php
    include_once('/home/allot/public_html/common.php');

    $sql = "select * from g5_order as ord left join g5_product as prd on ord.prd_id = prd.prd_id where ord_sc_yn = 'Y' and ord_del_yn = 'N' and ord.ord_count < prd.prd_dcount";
    $result = sql_query($sql);

    while($row = sql_fetch_array($result)){

        if($row['prd_type'] == "A"){

            $sql = "select * from g5_payment where ord_id = '{$row['ord_id']}' and pmt_del_yn = 'N' order by pmt_reg_dttm desc";
            $pmt = sql_fetch($sql);

            $iza = round(($row['prd_price'] + ($row['prd_price'] * ($row['prd_percent'] * 0.01))) / $row['prd_dcount'] , 2);
            $balance = $pmt['pmt_balance'] + $iza;

            $sql = "insert into g5_payment set ord_id = '{$row['ord_id']}' , mem_id = '{$row['mem_id']}' , pmt_price = '{$iza}' , pmt_balance = '{$balance}'";
            $rs = sql_query($sql);

            $ord_count = $row['ord_count'] + 1;
            $sql = "update g5_order set ord_count = '{$ord_count}' where ord_id = '{$row['ord_id']}'";
            $rs = sql_query($sql);

        }else if($row['prd_type'] == "B"){
            //usd 환율 가져오기
        }
    }






?>
