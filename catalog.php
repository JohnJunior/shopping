<!DOCTYPE html>
<html>
<head>
<?php include "scripts/head.php"; ?>
</head>
<body>
    <div class="wrapper">
<?php include "scripts/header.php";?>

        <main class="m-page">
            <section class="catalog">
                <div class="container">
                    <div class="row">
                        <div class="col1 col-xs-12 col-sm-4">
                            <h2 class="section-header">Каталог</h2>
                        </div>
                        <div class="col2 col-xs-12 col-sm-8">
                            <ul class="recommended clearfix">
                                <li><a href="#">Новинки</a></li>
                                <li><a href="#">Акции</a></li>
                                <li><a href="#">Я рекомендую</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="catalog-menu col-xs-12 col-sm-4">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Парфюмерия</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul>
<?php
foreach($parfums as $item) {
    ?>
                                                <li><a href="<?= $item[href]; ?>"><?= $item[name]; ?></a></li>
<?php
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--panel panel-default-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Кремы и лосьены</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
<?php
foreach($other as $item) {
?>
                                                <li><a href="<?= $item[href]; ?>"><?= $item[name]; ?></a></li>
<?php
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--panel panel-default-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Соли и грязи</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
<?php
foreach($other as $item) {
?>
                                                <li><a href="<?= $item[href]; ?>"><?= $item[name]; ?></a></li>
<?php
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--panel panel-default-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Витамины и бады</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
<?php
foreach($other as $item) {
?>
                                                <li><a href="<?= $item[href]; ?>"><?= $item[name]; ?></a></li>
<?php
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--panel panel-default-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Чаи</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
<?php
foreach($other as $item) {
?>
                                                <li><a href="<?= $item[href]; ?>"><?= $item[name]; ?></a></li>
<?php
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--panel panel-default-->

                            </div><!-- panel-group" id="accordion"-->
                        </div><!--catalog-menu--->
                        <div class="small-items col-xs-12 col-sm-8">
                            <div class="row">
<?php
foreach($catalog_products as $item){
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
?>
                            </div><!--row-->
                        </div><!--small-items-->
                    </div><!--row -->
                </div><!--container-->
            </section>

            <section class="looked">
                <div class="container">
                    <h2 class="section-header">Вы смотрели</h2>
                    <div class="item-wrap clearfix">
                        <div class="sm-item">
                            <a href="#"><img src="img/product1.png" alt="product"></a>
                            <p class="item-annotation">Шампунь ежедневного пользования</p>
                            <div class="price">280 грн.</div>
                        </div>
                        <div class="sm-item">
                            <a href="#"><img src="img/products2.png" alt="product"></a>
                            <p class="item-annotation">Шампунь ежедневного пользования</p>
                            <div class="price">280 грн.</div>
                        </div>
                        <div class="sm-item">
                            <a href="#"><img src="img/product3.png" alt="product"></a>
                            <p class="item-annotation">Шампунь ежедневного пользования</p>
                            <div class="price">280 грн.</div>
                        </div>
                        <div class="sm-item">
                            <a href="#"><img src="img/product3.png" alt="product"></a>
                            <p class="item-annotation">Шампунь ежедневного пользования</p>
                            <div class="price">280 грн.</div>
                        </div>
                        <div class="sm-item">
                            <a href="#"><img src="img/product3.png" alt="product"></a>
                            <p class="item-annotation">Шампунь ежедневного пользования</p>
                            <div class="price">280 грн.</div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

<?php include "scripts/footer.php"; ?>
    </div>
</body>
</html>