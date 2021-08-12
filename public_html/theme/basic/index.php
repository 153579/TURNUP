<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');


$product = getProductList("A");
$product_usd = getProductList("B");

?>

<section class="slice py-8">
    <div class="container py-5">
        <div class="row row-grid align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2 text-center">
                <!-- Image -->
                <figure class="w-100">
                    <img alt="Image placeholder" src="../img/illustration-7.svg" class="img-fluid mw-md-120"
                        style="filter: drop-shadow(0 0 0.75rem rgba(31, 45, 61, 15%));">
                </figure>
            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                <!-- Heading -->
                <h1 class="display-4 text-center text-md-left mb-3"
                    style="text-shadow: 3px 3px rgb(31 45 61 / 20%); font-size:4.5rem">
                    Welcome to<strong class="text-primary"><BR>TURNUP</strong>
                </h1>
                <!-- Text -->
                <p class="lead text-center text-md-left text-muted" style="text-shadow: 1px 1px rgb(31 45 61 / 20%);"
                    data-i18n="INDEX:1">

                </p>
            </div>
        </div>
    </div>
    <div class="shape-container shape-line shape-position-bottom">
        <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100"
            style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
            <polygon points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</section>
<section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary">
    <div class="container">
        <!-- Title -->
        <!-- Section title -->
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-6">
                <span class="badge badge-soft-success badge-pill badge-lg">
                    Get started
                </span>
                <h2 class=" mt-4">WHO WE ARE</h2>
                <div class="mt-2">
                    <p class="lead lh-180" data-i18n="INDEX:5"></p>
                </div>
            </div>
        </div>
        <!-- Card -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body pb-5">
                        <div class="pt-4 pb-5">
                            <img src="../img/illustration-5.svg" class="img-fluid img-center" style="height: 150px;"
                                alt="Illustration" />
                        </div>
                        <p class="text-muted mb-0" data-i18n="INDEX:6"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body pb-5">
                        <div class="pt-4 pb-5">
                            <img src="../img/illustration-6.svg" class="img-fluid img-center" style="height: 150px;"
                                alt="Illustration" />
                        </div>
                        <p class="text-muted mb-0" data-i18n="INDEX:7"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body pb-5">
                        <div class="pt-4 pb-5">
                            <img src="../img/illustration-1.svg" class="img-fluid img-center" style="height: 150px;"
                                alt="Illustration" />
                        </div>
                        <p class="text-muted mb-0" data-i18n="INDEX:8"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-6">
                <div class="mt-2">
                    <p class="lead lh-180" data-i18n="INDEX:9"></p>
                    <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="#"
                        onclick="window.open('/theme/basic/wp/TURNUP-en01.pdf')" target="_blank">
                        WHITE PAPER EN
                    </a>
                    <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="#"
                        onclick="window.open('/theme/basic/wp/TURNUP-ko01.pdf')" target="_blank">
                        WHITE PAPER KR
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice slice-lg">
    <div class="container">
        <div class="py-6">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <h5 class="h3" data-i18n="INDEX:10"></h5>
                    <p class="lead my-4" data-i18n="INDEX:13">

                    </p>
                    <ul class="list-unstyled mb-0">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0" data-i18n="INDEX:14"> </span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0" data-i18n="INDEX:15"></span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0" data-i18n="INDEX:16"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p class="lead my-4" data-i18n="INDEX:17">

                    </p>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="card mb-0 mr-lg-5">
                        <div class="card-body p-2">
                            <img alt="Image placeholder" src="../img/tu1.png" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h5 class="h3" data-i18n="INDEX:11"></h5>
                    <p class="lead my-4" data-i18n="INDEX:18">

                    </p>
                    <ul class="list-unstyled mb-0">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0" data-i18n="INDEX:19"></span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0" data-i18n="INDEX:20"></span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0" data-i18n="INDEX:21"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p class="lead my-4" data-i18n="INDEX:22">
                        
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-0 ml-lg-5">
                        <div class="card-body p-2">
                            <img alt="Image placeholder" src="../img/tu2.png" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <h5 class="h3" data-i18n="INDEX:12"></h5>
                    <p class="lead my-4" data-i18n="INDEX:23">
                        
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0" data-i18n="INDEX:24"></span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0" data-i18n="INDEX:25"></span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0" data-i18n="INDEX:26"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="card mb-0 mr-lg-5">
                        <div class="card-body p-2">
                            <img alt="Image placeholder" src="../img/tu.png" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice slice-lg bg-section-dark pt-5 pt-lg-8">
    <!-- SVG separator -->
    <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
        <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100"
            style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
            <polygon points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <!-- Container -->
    <div class="container position-relative zindex-100">
        <div class="col">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <div class="mt-4 mb-6">
                        <h2 class="h1" style="color:#FFAA00">
                            WHY DEFI?
                        </h2>
                        <h4 class="text-white mt-3">ADVANTAGES OF DEFI</h4>
                        <!-- Play button -->
                        <!-- <a href="#" class="btn btn-primary btn-icon mt-4">WHITE PAPER</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice pt-0">
    <div class="container position-relative zindex-100">
        <div class="row">
            <div class="col-xl-4 col-sm-6 mt-sm-n7">
                <div class="card">
                    <div class="d-flex p-5">
                        <div class="pl-4">
                            <h5 class="lh-130" data-i18n="INDEX:32"></h5>
                            <p class="text-muted mb-0" data-i18n="INDEX:33" style="word-break:keep-all;">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 col-sm-6 mt-xl-n7">
                <div class="card">
                    <div class="d-flex p-5">
                        <div class="pl-3">
                            <h5 class="lh-130" data-i18n="INDEX:34"></h5>
                            <p class="text-muted mb-0" data-i18n="INDEX:35" style="word-break:keep-all;">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mt-n7">
                <div class="card">
                    <div class="d-flex p-5">
                        <div class="pl-4">
                            <h5 class="lh-130" data-i18n="INDEX:30"></h5>
                            <p class="text-muted mb-0" data-i18n="INDEX:31" style="word-break:keep-all;">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="d-flex p-5">
                        <div class="pl-4">
                            <h5 class="lh-130" data-i18n="INDEX:36"></h5>
                            <p class="text-muted mb-0" data-i18n="INDEX:37" style="word-break:keep-all;">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="d-flex p-5">
                        <div class="pl-4">
                            <h5 class="lh-130" data-i18n="INDEX:38"></h5>
                            <p class="text-muted mb-0" data-i18n="INDEX:39" style="word-break:keep-all;">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice slice-lg">
    <div class="container">
        <h2 class="title" style="text-align:center">BUDGET DISTRIBUTION</h2>
        <div class="row" style="width: 100%; margin:0 auto;">
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                    aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">30% Complete (success)</span>
                </div>
                <span class="progress-type">Platform</span>
                <span class="progress-completed">40%</span>
            </div>
            <p style="width: 90%; margin: 0 auto 10px auto; word-break:keep-all;" data-i18n="INDEX:46">
                
            </p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                    style="width: 30%;">
                    <span class="sr-only">40% Complete</span>
                </div>
                <span class="progress-type">Development</span>
                <span class="progress-completed">30%</span>
            </div>
            <p style="width: 90%; margin: 0 auto 10px auto; word-break:keep-all;" data-i18n="INDEX:45">
                
            </p>
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                    aria-valuemax="100" style="width: 20%;">
                    <span class="sr-only">20% Complete (info)</span>
                </div>
                <span class="progress-type">Marketing</span>
                <span class="progress-completed">20%</span>
            </div>
            <p style="width: 90%; margin: 0 auto 10px auto; word-break:keep-all;" data-i18n="INDEX:47">
                
            </p>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                    aria-valuemax="100" style="width: 10%">
                    <span class="sr-only">10% Complete (warning)</span>
                </div>
                <span class="progress-type">Administrative expenses</span>
                <span class="progress-completed">10%</span>
            </div>
            <p style="width: 90%; margin: 0 auto 10px auto; word-break:keep-all;" data-i18n="INDEX:48">
               
            </p>
        </div>
</section>
<section class="slice slice-lg bg-section-secondary">
    <div class="container text-center">
        <div class="row justify-content-center mb-6">
            <div class="col-lg-10">
                <!-- Title -->
                <h2 class="h1 strong-600">
                    TUP STAKING PLATFORM
                </h2>
                <!-- Text -->
                <p class="text-muted" data-i18n="INDEX:27">
                    The TUP platform provides users with a choice of a period of optimal interest rate according to
                    their convenience.
                </p>
            </div>
        </div>
        <!-- Pricing -->
        <div class="row">
            <div class=".col-2_5 col-md">
                <div class="card card-pricing bg-dark text-center px-3 border-0 hover-scale-110">
                    <div class="card-header py-5 border-0 delimiter-bottom">
                        <div class="h1-1 text-white text-center mb-0">TUP <span
                                class="price font-weight-bolder">1,000</span>
                        </div>
                        <span class="h6 text-white">60Day</span>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled text-white text-sm opacity-8 mb-4">
                            <li class="py-2">Rate : 10%</li>
                            <li class="py-2">2021 / 05 / 01 ~</li>
                        </ul>
                        <a href="#" class="link-underline-warning">Purchase
                        </a>
                    </div>
                </div>
            </div>

            <div class=".col-2_5 col-md">
                <div class="card card-pricing bg-dark text-center px-3 border-0 hover-scale-110">
                    <div class="card-header py-5 border-0 delimiter-bottom">
                        <div class="h1-1 text-white text-center mb-0">TUP <span
                                class="price font-weight-bolder">3,000</span>
                        </div>
                        <span class="h6 text-white">90Day</span>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled text-white text-sm opacity-8 mb-4">
                            <li class="py-2">Rate : 20%</li>
                            <li class="py-2">2021 / 05 / 01 ~</li>
                        </ul>
                        <a href="#" class="link-underline-warning">Purchase
                        </a>
                    </div>
                </div>
            </div>

            <div class=".col-2_5 col-md">
                <div class="card card-pricing bg-dark text-center px-3 border-0 hover-scale-110">
                    <div class="card-header py-5 border-0 delimiter-bottom">
                        <div class="h1-1 text-white text-center mb-0">TUP <span
                                class="price font-weight-bolder">5,000</span>
                        </div>
                        <span class="h6 text-white">180Day</span>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled text-white text-sm opacity-8 mb-4">
                            <li class="py-2">Rate : 40%</li>
                            <li class="py-2">2021 / 05 / 01 ~</li>
                        </ul>
                        <a href="#" class="link-underline-warning">Purchase
                        </a>
                    </div>
                </div>
            </div>

            <div class=".col-2_5 col-md">
                <div class="card card-pricing bg-dark text-center px-3 border-0 hover-scale-110">
                    <div class="card-header py-5 border-0 delimiter-bottom">
                        <div class="h1-1 text-white text-center mb-0">TUP <span
                                class="price font-weight-bolder">10,000</span>
                        </div>
                        <span class="h6 text-white">365Day</span>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled text-white text-sm opacity-8 mb-4">
                            <li class="py-2">Rate : 80%</li>
                            <li class="py-2">2021 / 05 / 01 ~</li>
                        </ul>
                        <a href="#" class="link-underline-warning">Purchase
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="mt-5 text-center">
            <p class="mb-2">
                Both pricings contains all 6 months free support. Need more?
            </p>
            <a href="#" class="text-primary text-underline--dashed">Contact us<i data-feather="arrow-right"
                    class="ml-2"></i></a>
        </div> -->
    </div>
</section>

<script>
    $(".cser").click(function () {
        $(".btn_team").slideToggle()
    })
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>