<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Про нас';
$this->params['breadcrumbs'][] = $this->title;
$this->navigation = 'about';
?>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-10 col-sm-12 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?=Url::to(['about']) ?>">Головна</a></span> <span>Про нас</span></p>
                    <h1 class="mb-3">Про нас</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-2">
    <div class="container d-flex">
        <div class="section-2-blocks-wrapper row">
            <div class="img col-sm-12 col-lg-6" style="background-image: url('images/about-2.jpg');">
            </div>
            <div class="text col-lg-6 ftco-animate">
                <div class="text-inner align-self-start">
                    <span class="subheading">Про Колізей</span>
                    <h3 class="heading">Наші кухарі готують найсмачнішу їжу для вас</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>Наші кухарі</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="block-10">
                    <div class="person-info">
                        <span class="name">Субачус Артур</span>
                        <span class="position">Шеф-кухар</span>
                    </div>
                    <div class="chef-img" style="background-image: url(images/chef-1.jpg)"></div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-10">
                    <div class="person-info">
                        <span class="name">Віктор Удут</span>
                        <span class="position">Головний помічник шеф-кухаря</span>
                    </div>
                    <div class="chef-img" style="background-image: url(images/chef-2.jpg)"></div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-10">
                    <div class="person-info">
                        <span class="name">Маркович Петро</span>
                        <span class="position">Помічник шеф-кухаря</span>
                    </div>
                    <div class="chef-img" style="background-image: url(images/chef-3.jpg)"></div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <br>
                <div class="block-10">
                    <div class="person-info">
                        <span class="name">Воляник Дмитро</span>
                        <span class="position">Головний піцейоло</span>
                    </div>
                    <div class="chef-img" style="background-image: url(images/chef-3.jpg)"></div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <br>
                <div class="block-10">
                    <div class="person-info">
                        <span class="name">Турис Андрій</span>
                        <span class="position">Повар-кондитер</span>
                    </div>
                    <div class="chef-img" style="background-image: url(images/chef-3.jpg)"></div>
                </div>
            </div>
        </div>
    </div>
</div>
