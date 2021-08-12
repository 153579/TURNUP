<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

// 자신만의 코드를 넣어주세요.

if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131', '121.65.80.70')))
{
    exit();
}
?>
