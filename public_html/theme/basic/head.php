<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

?>

<!-- 상단 시작 { -->
<!-- Navbar -->

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-section-secondary">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index.php">
                <img alt="Image placeholder" src="../img/logo3.png" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/webpxs" target="_blank">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                            <i class="fab fa-medium"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">MENU</a>
                        <div class="dropdown-menu dropdown-menu-single">
                            <a href="#" class="dropdown-item">STAKING</a>
                            <a href="#" class="dropdown-item">MYPAGE</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Login</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="http://example.com" id=""
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>
                                LANGUAGE
                            </p>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item koo" onclick="changeLang('ko-KR');" href="#">KOR</a>
                            <a class="dropdown-item us" onclick="changeLang('en-US');" href="#">EN</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>