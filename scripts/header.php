<?php require "data.php";?>
        <header class="h-page">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><span class="fa fa-home"></span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="mobile-menu-navbar-collapse-1">

                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Поиск">
                            </div>
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                        <ul class="nav navbar-nav menu">

<?php
$menu_count = count($main_menu);
for($i=0; $i<$menu_count; $i++) {
    $class = $main_menu[$i][url_class];
    if($class!='dropdown'){
?>
                            <li><a href="<?=$main_menu[$i][href]; ?>"><?=$main_menu[$i][title];?></a></li>
<?php
    } else {
?>
                            <li class="<?=$class;?>">
                                <a href="<?=$main_menu[$i][href]; ?>" class="dropdown-toggle" data-toggle="dropdown"><?=$main_menu[$i][title];?></a>
                                <ul class="dropdown-menu clearfix">
<?php
        $dropdown_menu_count = count($dropdown_menu);
        for($j=0; $j<$dropdown_menu_count; $j++) {
?>
                                    <li><a href="product-detail.php"><?=$dropdown_menu[$j][title];?></a></li>
<?php
        }
?>
                                </ul>
                            </li>
<?php
    }
}
?>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>