<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/destyle.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css">

    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="sp">
            <div class="mv slider-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-sp01.jpg" alt="高級住宅" width="750" height="851" decoding="async">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-sp02.png" alt="高級住宅" width="750" height="851" decoding="async">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-sp03.png" alt="高級住宅" width="750" height="851" decoding="async">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-sp04.png" alt="高級住宅" width="750" height="851" decoding="async">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-sp05.jpg" alt="高級住宅" width="750" height="851" decoding="async">
            </div>
            <div class="header-inner">
                <p class="top-p">忙しい<span>医師</span>の<br>
                    大切な家族時間を<br>
                    <span>極上</span>のものにする<br>
                    住まいづくりを設計
                </p>
                <div>
                    <div class="header-logo">
                        <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rogo.png" alt="参會堂"></h1>
                    </div>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon1.png" alt="アイコン" width="25" height="23" decoding="async">
                                </div>
                                <p>戸建て注文住宅</p>
                                <div class="arrow">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/li_arrow.png" alt="矢印" width="70" height="12" decoding="async">
                                </div>
                            </a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon2.png" alt="アイコン" width="25" height="23" decoding="async">
                                </div>
                                <p>クリニック建築</p>
                                <div class="arrow">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/li_arrow.png" alt="矢印" width="70" height="12" decoding="async">
                                </div>
                            </a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon3.png" alt="アイコン" width="25" height="23" decoding="async">
                                </div>
                                <p>土地活用・賃貸</p>
                                <div class="arrow">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/li_arrow.png" alt="矢印" width="70" height="12" decoding="async">
                                </div>
                            </a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon4.png" alt="アイコン" width="25" height="23" decoding="async">
                                </div>
                                <p>別荘建築</p>
                                <div class="arrow">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/li_arrow.png" alt="矢印" width="70" height="12" decoding="async">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pc pc-header">
            <div class="header-inner">
                <div class="header-logo">
                    <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rogo.png" alt="参會堂"></h1>
                </div>
                <p class="top-p">忙しい<span>医師</span>の<br>
                    大切な家族時間を<br>
                    <span>極上</span>のものにする<br>
                    住まいづくりを設計
                </p>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon1.png" alt="アイコン" width="25" height="23" decoding="async">
                            </div>
                            <p>戸建て注文住宅</p>
                            <div class="arrow">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/li_arrow.png" alt="矢印" width="70" height="12" decoding="async">
                            </div>
                        </a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon2.png" alt="アイコン" width="25" height="23" decoding="async">
                            </div>
                            <p>クリニック建築</p>
                            <div class="arrow">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/li_arrow.png" alt="矢印" width="70" height="12" decoding="async">
                            </div>
                        </a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon3.png" alt="アイコン" width="25" height="23" decoding="async">
                            </div>
                            <p>土地活用・賃貸</p>
                            <div class="arrow">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/li_arrow.png" alt="矢印" width="70" height="12" decoding="async">
                            </div>
                        </a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon4.png" alt="アイコン" width="25" height="23" decoding="async">
                            </div>
                            <p>別荘建築</p>
                            <div class="arrow">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/li_arrow.png" alt="矢印" width="70" height="12" decoding="async">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mv slider-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-pc01.jpg" alt="高級住宅" width="1288" height="839" decoding="async">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-pc02.jpg" alt="高級住宅" width="1288" height="839" decoding="async">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-pc03.png" alt="高級住宅" width="1288" height="839" decoding="async">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-pc04.png" alt="高級住宅" width="1288" height="839" decoding="async">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mv-pc05.jpeg" alt="高級住宅" width="1288" height="839" decoding="async">
            </div>
        </div>
    </header>