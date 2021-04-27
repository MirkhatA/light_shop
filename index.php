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
    <div class="text-center">
        <h2 class="category__headline">Категории</h2>  
    </div>
        
    <!-- category-carousel -->
        <div class="container-fluid">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <a href="" name=""><img width="100%" src="img/1.jpg" alt=""></a>
                        </li>
                        <li class="glide__slide">
                            <a href="" name=""><img width="100%" src="img/2.jpg" alt=""></a>
                        </li>
                        <li class="glide__slide">
                            <a href="" name=""><img width="100%" src="img/3.jpg" alt=""></a>
                        </li>
                        <li class="glide__slide">
                            <a href="" name=""><img width="100%" src="img/4.jpg" alt=""></a>
                        </li>
                        <li class="glide__slide">
                            <a href="" name=""><img width="100%" src="img/1.jpg" alt=""></a>
                        </li>
                        <li class="glide__slide">
                            <a href="" name=""><img width="100%" src="img/2.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>  

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
                    <button class="glide__bullet" data-glide-dir="=4"></button>
                    <button class="glide__bullet" data-glide-dir="=5"></button>
                </div>
                
            </div>
        </div>

    <!-- button -->
    <button class="category__button">
        Подробнее
    </button>
    
</section>


<!-- category -->


<!-- footer connection -->
<?php require_once 'footer.php'; ?>