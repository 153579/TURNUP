<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131','121.65.80.70')))
{
    exit();
}

$ord_id = isset($_GET['ord_id']) ? $_GET['ord_id'] : "";
if( ! $ord_id){
    alert("Wrong path" , "http://al-lot.com/");
}

$sql = "select * from g5_order where ord_id = '{$ord_id}'";
$ord = sql_fetch($sql);

if( ! $ord){
    alert("Wrong path" , "http://al-lot.com/");
}

$sql = "select * from g5_product where prd_id = '{$ord['prd_id']}'";
$prd = sql_fetch($sql);


?>

<main class="main">
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">ALLOT <span> STAKING</span></h2>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Deposit</a>
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




    <div class="container">
       <br>
       <br>
        <div class="section-title" data-aos="zoom-out">
            <h2>Staking</h2>
            <p>Deposit</p>
        </div>

        <form action="./orderupdate.php">
        <input type="hidden" value="u" name="w" id="w">
        <input type="hidden" value="<?php echo $ord['prd_id']; ?>" name="prd_id" id="prd_id">
        <input type="hidden" value="<?php echo $ord['ord_id']; ?>" name="ord_id" id="ord_id">
        <div id="popup_Wrap">
            <div class="buy_popup">
                <h2 class="tt_name1"><?php echo $prd['prd_name']; ?> PLAN</h2>
                <div class="buy_popup_cont">
                    <p>ALT ADDRESS</p>
                    <p id="text1" class="txidAdress"><? echo $config['cf_1']; ?>
                    </p>
                    <button class="btn_copy" onclick="copyToClipboard('text1')">주소 복사</button>
                    <BR></BR>
                    <p><span>입금하실 ALT : </span><span><?php echo number_format($ord['ord_price']); ?>ALT</span></p>
                    <P>2시간 이내에 입금하여 주십시오.</P>
                    <P>전송 후 TXID주소를 입력하여 주세요.</P>
                        <input type="text" class="txid_text" name="ord_txid" id="ord_txid">
                        <div class="bt_wrap">
                            <button type="submit">확인</button>
                            <button type="button" onclick="location.href='./orderupdate.php?w=d&prd_id=<?php echo $ord['prd_id'] ; ?>&ord_id=<?php echo $ord['ord_id']; ?>'"class="cancel">취소</button>
                        </div>
                </div>
            </div>
        </div>
        </form>
    </div>
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

