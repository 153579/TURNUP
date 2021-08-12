<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);

if ( ! in_array($_SERVER['REMOTE_ADDR'], array('218.235.233.131', '121.65.80.70')))
{
    exit();
}

include_once(G5_THEME_PATH.'/head.php');

$register_action_url = G5_HTTPS_BBS_URL.'/register_form_update.php';
?>


<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>TRUNUP</span></h2>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">TRUNUP는 당신을 환영합니다.</a>
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

<main class="main">
    <div class="container">
        <div class="new_wrap">
            <div class="new_cont">
                <div class="section-title tt1" data-aos="zoom-out">
                    <h2>New Paradigm with DeFi Systems</h2>
                    <p>TRUNUP</p>
                </div>
                <div class="cont_main">
                    <P class="title_login">LOGIN</P>
                      <form name="flogin" action="<?php echo $login_action_url?>" onsubmit="return flogin_submit(this);" method="post">
                        <input type="text" class="input_text" name="mb_id" id="mb_id" placeholder="ID">
                        <input type="password" class="input_text" name="mb_password" id="mb_password"
                            placeholder="PASSWORD">
                        <button type="submit" class="submit_login">LOGIN</button>
                    </form>
                    <div class="no_pw">
                        <span>계정 정보를 잊으셨나요?</span>
                        <a href="<?php echo G5_BBS_URL ?>/password_lost.php">계정 정보 찾기</a>
                    </div>
                    <div class="new_pp">
                        <button type="submit" class="submit_login join_move">회원가입</button>
                    </div>
                </div>
            </div>


            <div class="new_cont_join none">
                <div class="section-title tt1" data-aos="zoom-out">
                    <h2>New Paradigm with DeFi Systems</h2>
                    <p>TRUNUP JOIN</p>
                </div>
                <div class="cont_main1">
                    <P class="title_login">회원가입</P>
                    <form id="register_act" action="<?php echo $register_action_url ?>" method="post">
                        <input type="text" class="input_text1" name="mb_id" id="mb_id" placeholder="ID">
                        <input type="password" class="input_text1" name="mb_password" id="mb_password"
                            placeholder="PASSWORD">
                        <input type="password" class="input_text1" name="mb_password_re" id="mb_password_re"
                            placeholder="Confirm Password">

                        <div class="input_group">
                            <select class="select_option same-form" name="mb_hp_country" style="margin-right:20px;">
                                <option value="0">+82</option>
                                <option value="1">+86</option>
                                <option value="2">+81</option>
                                <option value="3">+1</option>
                                <option value="4">+84</option>
                            </select>
                            <input class="input_text2" type="text" placeholder="PHONE NUMBER" name="mb_hp"
                                class="mb_hp" id="mb_hp">
                        </div>

                        <div class="input_group">
                            <input class="input_text2" type="text" placeholder="Email" name="mb_email" class="mb_email" id="mb_email">
                            <button type="button" class="select_option cd" id="code_send">인증코드</button>
                            <input type="text" class="input_text1" placeholder="Email Code" name="code" id="code">
                        </div>
                        <button type="button" class="submit_login" onclick="goto_sign();" >JOIN</button>
                    </form>
                </div>
                <div class="no_pw">
                    <span>이미 가입한 계정이 있으신가요?</span>
                    <a href="#" class="login_move">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
	var base_url = "http://tu-up.com/";
	var email_check = false;
	var form = $('#register_act');

	function goto_sign() {

		var hp = $('#mb_hp').val();
		console.log(hp);

		if (!email_check) {
			alert("이메일 인증이 필요합니다.");
			return;
		}

		form[0].submit();

	}

	$('#code_send').on('click', function () {

		var p_email = $('#mb_email').val();
		var p_type = "send_code";

		if (p_email == "") {
			alert("이메일을 입력해주세요.");
			return;
		}

		$.ajax({
			type: "post",
			url: base_url + "/bbs/ajax.mail.php",
			data: {
				email: p_email,
				type: p_type
			},
			dataType: "json",
			success: function (data) {

				if (data.result == "00") {
					alert("인증코드가 발송 되었습니다.");
				} else if (data.result == "405") {
					email_check = false;
					alert("해당 이메일은 존재하는 이메일 입니다..");
				}
			},
			error: function (xhr, textStaus, errorThrown) {
				console.log(xhr);
				console.log(textStaus);
				console.log(errorThrown);
			}
		});

	});

	$('#code').on("input", function () {

		var p_email = $('#mb_email').val();
		var p_code = $('#code').val();
		var p_type = "code_confirm";

		$.ajax({
			type: "post",
			url: base_url + "/bbs/ajax.mail.php",
			data: {
				email: p_email,
				type: p_type,
				code: p_code
			},
			dataType: "json",
			success: function (data) {
				console.log(p_code);
				console.log(data);
				if (data.result == "00") {
					email_check = true;
					alert("인증 되었습니다.");
				} else {
					email_check = false;
				}
			},
			error: function (xhr, textStaus, errorThrown) {
				console.log(xhr);
				console.log(textStaus);
				console.log(errorThrown);
			}
		});
	});

</script>



<script>
    $(".join_move").click(function () {
        $(".new_cont").addClass("none")
        $(".new_cont_join").removeClass("none")
    })

    $(".login_move").click(function () {
        $(".new_cont").removeClass("none")
        $(".new_cont_join").addClass("none")
    })
</script>
<!-- } 로그인 끝 -->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
