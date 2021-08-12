<?php
$sub_menu = '400200';
include_once('./_common.php');
include_once(G5_EDITOR_LIB);

auth_check($auth[$sub_menu], "w");

$html_title = "내용";
$g5['title'] = $html_title.' 관리';
$readonly = '';

if ($w == "u")
{
    $html_title .= " 수정";
    $readonly = " readonly";

    $sql = " select * from g5_product where prd_id = '$prd_id' ";
    $data = sql_fetch($sql);
    if ( ! $data['prd_id'])
        alert('등록된 자료가 없습니다.');
}
else
{
    $html_title .= ' 입력';
}

include_once (G5_ADMIN_PATH.'/admin.head.php');
?>

<form name="frmcontentform" action="./productformupdate.php" method="post" enctype="MULTIPART/FORM-DATA" >
<input type="hidden" name="w" value="<?php echo $w; ?>">
<input type="hidden" name="co_html" value="1">
<input type="hidden" name="prd_id" value="<?php echo $prd_id; ?>">
<input type="hidden" name="token" value="">

<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <colgroup>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
    <tr>
        <th scope="row"><label for="prd_name">상품이름</label></th>
        <td>
            <input type="text" value="<?php echo $data['prd_name']; ?>" name="prd_name" id ="prd_name" class="frm_input">
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="prd_type">상품타입</label></th>
        <td>
            <?php
                if($data['prd_type']){
                    echo "한번정한 타입은 바꿀수 없습니다.";
                }else {
            ?>
            <select name="prd_type" id="prd_type">
                <option value="A">A (allot 기반)</option>
                <option value="B">B (usdt 기반)</option>
            </select>
            <?php
                }
            ?>

        </td>
    </tr>
    <tr>
        <th scope="row"><label for="prd_count">상품갯수제한</label></th>
        <td>
            <input type="text" value="<?php echo $data['prd_count']; ?>" name="prd_count" id ="prd_count" class="frm_input">
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="prd_dcount">상품유지일수 (이자지급일수)</label></th>
        <td>
            <input type="text" value="<?php echo $data['prd_dcount']; ?>" name="prd_dcount" id ="prd_dcount" class="frm_input">
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="prd_price">상품금액</label></th>
        <td>
            <input type="text" value="<?php echo $data['prd_price']; ?>" name="prd_price" id ="prd_price" class="frm_input">
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="prd_percent">상품이자</label></th>
        <td>
            <input type="text" value="<?php echo $data['prd_percent']; ?>" name="prd_percent" id ="prd_percent" class="frm_input">
        </td>
    </tr>
     <tr>
        <th scope="row"><label for="prd_sdate">시작일</label></th>
        <td>
            <?php
                if($data['prd_sdate']){
                    echo "한번정한 시작일은 바꿀수 없습니다.";
                }else {
            ?>
             <input type="date" value="<?php echo $data['prd_sdate']; ?>" name="prd_sdate" id ="prd_sdate" class="frm_input">
            <?php
            }
            ?>

        </td>
    </tr>
    </tbody>
    </table>
</div>

<div class="btn_fixed_top">
    <a href="./productlist.php" class="btn btn_02">목록</a>
    <input type="submit" value="확인" class="btn btn_submit" accesskey="s">
</div>

</form>

<?php
// [KVE-2018-2089] 취약점 으로 인해 파일 경로 수정시에만 자동등록방지 코드 사용
?>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');
?>
