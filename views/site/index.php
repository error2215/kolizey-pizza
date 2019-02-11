<?php

/* @var $this yii\web\View */

$this->title = 'Головна | Kolizey';
$this->params['breadcrumbs'][] = $this->title;
$this->navigation = 'index';
?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('../../web/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center text-center">
                <div class="col-md-10 col-sm-12 ftco-animate">
                    <h1 class="mb-3">Замовте столик на будь-яку, підходящу вам годину</h1>
                    <p><a href="reservation.html" class="btn btn-primary btn-outline-white px-5 py-3">Замовити столик</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url('../../web/images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center text-center">
                <div class="col-md-10 col-sm-12 ftco-animate">
                    <h1 class="mb-3">Найсмачніша &amp; Найкраща їжа</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url('../../web/images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center text-center">
                <div class="col-md-10 col-sm-12 ftco-animate">
                    <h1 class="mb-3">Цікаві знижки &amp; акції</h1>
                    <p><a href="reservation.html" class="btn btn-primary btn-outline-white px-5 py-3">Знижки та акції</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<div class="ftco-section-reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 reservation pt-5 px-5">
                <div class="block-17">
                    <form action="" method="post" class="d-block d-lg-flex">
                        <div class="fields d-block d-lg-flex">

                            <div class="textfield-name one-third"><input type="text" class="form-control" placeholder="Імя"></div>

                            <div class="textfield-phone one-third"><input type="text" class="form-control" placeholder="Номер телефону"></div>

                            <div class="book-date one-third"><input type="text" id="book_date" class="form-control" placeholder="Дата"></div>

                            <div class="book-time one-third">
                                <input type="text" id="book_time" class="form-control" placeholder="Час">
                            </div>

                            <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">Кількість людей</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4+</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" class="search-submit btn btn-primary" value="Забронювати">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section-2">
    <div class="container d-flex">
        <div class="section-2-blocks-wrapper row">
            <div class="img col-sm-12 col-lg-6" style="background-image: url('../../web/images/about-2.jpg');">
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

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Наше меню</span>
                <h2>Відкрийте для себе наше чудове меню</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 dish-menu">

                <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-cutlery"></span> Головні страви</a>
                    <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-pancakes"></span> Десерти</a>
                    <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-lemonade"></span> Напої</a>
                    <a class="nav-link py-3 px-4" id="v-pills-pizza-tab" data-toggle="pill" href="#v-pills-pizza" role="tab" aria-controls="v-pills-pizza" aria-selected="false"><span class="flaticon-pizza"></span> Піца</a>
                </div>

                <div class="tab-content py-5" id="v-pills-tabContent">

                    <?php for ($j = 0;$j< count($categories);$j++) { ?>
                        <?php count($categories[$j]->dishes);?>

                        <div class="tab-pane fade <?php if ($j == 0){echo 'show active';} ;?> " id="v-pills-<?= $categories[$j]->code_name ;?>" role="tabpanel" aria-labelledby="v-pills-<?= $categories[$j]->code_name ;?>-tab">
                            <div class="row">

                                <div class="col-lg-6">
                                    <?php
                                    for($i = 0;$i<count($categories[$j]->dishes);$i++){
                                        if ($categories[$j]->dishes[$i]->ordered == 1){
                                            echo "<div class=\"menus d-flex ftco-animate\">";
                                                echo "<div class=\"menu-img\" style=\"background-image: url(" . $categories[$j]->dishes[$i]->image_path .");\"></div>";
                                                echo " <div class=\"text d-flex\">";
                                                    echo "<div class=\"one-half\">";
                                                        echo "<h3>" . $categories[$j]->dishes[$i]->name . "</h3>";
                                                        echo "<p><span>" . str_replace(',', '</span>, <span>', $categories[$j]->dishes[$i]->ingridients) . "</span></p>";
                                                    echo "</div>";
                                                    echo "<div class=\"one-forth\">";
                                                        echo "<h3 class=\"price\">". $categories[$j]->dishes[$i]->price . " грн.</h3>";
                                                        echo "<span><button class=\"btn btn-menu\">Добавити</button></span>";
                                                    echo "</div>";
                                                echo "</div>";
                                            echo "</div>";
                                        }
                                    }

                                    ?>
                                </div>
                                <div class="col-lg-6">
                                    <?php
                                    for($i = 0;$i<count($categories[$j]->dishes);$i++){
                                        if ($categories[$j]->dishes[$i]->ordered == 2){
                                            echo "<div class=\"menus d-flex ftco-animate\">";
                                                echo "<div class=\"menu-img\" style=\"background-image: url(" . $categories[$j]->dishes[$i]->image_path .");\"></div>";
                                                echo " <div class=\"text d-flex\">";
                                                    echo "<div class=\"one-half\">";
                                                        echo "<h3>" . $categories[$j]->dishes[$i]->name . "</h3>";
                                                        echo "<p><span>" . str_replace(',', '</span>, <span>', $categories[$j]->dishes[$i]->ingridients) . "</span></p>";
                                                    echo "</div>";
                                                    echo "<div class=\"one-forth\">";
                                                        echo "<h3 class=\"price\">". $categories[$j]->dishes[$i]->price . " грн.</h3>";
                                                        echo "<span><button class=\"btn btn-menu\">Добавити</button></span>";
                                                    echo "</div>";
                                                echo "</div>";
                                            echo "</div>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div><!-- END -->
                    <?php } ?>

                    <!--                    END     -->

                    <div class="col-sm-12 pt-4 text-center ftco-animate">
                        <p>Італійці кажуть, що їсти піцу потрібно щонайменше раз в місяць</p>
                        <span><a href="reservation.html" class="btn btn-primary btn-outline-primary p-3">Зробити онлайн замовлення</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section parallax-img" style="background-image: url('../../web/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2>Найкращі страви</h2>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container special-dish">
        <div class="row d-flex no-gutters">
            <div class="col-lg-6">
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-last" style="background-image: url(../../web/images/dish-3.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Beef Steak</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-first" style="background-image: url(../../web/images/dish-4.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Beef Ribs Steak</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-last" style="background-image: url(../../web/images/dish-5.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Chopsuey</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate">
                    <div class="image order-first" style="background-image: url(../../web/images/dish-6.jpg);"></div>
                    <div class="text text-center order-first">
                        <h2 class="heading">Roasted Chieken</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                        <span class="price">from $10.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
