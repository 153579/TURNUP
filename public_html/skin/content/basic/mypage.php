<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131', '121.65.80.70')))
{
    exit();
}

$sql = "select sum(pmt.pmt_price) as price from g5_payment as pmt left join g5_order as ord on ord.ord_id = pmt.ord_id left join g5_product as prd on ord.prd_id = prd.prd_id where prd.prd_type = 'A' and ord.ord_draw_yn = 'N' and ord.ord_sc_yn = 'Y' and ord.ord_del_yn = 'N' and ord.mem_id = '{$member['mb_id']}'";
$rs_alt = sql_fetch($sql);

$sql = "select sum(pmt.pmt_price) as price from g5_payment as pmt left join g5_order as ord on ord.ord_id = pmt.ord_id left join g5_product as prd on ord.prd_id = prd.prd_id where prd.prd_type = 'A' and ord.ord_draw_yn = 'N' and ord.ord_sc_yn = 'Y' and ord.ord_del_yn = 'N' and ord.ord_count >= prd.prd_dcount and ord.mem_id = '{$member['mb_id']}'";
$draw_alt = sql_fetch($sql);

$sql = "select sum(pmt.pmt_price) as price from g5_payment as pmt left join g5_order as ord on ord.ord_id = pmt.ord_id left join g5_product as prd on ord.prd_id = prd.prd_id where prd.prd_type = 'B' and ord.ord_draw_yn = 'N' and ord.ord_sc_yn = 'Y' and ord.ord_del_yn = 'N' and ord.mem_id = '{$member['mb_id']}'";
$rs_usd = sql_fetch($sql);

$sql = "select sum(pmt.pmt_price) as price from g5_payment as pmt left join g5_order as ord on ord.ord_id = pmt.ord_id left join g5_product as prd on ord.prd_id = prd.prd_id where prd.prd_type = 'A' and ord.ord_draw_yn = 'N' and ord.ord_sc_yn = 'Y' and ord.ord_del_yn = 'N' and ord.ord_count >= prd.prd_dcount and ord.mem_id = '{$member['mb_id']}'";
$draw_usd = sql_fetch($sql);

$rs_alt['price']= isset($rs_alt['price']) ? $rs_alt['price'] : 0;
$draw_alt['price']= isset($draw_alt['price']) ? $draw_alt['price'] : 0;
$rs_usd['price']= isset($rs_usd['price']) ? $rs_usd['price'] : 0;
$draw_usd['price']= isset($draw_usd['price']) ? $draw_usd['price'] : 0;


?>

<main class="main">
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">MY <span> PAGE</span></h2>
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
                <h2>나의 스테이킹</h2>
            </div>

            <div class="my_stk_wrap">
                <div class="cont_stk_wrap">
                    <p style="text-align:center;">TUN STAKING</p>
                    <div class="my_stk_cont">
                        <div class="stk_cont">
                            <span class="cont_left">나의 총 TUN : </span><span class="cont_right"><?php echo round($rs_alt['price'] , 2); ?> <sup class="sup1">TUN</sup></span>
                        </div>
                        <div class="stk_cont">
                            <span class="cont_left">출금 가능 TUN : </span><span class="cont_right"><?php echo round($draw_alt['price'], 2); ?> <sup class="sup1">TUN</sup></span>
                        </div>
                    </div>
                    <p style="text-align:center;">이용중인 상품이 만기가 되어야 출금이 가능합니다.</p>
                </div>
                <div class="cont_stk_wrap">
                    <p style="text-align:center;">USD STAKING</p>
                    <div class="my_stk_cont">
                        <div class="stk_cont">
                            <span class="cont_left">나의 총 USD : </span><span class="cont_right"><?php echo round($rs_usd['price'], 2); ?> <sup class="sup1">USD</sup></span>
                        </div>
                        <div class="stk_cont">
                            <span class="cont_left">출금 가능 USD : </span><span class="cont_right"><?php echo round($draw_usd['price'], 2); ?> <sup class="sup1">USD</sup></span>
                        </div>
                    </div>
                    <p style="text-align:center;">이용중인 상품이 만기가 되어야 출금이 가능합니다.</p>
                </div>
            </div>

            <br>
            <br>


            <div class="section-title" data-aos="zoom-out">
                <h2>부가 메뉴</h2>
            </div>

            <div class="stk_menu">
                <ul style="display:flex; justify-content:space-around; font-size:15px; font-weight:600">
                    <li><a href="http://tu-up.com/bbs/content.php?co_id=purchase_details">구매 내역</a></li>
                    <li><a href="http://tu-up.com/bbs/content.php?co_id=withdrawal_details">출금 내역</a></li>
                    <li><a href="http://tu-up.com/bbs/content.php?co_id=payment_details_alt">지급 내역(TUN)</a></li>
                    <li><a href="http://tu-up.com/bbs/content.php?co_id=payment_details_usd">지급 내역(USD)</a></li>
                </ul>
            </div>

            <!-- <div class="section-title" data-aos="zoom-out">
                <h2>내가 구매한 스테이킹</h2>
            </div>

            <div class="stk_table">
                <table>
                    <thead>
                        <tr>
                            <th>패키지명</th>
                            <th>구매 일시</th>
                            <th>입금 ALT</th>
                            <th>이율</th>
                            <th>구매당시 단가</th>
                            <th>일 수</th>
                            <th>TXID</th>
                            <th>상태</th>
                            <th>기능</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>asdasdasdasdasdasdasdasdasdsdasdasd</th>
                            <th>8</th>
                            <th><a href="#">출금 신청</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <br>
        <br>
        <br>

        <div class="container">
            <div class="section-title" data-aos="zoom-out">
                <h2>츨금 내역</h2>
            </div>

            <div class="stk_table">
                <table>
                    <thead>
                        <tr>
                            <th>날짜</th>
                            <th>출금 COIN</th>
                            <th>지갑 주소</th>
                            <th>상태</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <br>
        <br>
        <br>

        <div class="container">
            <div class="section-title" data-aos="zoom-out">
                <h2>지급 내역</h2>
            </div>

            <div class="stk_table">
                <table>
                    <thead>
                        <tr>
                            <th>지급 일자</th>
                            <th>플랜 내용</th>
                            <th>이자율</th>
                            <th>보너스</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div> -->
    </section><!-- End Pricing Section -->

</main>
