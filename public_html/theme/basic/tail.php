<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<footer class="position-relative" id="footer-main">
    <div class="footer pt-lg-7 footer-dark bg-dark">
        <!-- SVG shape -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px"
                viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve"
                class=" fill-section-secondary">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Footer -->
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <!-- Theme's logo -->
                    <a href="index.php">
                        <img alt="Image placeholder" src="../img/logo3.png" id="footer-logo">
                    </a>
                    <!-- Webpixels' mission -->
                    <p class="mt-4 text-sm opacity-8 pr-lg-4" data-i18n="INDEX:1" style="word-break:keep-all;">
                        with products optimized for the user's needs.</p>
                    <!-- Social -->
                    <ul class="nav mt-4">

                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <i class="fab fa-telegram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <i class="fab fa-medium"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                    <div class="copyright">
                        &copy; Suite 305, Griffith Corporate Centre P.O.Box 1510, Beachmont Kingstown St. Vincent and
                        Grenadines
                        Expansion Network System Ltd. <strong><span></span></strong>
                    </div>
            </div>
        </div>
    </div>
</footer>
</body>

<script>
    $(function () {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie(
            "ck_font_resize_add_class"));
    });
</script>

<script>
    $(function () {
        $(window).scroll(function () { //스크롤하면 아래 코드 실행
            var num = $(this).scrollTop(); // 스크롤값
            if (num > 100) { // 스크롤을 36이상 했을 때
                $(".navbar").css("position", "fixed");
                $(".navbar").css("width", "100%");
            } else {
                $(".navbar").css("position", "absolute");
            }
        });
    });
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>