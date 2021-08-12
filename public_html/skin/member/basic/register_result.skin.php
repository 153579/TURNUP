<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<main class="main">
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Congratulations</h2>
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
    <div class="container">
        <br>
        <br>
        <div class="section-title" data-aos="zoom-out">
            <h2>Congratulations!</h2>
            <p>회원가입을 축하합니다!</p>
        </div>

        <div id="reg_result" class="register">
            <p class="reg_result_p">
                <!-- <i class="fa fa-gift" aria-hidden="true"></i><br> -->
                <strong><?php echo get_text($mb['mb_id']); ?></strong>님의 회원가입을 진심으로 축하합니다.
            </p>
            <br>

            <?php if (is_use_email_certify()) {  ?>
            <p class="result_txt">
                회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
                발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.
            </p>
            <br>
            <div id="result_email">
                <span>아이디</span>
                <strong><?php echo $mb['mb_id'] ?></strong><br>
                <span>이메일 주소</span>
                <strong><?php echo $mb['mb_email'] ?></strong>
            </div>
            <p>
                이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.
            </p>
            <?php }  ?>

            <br>
            <p class="result_txt">
                회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.<br>
                <br>
                아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.
            </p>

            <br>
            <p class="result_txt">
                회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.<br>
                감사합니다.
            </p>

            <p class="result_txt">
                -ALLOT-
            </p>
        </div>
        <!-- } 회원가입결과 끝 -->
        <div class="btn_confirm_reg">
            <a href="<?php echo G5_URL ?>/" class="reg_btn_submit">메인으로</a>
        </div>
    </div>
</main <!-- 회원가입결과 시작 { -->