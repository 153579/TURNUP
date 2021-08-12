<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131','121.65.80.70')))
{
    exit();
}

$ord_id = isset($_GET['ord_id']) ? $_GET['ord_id'] : "";

if($ord_id == ""){
    alert("잘못된 경로 입니다." , "http://al-lot.com/");
}

$sql = "select * from g5_order as ord left join g5_product as prd on ord.prd_id = prd.prd_id where ord_id = '{$ord_id}'";
$result = sql_fetch($sql);

if($result['ord_id']){
    if($result['ord_count'] < $result['prd_dcount']){
        alert("기간이 부족한 상품 입니다." , "http://al-lot.com/");
    }
}else {
    alert("잘못된 경로 입니다." , "http://al-lot.com/");
}

$now_alt = round(getOrderBook());

$fee_krw = 20000;
$fee_alt = round($fee_krw / $now_alt);
$won = "";
$iza = "";
if($result['prd_type'] == "A"){
    $won = "ALT";
    $iza = round($result['prd_price'] * ($result['prd_percent'] * 0.01));
}else if($result['prd_type'] == "B"){
    $won = "USD";
}

?>

<main class="main">
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">MY <span> PAGE</span></h2>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>TURNUP</h2>
                <p>MY PAGE</p>
            </div>

            <br>
            <br>

            <div class="section-title" data-aos="zoom-out">
                <h2>유의사항</h2>
            </div>

            <div class="top_cont">
                <p>출금 신청시 유의사항</p>
                <div class="top_cont_text">
                    <p>구매하신 패키지는 입금, 출금 모두 ALT로 환산하여 이루어 집니다.</p>
                    <p>모든 패키지의 출금은 원금을 포함한 금액을 출금합니다.</p>
                    <p>모든 패키지는 출금 수수료가 존재합니다.</p>
                </div>
                <div class="ap_ok">
                    <input type="checkbox" name="" id="ap_ok_bt" class="ap_ok_bt"><label for="">위 유의사항에 동의 하십니까?</label>
                </div>
            </div>
            <br>
            <br>
            <div class="section-title" data-aos="zoom-out">
                <h2>패키지 상세내역</h2>
            </div>
            <div class="mid_cont">
                <div class="mid_cont_text">
                    <p><span class="cont_left">패키지명</span><span class="cont_right"><?php echo $result['prd_name']; ?></span></p>
                    <p><span class="cont_left">예치 기간</span><span class="cont_right"><?php echo $result['prd_dcount']; ?> DAY</span></p>
                    <p><span class="cont_left">예치 <?php echo $won; ?></span><span class="cont_right"><?php echo number_format($result['prd_price']) . " " .$won ; ?></span></p>
                    <p><span class="cont_left">예치 수익</span><span class="cont_right"><?php echo number_format($iza) . " " . $won ; ?></span></p>
                </div>
            </div>
            <br>
            <br>
            <div class="section-title" data-aos="zoom-out">
                <h2>출금 신청</h2>
            </div>
            <div class="bt_cont">
                <div class="bt_cont_text">
                    <form action="./draw_update.php" method="post">
                        <input type="hidden" name="ord_id" value="<?php echo $ord_id; ?>">
                        <div class="content">
                            <P>예치 금액</P>
                            <div class="iplb">
                                <input type="text" value="<?php echo ($iza+$result['prd_price']); ?>" name="drw_price"><label for=""><?php echo $won;?></label>
                            </div>
                        </div>
                        <div class="content">
                            <P>출금 수수료</P>
                            <div class="iplb">
                                <input type="text" value="<?php echo $fee_alt; ?>" name="drw_fee"><label for=""><?php echo $won;?></label>
                            </div>
                        </div>
                        <div class="content">
                            <P>최종 출금</P>
                            <div class="iplb">
                                <input type="text" value="<?php echo (($iza+$result['prd_price']) - $fee_alt)?>" name="drw_real_price" ><label for=""><?php echo $won;?></label>
                            </div>
                        </div>
                        <div class="content">
                            <P>출금 주소</P>
                            <input type="text" class="apip" name="drw_addr">
                        </div>
                        <div class="ok_btn">
                            <input type="submit" value="신청하기" class="okbt">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section><!-- End Pricing Section -->

</main>


<!-- 유의사항 체크하고 승인되면 팝업 나오게 스크립트 -->
<script>
        $(".okbt").click(function () {

            if ($("#ap_ok_bt").is(":checked") == false) {

                alert("유의사항에 동의 후 출금신청이 가능합니다.");
                return false;
            }
        })
</script>
