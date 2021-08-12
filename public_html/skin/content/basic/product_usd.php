<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131')))
{
    exit();
}


if( ! $member['mb_id']){
    alert("로그인이 필요합니다." , "http://tu-up.com/bbs/login.php");
}


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

                    <p>- 플랫폼 진행 중간 청약 철회시 청약시작일 기준대비 철회하는날 원금에 50%차감후 지급</p>
                    <p>ex) 100,000USD X 50% = 50,000USD 지급</p><br>
                    <p>ex) 50,000USD X 50% = 25,000USD 지급</p><br>
                    <p>ex) 10,000USD X 50% = 5,000USD 지급</p><br>
                </div>
                <form action="" style="width:100%; text-align:center">
                    <input type="checkbox" name="buy_check" id="buy_check" style="margin:0 0 8px 0">&nbsp;<label for=""
                        data-i18n="DNBPLUS:J">위 약관에 동의하십니까?</label>
                </form>
            </div>

            <div class="staking_md">
                <p>◆ 예치하신 USD로 환산된 TUN수량은 스테이킹 마지막날 출금이 가능하며 리워드는 매일 오전 정산 지급되고 출금 또한 가능합니다. ◆</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="box" data-aos="zoom-in">
                        <h3>50$ Plan</h3>
                        <h4><sup>$</sup>50<span> / 90day</span></h4>
                        <ul>
                            <li>Rate : 4%</li>
                            <li>2020.12.17~</li>
                            <li>90Day</li>
                        </ul>
                        <div class="btn-wrap">
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <h3>100$ Plan</h3>
                        <h4><sup>$</sup>100<span> / 90day</span></h4>
                        <ul>
                            <li>Rate : 6%</li>
                            <li>2020.12.17~</li>
                            <li>90Day</li>
                        </ul>
                        <div class="btn-wrap">
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <h3>200$ Plan</h3>
                        <h4><sup>$</sup>200<span> / 180day</span></h4>
                        <ul>
                            <li>Rate : 8%</li>
                            <li>2020.12.17~</li>
                            <li>180Day</li>
                        </ul>
                        <div class="btn-wrap">
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span class="advanced">Recommend</span>
                        <h3>300$ Plan</h3>
                        <h4><sup>$</sup>300<span> / Year</span></h4>
                        <ul>
                            <li>Rate : 10%</li>
                            <li>2020.12.17~</li>
                            <li>365Day</li>
                        </ul>
                        <div class="btn-wrap">
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div id="popup_Wrap" class="nonee">
                <div class="buy_popup">
                    <h2 class="tt_name1">200USD PLAN</h2>
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
            } else {
                alert("신청되었습니다.")
                $("#popup_Wrap").removeClass("nonee");
            }

        })

        $(".cancel").click(function () {
            alert("취소되었습니다.")
            $("#popup_Wrap").addClass("nonee");
        })
</script>
