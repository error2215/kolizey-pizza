<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Найкращі страви | Kolizey';
$this->params['breadcrumbs'][] = $this->title;
$this->navigation = 'specialities';
?>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-10 col-sm-12 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Головна</a></span> <span>Кращі страви</span></p>
                    <h1 class="mb-3">Наші найкращі страви</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">

        <div class="row no-gutters justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>Наші головні страви</h2>
            </div>
        </div>

        <div class="row d-flex no-gutters">
            <?php $location = 0;
            for($i = 0;$i<10;$i = $i + 2){ ?>
            <div class="col-lg-6">
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-last" style="background-image: url(images/dish-3.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Beef Steak</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-first" style="background-image: url(images/dish-4.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Beef Ribs Steak</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-lg-6">
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-last" style="background-image: url(images/dish-5.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Chopsuey</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-first" style="background-image: url(images/dish-6.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Roasted Chieken</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-last" style="background-image: url(images/dish-7.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Beef Steak</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-first" style="background-image: url(images/dish-8.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Beef Ribs Steak</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-last" style="background-image: url(images/dish-9.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Chopsuey</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-first" style="background-image: url(images/dish-10.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Roasted Chieken</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-last" style="background-image: url(images/dish-11.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Beef Steak</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-last" style="background-image: url(images/dish-3.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Beef Steak</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




