<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131','121.65.80.70')))
{
    exit();
}

$sql = "select * from g5_payment as pmt left join g5_order as ord on pmt.ord_id = ord.ord_id left join g5_product as prd on prd.prd_id = ord.prd_id where pmt.mem_id = '{$member['mb_id']}' and pmt.pmt_del_yn = 'N' order by pmt.pmt_reg_dttm desc";
$result = sql_query($sql);


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

        <div class="container">
            <div class="section-title" data-aos="zoom-out">
                <h2>지급 내역 (TUN)</h2>
            </div>

            <div class="stk_table">
                <table>
                    <thead>
                        <tr>
                            <th>지급 일자</th>
                            <th>이자율</th>
                            <th>보너스</th>
                            <th>잔액</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = sql_fetch_array($result)) {

                        $data = array();
                        if($row['prd_type'] == "A"){
                            $data['won'] = "TUN";
                        }else if($row['prd_type'] == "B"){
                            $data['won'] = "USD";
                        }
                    ?>
                        <tr>
                            <th><?php echo substr($row['pmt_reg_dttm'] , 0 ,10); ?></th>
                            <th><?php echo $row['prd_percent']."%";?></th>
                            <th><?php echo $row['pmt_price'] . " " .$data['won'];?></th>
                            <th><?php echo $row['pmt_balance'] . " " .$data['won'];?></th>
                        </tr>
                    <? } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- End Pricing Section -->

</main>
