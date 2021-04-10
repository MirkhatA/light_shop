<!-- header connection -->
<?php require_once 'header.php'; ?>

<!-- carousel -->
<div class="slider">
    <input class="slider__nav" type="radio" name="slider" title="slide1" checked="checked"/>
    <input class="slider__nav" type="radio" name="slider" title="slide2"/>
    <input class="slider__nav" type="radio" name="slider" title="slide3"/>
    <input class="slider__nav" type="radio" name="slider" title="slide4"/>

    <div class="slider__inner">
        <div class="slider__contents slide1">
            <i class="slider__image fa fa-codepen"></i>
            <h2 class="slider__caption">codepen</h2>
            <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
        </div>

        <div class="slider__contents slide2">
            <i class="slider__image fa fa-newspaper-o"></i>
            <h2 class="slider__caption">newspaper-o</h2>
            <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
        </div>

        <div class="slider__contents slide3">
            <i class="slider__image fa fa-television"></i>
            <h2 class="slider__caption">television</h2>
            <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
        </div>

        <div class="slider__contents slide4">
            <i class="slider__image fa fa-diamond"></i>
            <h2 class="slider__caption">diamond</h2>
            <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
        </div>
    </div>
</div>
<!-- carousel -->

<!-- category -->
<section id="category">
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="category__headline">Категории</h2>  
        </div>
        
        <!-- category-carousel -->
        <div class="container">
            
        </div>

        <!-- button -->
        <button class="category__button">
            Подробнее
        </button>
    </div>
</section>
<!-- category -->


<!-- footer connection -->
<?php require_once 'footer.php'; ?>