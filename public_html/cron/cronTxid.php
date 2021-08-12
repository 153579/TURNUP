<?php
    include_once('/home/allot/public_html/common.php');

    $is_test = "real";

    $result = TokenInfo($config['cf_1']);
    $token_list = $result['result'];

    $sql = "select * from g5_order where ord_count = 0 and ord_del_yn = 'N' and ord_sc_yn = 'N' and ord_txid is not null";
    $result = sql_query($sql);

    $ndate = date("Y-m-d h:i:s");

    if($result->num_rows > 0){
        while($row = sql_fetch_array($result)){

            foreach ($token_list as $k => $v) {
                if($row['ord_txid'] == $v['hash']){
                    $v['value'] = $v['value'] * 0.00000001;
                    echo "전송받음 금액 : ". $v['value'] ."<br>";

                    $v['value'] = ($is_test == "test") ? "10000" : $v['value'];

                    //테스트

                    if($row['ord_price'] <= $v['value']){
                        echo "금액확인 완료 : ". $v['value'] ."<br>";

                        $sql = "update g5_order set ord_sc_yn = 'Y' , ord_sc_dttm = '{$ndate}'";
                        $rs = sql_query($sql);

                        $sql = "insert into g5_tlog set mem_id = '{$row['mem_id']}' , tlog_txid = '{$row['ord_txid']}', tlog_price = '{$v['value']}' , tlog_bnumber = '{$v['blockNumber']}'";
                        $rs = sql_query($sql);

                    }
                }
            }

        }
    }else {
        echo "업데이트 할 회원이 없습니다. <br>";
    }






?>
