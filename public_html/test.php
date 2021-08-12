<?php

    if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131')))
    {
        echo "접근할수 없습니다.";
        exit();
    }


    include_once('./common.php');

    /*
    $usd = getUSD();
    print_r2(round($usd));
    */

    //print_r2($config['cf_1']);

    $result = getOrderBook();
    echo $result;










?>
