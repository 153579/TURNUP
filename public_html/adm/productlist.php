<?php
$sub_menu = "400200";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$sql_common = " from g5_product ";

$sql_search = " where (1) ";
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
    $sst = "prd_reg_dttm";
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


$g5['title'] = '상품관리';
include_once('./admin.head.php');

?>

<div class="btn_fixed_top">
    <a href="./productform.php" class="btn btn_01">내용 추가</a>
</div>

<div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <thead>
        <th>상품이름</th>
        <th>상품타입</th>
        <th>상품가격</th>
        <th>이자지급일수</th>
        <th>이자율</th>
        <th>상품시작일수</th>
        <th>상품갯수제한</th>
        <th>상품사용여부</th>
    </thead>
    <tbody>
            <?php
            for ($i=0; $row=sql_fetch_array($result); $i++) {

                switch($row['prd_use']) {
                    case "Y";
                        $row['prd_use'] = "사용중";
                    break;
                    case "N";
                        $row['prd_use'] = "미사용11";
                    break;
                }
            ?>

            <tr>
                <td><?php echo $row['prd_name'] ?></td>
                <td><?php echo $row['prd_type'] ?></td>
                <td><?php echo number_format($row['prd_price']); ?></td>
                <td><?php echo $row['prd_dcount'] ?></td>
                <td><?php echo $row['prd_percent'] ?>%</td>
                <td><?php echo $row['prd_sdate'] ?></td>
                <td><?php echo $row['prd_count'] ?></td>
                <td><?php echo $row['prd_use'] ?></td>
            </tr>

        <?php } ?>
    </tbody>
    </table>
</div>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, '?'.$qstr.'&amp;page='); ?>

<?php
include_once ('./admin.tail.php');
?>
