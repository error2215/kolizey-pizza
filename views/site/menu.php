<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Меню | Kolizey';
$this->params['breadcrumbs'][] = $this->title;
$this->navigation = 'menu';
?>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-10 col-sm-12 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?=Url::to(['menu']) ?>">Головна</a></span> <span>Меню</span></p>
                    <h1 class="mb-3">Відкрийте для себе наше чудове меню</h1>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    <?php for ($i = 0;$i< count($categories);$i++){ ?>
                    <a class="nav-link py-3 px-4 <?php if($i == 0){echo 'active';} ?>" id="v-pills-<?= $categories[$i]->code_name ?>-tab" data-toggle="pill" href="#v-pills-<?= $categories[$i]->code_name ?>" role="tab" aria-controls="v-pills-<?= $categories[$i]->code_name ?>" aria-selected="<?php if($i == 0){echo 'true';}else{echo 'false';} ?>"><span class="flaticon-<?= $categories[$i]->flaticon ?>"></span><?= $categories[$i]->name ?></a>
                    <?php } ?>
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

                    <div class="col-sm-12 pt-4 text-center ftco-animate">
                        <p>Італійці кажуть, що їсти піцу потрібно щонайменше раз в місяць</p>
                        <span><a href="reservation.html" class="btn btn-primary btn-outline-primary p-3">Зробити онлайн замовлення</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>