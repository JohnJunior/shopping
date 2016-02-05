<?php require "scripts/data.php";?>
<!DOCTYPE html>
<html>
<head>
<?php include "scripts/head.php"; ?>
</head>
<body>
    <div class="wrapper">
<?php include "scripts/header.php";?>

        <main class="m-page">
            <div class="hero hidden-xs">
                <div class="flexslider">
                    <div>
                        <ul class="slides">
                            <li>
                                <img class="slider-bg" src="img/slider-bg.png" alt="background">
                                <div class="slide-wrap clearfix">
                                    <div class="slider-text-block">
                                        <h1 class="slider-header">Купить продукцию <span class="slider-header-br">сейчас</span></h1>
                                        <a href="#" class="button">Узнать больше <span class="fa fa-caret-right"></span></a>
                                    </div>
                                    <div class="man">
                                        <img class="slider-man img-responsive" src="img/slider-man.png" alt="man">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img class="slider-bg" src="img/slider-bg.png" alt="background">
                                <div class="slide-wrap">
                                    <div class="slider-text-block">
                                        <h1 class="slider-header">Купить продукцию сейчас</h1>
                                        <a href="#" class="button">Узнать больше <span class="fa fa-caret-right"></span></a>
                                    </div>
                                    <div class="man">
                                        <img class="slider-man img-responsive" src="img/slider-man.png" alt="man">
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>

            <section id="news" class="news">
                <div class="container">
                    <h2 class="section-header">Новости</h2>
                    <ul class="row">
<?php
foreach($news_preview as &$item){
?>
                        <li class="col-xs-12 col-sm-6 col-md-3">
                            <img src="<?=$item[img];?>" alt="article-img">
                            <p><?=$item[preview]; ?></p>
                            <a href="<?=$item[href]; ?>" class="more">Подробнее <span class="fa fa-caret-right"></span></a>
                        </li>
<?php
}
?>
                    </ul>
                </div>
            </section>

            <section class="products">
                <div class="container">
                    <h2 class="section-header">Я рекомендую</h2>
                    <ul class="recommended">
<?php
foreach($recommended as $item){
?>
                        <li><a href="<?=$item[href];?>"><?=$item[title];?></a></li>
<?php
}
?>
                    </ul>

                    <div class="row">
                        <div class="big-item col-xs-12 col-sm-4">
                            <a href="product-detail.php" class="img-url"><img src="img/product-big.png" alt="product-name"></a>
                            <h3 class="item-header">Шампунь ежедневного пользования</h3>
                            <p class="item-annotation">Доктор Нонна на телеканале домашний в программе спросите повара Доктор Нонна на телеканале домашний в программе спросите повара Доктор Нонна на телеканале домашний в программе Доктор Нонна на телеканале домашний в программе...</p>
                            <div class="add-info clear">
                                <div class="price">280 грн.</div>
                                <a href="#" class="button buy">Купить</a>
                            </div>
                        </div>
                        <div class="small-items col-xs-12 col-sm-8">
                            <div class="row">
<?php
$k = 0;
foreach($catalog_products as $item){
    $k++;
    if($k > 6){
        break;
    } else {
?>
                                <div class="sm-item col-xs-6 col-sm-4 ">
                                    <a href="<?=$item[href];?>" class="img-url"><img src="<?=$item[img];?>" alt="product-name"></a>
                                    <p class="item-annotation"><?=$item[name];?></p>
                                    <div class="add-info clear">
                                        <div class="price"><?=$item[price];?> грн.</div>
                                        <a href="#" class="button buy">Купить</a>
                                    </div>
                                </div><!--sm-item-->
<?php
    }
}
?>

                            </div><!--row-->
                        </div><!--small-items-->
                    </div><!--row-->
                </div><!--container-->
            </section>

            <section class="video">
                <div class="inner">
                    <div class="container">
                        <h2 class="section-header">Телеканал Теледом</h2>
                        <div class="row">
                            <div class="video-big col-xs-12 col-md-6">
                                <video controls poster="img/video-poster.jpg">
                                    <source src="video/Jeb Corliss - Grinding The Crack.mp4" type='video/mp4'>
                                    Видео не поддерживается браузером.
                                </video>
                            </div>
                            <div class="video-small col-xs-12 col-md-6">
                                <div class="row">
                                    <div class="video-wrapper col-xs-12 col-sm-6">
                                        <video controls poster="img/video-poster.jpg">
                                            <source src="video/Jeb Corliss - Grinding The Crack.mp4" type='video/mp4'>
                                            Видео не поддерживается браузером.
                                        </video>
                                    </div>
                                    <div class="video-wrapper col-xs-12 col-sm-6">
                                        <video controls poster="img/video-poster.jpg">
                                            <source src="video/Jeb Corliss - Grinding The Crack.mp4" type='video/mp4'>
                                            Видео не поддерживается браузером.
                                        </video>
                                    </div>
                                    <div class="video-wrapper col-xs-12 col-sm-6">
                                        <video controls poster="img/video-poster.jpg">
                                            <source src="video/Jeb Corliss - Grinding The Crack.mp4" type='video/mp4'>
                                            Видео не поддерживается браузером.
                                        </video>
                                    </div>
                                    <div class="video-wrapper col-xs-12 col-sm-6">
                                        <video controls poster="img/video-poster.jpg">
                                            <source src="video/Jeb Corliss - Grinding The Crack.mp4" type='video/mp4'>
                                            Видео не поддерживается браузером.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 new-video">
                                <h3 class="section-header lvl2">Новые видео</h3>
                                <ul>
                                    <li><a href="article.php"><img src="img/play-icon.svg"> Шампунь ежедневного пользования  (16:54)</a></li>
                                    <li><a href="article.php"><img src="img/play-icon.svg"> ПРЕМЬЕРА! Ева Бушмина - Религия  (05:14)</a></li>
                                    <li><a href="article.php"><img src="img/play-icon.svg"> Анжелика Варум - Я Всегда С Тобой (Official Video)</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 popular-video">
                                <h3 class="section-header lvl2">Популярные</h3>
                                <ul>
                                    <li><a href="article.php"><img src="img/play-icon.svg"> Шампунь ежедневного пользования  (16:54)</a></li>
                                    <li><a href="article.php"><img src="img/play-icon.svg"> ПРЕМЬЕРА! Ева Бушмина - Религия  (05:14)</a></li>
                                    <li><a href="article.php"><img src="img/play-icon.svg"> Анжелика Варум - Я Всегда С Тобой (Official Video)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--container-->
                </div><!--inner-->
            </section>

            <section id="goal" class="goal">
                <div class="container">
                    <div class="row">
                        <div class="text-block col-xs-12 col-sm-8">
                            <h2 class="section-header">Цель моей жизни - <span>делать людей счастливыми</span></h2>


                            <p>В бизнес компании Dr. Nona пришел на успех своей жены Ольги, которая доказала мне что даже находясь в декретном отпуске и гуляя с маленьким ребенком на улице за один месяц можно заработать в два раза больше чем моя зарплата в милиции. Позже я на этот бизнес посмотрел серьезнее и увидел себя в нем. Это дело для серьезных и амбициозных людей, которые хотят изменить свою жизнь. 27 декабря 2007 года уволился из МВД и теперь сотрудничаю ...</p>
                            <a href="" class="more">Узнайте подробнее</a>

                            <div class="social clearfix">
                                <a href="#" class="i-youtube"></a>
                                <a href="#" class="i-two-dots"></a>
                                <a href="#" class="i-vk"></a>
                                <a href="#" class="i-ok"></a>
                                <a href="#" class="i-fb"></a>
                                <a href="#" class="i-twitter"></a>
                            </div>
                        </div>
                        <div class="man-block hidden-xs col-sm-4"><img src="img/goal-man.png" class="img-responsive" alt="man"></div>
                    </div>
                </div>
            </section>

            <section id="partners" class="partners">
                <div class="container">
                    <h2 class="section-header"></h2>
                    <ul class="row">
<?php
foreach($partners as $item){
?>
                        <li class="col-xs-6 col-sm-3">
                            <div class="img-wrap"><img src="<?=$item[photo];?>" alt="partner" class="img-responsive"></div>
                            <h3 class="item-header"><?=$item[name];?></h3>
                            <p class="item-annotation position"><?=$item[position];?></p>
                            <a href="" class="map"><span class="fa fa-map-marker"></span> <?=$item[location];?></a>
                            <div class="social clearfix">
                                <a href="#" class="i-vk"></a>
                                <a href="#" class="i-ok"></a>
                                <a href="#" class="i-fb"></a>
                                <a href="#" class="i-twitter"></a>
                            </div>
                        </li>
<?php
}
?>
                    </ul>
                </div>
            </section>

            <section class="mail">
                <div class="bluebg">
                    <div class="container">
                        <h2 class="section-header">Добро пожаловать в команду</h2>
                        <form action="#">
                            <input type="text" placeholder="Ваше имя" id="name">
                            <input type="text" placeholder="Телефон" id="phone">
                            <input type="text" placeholder="E-mail адрес" id="email">
                            <button class="join" type="submit">Присоединяйтесь</button>
                        </form>
                        <a href="#" class="more">Узнайте подробнее почему выгодня сотрудничать с нами и быть в нашей команде</a>
                    </div>
                </div>
            </section>
        </main>

<?php include "scripts/footer.php"; ?>
    </div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

</body>
</html>