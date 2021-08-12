<?php
$sub_menu = "400400";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$sql_common = " from g5_draw ";

$sql_search = " where drw_del_yn = 'N' ";
if ($stx) {
    $sql_search .= " and ( ";
    switch ($sfl) {
        default :
            $sql_search .= " ({$sfl} like '{$stx}%') ";
            break;
    }
    $sql_search .= " ) ";
}

if (!$sst) {
    $sst = "drw_reg_dttm";
    $sod = "desc";
}

$sql_order = " order by {$sst} {$sod} ";

$sql = " select count(*) as cnt {$sql_common} {$sql_search} {$sql_order} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql = " select * {$sql_common} {$sql_search} {$sql_order} limit {$from_record}, {$rows} ";
echo $sql;
$result = sql_query($sql);


$g5['title'] = '출금관리';
include_once('./admin.head.php');

?>

<div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <thead>
        <th>회원아이디</th>
        <th>신청일자</th>
        <th>입금액</th>
        <th>입금주소</th>
        <th>승인여부</th>
        <th>승인일자</th>
        <th>기능</th>
    </thead>
    <tbody>
            <?php
            for ($i=0; $row=sql_fetch_array($result); $i++) {

                $str = "";
                switch($row['drw_sc_yn']) {
                    case "Y";
                        $row['drw_sc_yn'] = "승인";
                    break;
                    case "N";
                        $row['drw_sc_yn'] = "미승인";
                         $str = "관리자 승인";
                    break;
                }

            ?>

            <tr>
                <td><?php echo $row['mem_id'] ?></td>
                <td><?php echo $row['drw_reg_dttm'] ?></td>
                <td><?php echo $row['drw_real_price'] ?></td>
                <td><?php echo $row['drw_addr'] ?></td>
                <td><?php echo $row['drw_sc_yn'] ?></td>
                <td><?php echo $row['drw_sc_dttm'] ?></td>
                <td>
                <?php
                    if($str == "관리자 승인"){
                ?>
                    <a href="./drawupdate.php?type=sc&drw_id=<?php echo $row['drw_id']; ?>&ord_id=<?php echo $row['ord_id']; ?>">관리자승인</a>
                <?php } ?>
                </td>
            </tr>

        <?php } ?>
    </tbody>
    </table>
</div>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, '?'.$qstr.'&amp;page='); ?>

<?php
include_once ('./admin.tail.php');
?>
