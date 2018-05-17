<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use sieren\cube\CubeAsset;
use common\widgets\Alert;


$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@sieren/cube/src');

CubeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="theme-blue pace-done fixed-header fixed-leftmenu">
<?php $this->beginBody() ?>
<div id="theme-wrapper">
    <!-- HEADER -->
    <header class="navbar" id="header-navbar">
        <div class="container">
            <a href="index.html" id="logo" class="navbar-brand">
                <img src="<?= $directoryAsset ?>/img/logo.png" alt="" class="normal-logo logo-white"/>
                <img src="<?= $directoryAsset ?>/img/logo-black.png" alt="" class="normal-logo logo-black"/>
                <img src="<?= $directoryAsset ?>/img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
            </a>
            <div class="clearfix">
                <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                    <ul class="nav navbar-nav pull-left">
                        <li>
                            <a class="btn" id="make-small-nav">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-no-collapse pull-right" id="header-nav">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown profile-dropdown">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= $directoryAsset ?>/img/samples/scarlet-159.png" alt=""/>
                                <span class="hidden-xs">Scarlett Johansson</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="fa fa-user"></i>Profil</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i>Pengaturan</a></li>
                                <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <div id="page-wrapper" class="container">
        <div class="row">
            <!-- NAVIGATION ASIDE -->
            <div id="nav-col">
                <section id="col-left" class="col-left-nano">
                    <div id="col-left-inner" class="col-left-nano-content">
                        <div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
                            <img alt="" src="<?= $directoryAsset ?>/img/samples/scarlet-159.png"/>
                            <div class="user-box">
                                <span class="name">
                                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Scarlett J.<i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-user"></i>Profil</a></li>
                                        <li><a href="#"><i class="fa fa-cog"></i>Pengaturan</a></li>
                                        <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                                    </ul>
                                </span>
                                <span class="status"><i class="fa fa-circle"></i> Online</span>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="nav-header nav-header-first hidden-sm hidden-xs">
                                    Navigation
                                </li>
                                <li class="active">
                                    <a href="index.html">
                                        <i class="fa fa-dashboard"></i>
                                        <span>Dashboard</span>
                                        <span class="label label-primary label-circle pull-right">28</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <div id="nav-col-submenu"></div>
            </div>
            <!-- END NAVIGATION ASIDE -->

            <!-- CONTENT -->
            <div id="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="content-header" class="clearfix">
                                    <div class="pull-left">
                                        <?= Breadcrumbs::widget([
                                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                        ]) ?>
                                        <h1><?= $this->title ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- MAIN CONTENT -->
                        <?= $content ?>
                        <!-- END MAIN CONTENT -->
                    </div>
                </div>

                <!-- FOOTER -->
                <footer id="footer-bar" class="row">
                    <p id="footer-copyright" class="col-xs-12">
                        <?= date('Y') ?> &copy; | Powered by Cube Theme.
                    </p>
                </footer>
                <!-- END FOOTER -->
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
