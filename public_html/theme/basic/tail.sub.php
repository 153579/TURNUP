<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?>
<!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

<?php run_event('tail_sub'); ?>

<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://tu-up.com/theme/basic/vendor/jquery/jquery.min.js"></script>
<script src="http://tu-up.com/theme/basic/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://tu-up.com/theme/basic/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="http://tu-up.com/theme/basic/vendor/php-email-form/validate.js"></script>
<script src="http://tu-up.com/theme/basic/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="http://tu-up.com/theme/basic/vendor/venobox/venobox.min.js"></script>
<script src="http://tu-up.com/theme/basic/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="http://tu-up.com/theme/basic/vendor/aos/aos.js"></script>
<script src="http://tu-up.com/theme/libs/jquery/dist/jquery.min.js"></script>
<script src="http://tu-up.com/theme/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://tu-up.com/theme/libs/svg-injector/dist/svg-injector.min.js"></script>
<script src="http://tu-up.com/theme/libs/feather-icons/dist/feather.min.js"></script>
<!-- Quick JS -->
<script src="assets/js/quick-website.js"></script>

<!-- Template Main JS File -->
<script src="http://tu-up.com/js/quick-website.js"></script>
<script src="http://tu-up.com/theme/basic/script/jquery.easypiechart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/i18next/1.9.0/i18next.min.js" type="text/javascript"></script>
<script src="http://tu-up.com/theme/basic/script/lang.js"></script>

<script>
    $('.chart1').easyPieChart({
        barColor: '#2e82ff', //차트가 그려질 색
        trackColor: '#ccc', // 차트가 그려지는 트랙의 기본 배경색(chart1 의 회색부분)
        // scaleColor: 'rgb(49, 52, 55)', // 차트 테두리에 그려지는 기준선 (chart2	의 테두리 선)
        lineCap: 'round', // 차트 선의 모양 chart1 butt / chart2 round / chart3 square
        lineWidth: 15, // 차트 선의 두께
        size: 150, // 차트크기
        animate: 300, // 그려지는 시간 
        onStart: $.noop,
        onStop: $.noop
    });
</script>


<script>
    function clickBtnpu() {
        $(".cancel").click(function () {
            $("#popup_Wrap").addClass("none");
        })
        $(".btn-buy").click(function () {
            alert("신청되었습니다.")
            $("#popup_Wrap").removeClass("none");
        })

    }
</script>

</body>

</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. ?>