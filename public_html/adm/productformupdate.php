<?php
$sub_menu = '400200';
include_once('./_common.php');

if ($w == "u" || $w == "d")
    check_demo();

if ($w == 'd')
    auth_check($auth[$sub_menu], "d");
else
    auth_check($auth[$sub_menu], "w");

check_admin_token();

if ($w == "" || $w == "u")
{
    $sql = " select * from g5_product where prd_id = '$prd_id' ";
    $prd_row = sql_fetch($sql);
}

if ($w == "")
{
    $row = $prd_row;
    if ($row['prd_id'])
        alert("이미 같은 ID로 등록된 내용이 있습니다.");

    $sql = " insert g5_product
                set prd_name = '$prd_name',
                prd_count = {$prd_count} ,
                prd_dcount = {$prd_dcount} ,
                prd_type = '{$prd_type}' ,
                prd_percent = '{$prd_percent}' ,
                prd_sdate = '{$prd_sdate}' ,
                prd_price = {$prd_price}
                ";
    sql_query($sql);
}
else if ($w == "u")
{

}
else if ($w == "d")
{

}

 goto_url("./productlist.php");

?>
