<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131','121.65.80.70')))
{
    exit();
}

if( ! $member['mb_id']){
    alert("로그인이 필요합니다." , "http://tu-up.com/bbs/login.php");
}

$sql = "select * from g5_order where mem_id = '{$member['mb_id']}' and ord_del_yn = 'N' and ord_sc_yn = 'N' and ord_txid is null";
$ord = sql_fetch($sql);

if($ord['ord_id']){
    alert("거래중인 상품이 있습니다." , "./content.php?co_id=deposit&ord_id={$ord['ord_id']}");
}



$product = getProductList("A");

?>

<main class="main">
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">TURNUP <span> STAKING</span></h2>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

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
                <h2>Staking</h2>
                <p>TURNUP Staking</p>
            </div>

            <div class="staking_top">
                <h2 class="tt_name">청약철회 약정</h2>
                <div class="staking_cont">

                    <p>1) TUN 가격 하락시</p>
                    <p>- 플랫폼 진행 중간 청약 철회시 청약시작일 기준대비 철회하는날에 TUN가격이 하락시 원금에 50%차감후 지급</p>
                    <p>ex) 500,000 = 250,000TUN지급</p><br><br>
                    <p>2) TUN 가격 상승시</p>
                    <p>- 플랫폼 진행 중간 청약 철회시 청약시작일 기준 USD환산값으로 TUN계산후 USD기준값의 50% 차감후 지급</p>
                    <p>ex) 시작기준 가격 $0.03 X 500,000 TUN = $15,000</p>
                    <p>50%차감후 $7,500 = 현재가격이 $0.1 일때</p>
                    <p>7,500 / 0.1 = 75,000TUN 지급</p>
                </div>
                <form action="" style="width:100%; text-align:center">
                    <input type="checkbox" name="buy_check" id="buy_check" style="margin:0 0 8px 0">&nbsp;<label for=""
                        data-i18n="DNBPLUS:J">위 약관에 동의하십니까?</label>
                </form>
            </div>


            <div class="staking_md">
                <p>◆ 예치하신 300,000DNB는 선택하신 플랜의 마지막날 출금이 가능하며 리워드는 매일 오전 정산 지급되고 출금 또한 가능합니다. ◆</p>
            </div>

            <div class="row">
            <?php
                foreach ($product as $k => $v) {
            ?>
                <div class="col-lg-3 col-md-6">
                    <div class="box" data-aos="zoom-in">
                        <h3><? echo $product[$k]['prd_name']; ?></h3>
                        <h4><sup>TUN</sup><? echo number_format($product[$k]['prd_price']); ?><span> / <? echo $product[$k]['prd_dcount']; ?>day</span></h4>
                        <ul>
                            <li>Rate : <? echo $product[$k]['prd_percent']; ?>%</li>
                            <li><? echo $product[$k]['prd_sdate']; ?>~</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="http://al-lot.com/bbs/orderupdate.php?prd_id=<?php echo $product[$k]['prd_id']; ?>" class="btn-buy" >Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>

            <!-- <div id="popup_Wrap" class="nonee">
                <div class="buy_popup">
                    <h2 class="tt_name1">300,000ALT PLAN</h2>
                    <div class="buy_popup_cont">
                        <p>ALT ADDRESS</p>
                        <p id="text1" class="txidAdress">0xbf607bb0ad379c070e80d7cfd788b38b59b31d455e2844d90aaee84eac4b849e</p>
                        <button class="btn_copy" onclick="copyToClipboard('text1')">주소 복사</button>
                        <BR></BR>
                        <p><span>입금하실 ALT : </span><span>300,000ALT</span></p>
                        <P>2시간 이내에 입금하여 주십시오.</P>
                        <P>전송 후 TXID주소를 입력하여 주세요.</P>
                        <form action="">
                            <input type="text" class="txid_text">
                            <div class="bt_wrap">
                                <button type="button">확인</button>
                                <button type="button" class="cancel">취소</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </section><!-- End Pricing Section -->
</main>


<!-- txid 복사하기 스크립트 -->
<script>
    function copyToClipboard(elementId) {

        // 글을 쓸 수 있는 란을 만든다.
        var aux = document.createElement("input");

        // 지정된 요소의 값을 할당 한다.
        aux.setAttribute("value", document.getElementById(elementId).innerHTML);

        // bdy에 추가한다.
        document.body.appendChild(aux);

        // 지정된 내용을 강조한다.
        aux.select();

        // 텍스트를 카피 하는 변수를 생성
        document.execCommand("copy");

        // body 로 부터 다시 반환 한다.
        document.body.removeChild(aux);

        alert("복사 되었습니다.");

    }
</script>



<!-- 약관 체크하고 승인되면 팝업 나오게 스크립트 -->
<script>
        $(".btn-buy").click(function () {

            if ($("#buy_check").is(":checked") == false) {

                alert("약관동의 후 구매신청 가능합니다.");
                return false;
            }
        })
</script>
