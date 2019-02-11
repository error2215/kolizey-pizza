<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
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
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Колізей</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($this->navigation == 'index') {echo 'active';}?>"><a href="<?=Url::to(['/']) ?>" class="nav-link">Головна</a></li>
                <li class="nav-item <?php if($this->navigation == 'menu') {echo 'active';}?>"><a href="<?=Url::to(['menu']) ?>" class="nav-link">Меню</a></li>
                <li class="nav-item <?php if($this->navigation == 'specialties') {echo 'active';}?>"><a href="<?=Url::to(['specialties']) ?>" class="nav-link">Кращі страви</a></li>
                <li class="nav-item <?php if($this->navigation == 'reservation') {echo 'active';}?>"><a href="<?=Url::to(['reservation']) ?>" class="nav-link">Бронювання столиків</a></li>
                <li class="nav-item <?php if($this->navigation == 'about') {echo 'active';}?>"><a href="<?=Url::to(['about']) ?>" class="nav-link">Про нас</a></li>
                <li class="nav-item <?php if($this->navigation == 'contact') {echo 'active';}?>"><a href="<?=Url::to(['contact']) ?>" class="nav-link">Контакти</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<?= $content ?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-1">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Колізей</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <!--<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>-->
                    </ul>
                </div>
            </div>
            <div class="col-md ml-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Час роботи</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Понеділок: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Вівторок: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Середа: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Четвер: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">П'ятниця: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Субота: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Неділя: <span>08: - 22:00</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Контактна інформація</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block" м. Мукачево, вул. Вокзальна, 3</a></li>
                        <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                        <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                        <li><a href="#" class="py-2 d-block">email@email.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>