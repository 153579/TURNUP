<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131','121.65.80.70')))
{
    exit();
}

$sql = "select * from g5_order as ord left join g5_product as prd on ord.prd_id = prd.prd_id where ord_del_yn = 'N' and ord.mem_id = '{$member['mb_id']}'";
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

        <div class="section-title" data-aos="zoom-out">
                <h2>내가 구매한 스테이킹</h2>
            </div>

            <div class="stk_table">
                <table>
                    <thead>
                        <tr>
                            <th>패키지명</th>
                            <th>이율</th>
                            <th>구매 원금</th>
                            <th>예상 수익</th>
                            <th>예치 일수</th>
                            <th>남은일수</th>
                            <th>상태</th>
                            <th>기능</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = sql_fetch_array($result)) {

                        $data = array();
                        if($row['prd_type'] == "A"){
                            $data['won'] = "ALT";
                            $iza = round(($row['prd_price'] + ($row['prd_price'] * ($row['prd_percent'] * 0.01))) , 2);
                        }else if($row['prd_type'] == "B"){
                            $data['won'] = "USD";
                        }

                        if($row['ord_draw_sc_yn'] == "Y") $data['state'] = "출금완료";
                        else if($row['ord_draw_yn'] == "Y") $data['state'] = "출금대기중";
                        else if($row['ord_count'] >= $row['prd_dcount']) $data['state'] = "출금가능";
                        else if($row['ord_sc_yn'] == "Y") $data['state'] = "진행중";
                        else if($row['ord_sc_yn'] == "N") $data['state'] = "구매중";

                    ?>
                        <tr>
                            <th><?php echo $row['prd_name']; ?></th>
                            <th><?php echo $row['prd_percent']; ?>%</th>
                            <th><?php echo $row['prd_price'] . " " .$data['won']; ?></th>
                            <th><?php echo $iza. " " .$data['won']; ?></th>
                            <th><?php echo $row['ord_count']; ?></th>
                            <th><?php echo $row['prd_dcount']-$row['ord_count']; ?>  </th>
                            <th><?php echo $data['state']; ?></th>
                            <th>
                                <?php if($data['state'] == "출금가능") { ?>
                                <a href="./content.php?co_id=withdrawal_ap&ord_id=<?php echo $row['ord_id']; ?>">출금하기</a>
                                <?php }?>
                            </th>
                        </tr>

                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
    </section><!-- End Pricing Section -->

</main>
