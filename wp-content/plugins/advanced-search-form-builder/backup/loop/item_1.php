<div class="khanh_product-01__element">
    <div class="khanh_product-01__header">
        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
            <?php if (get_the_post_thumbnail() != '') : ?>
                <?php the_post_thumbnail() ?>
            <?php else : ?>
                <img src="http://lorempixel.com/300/300?time=<?php time() ?>" alt="">
            <?php endif; ?>
        </a>
<!--        <div class="khanh_product-01__action"><a href="#"><span class="khanh_product-01__view"><i class="fa fa-eye"></i></span></a><a href="#"><span class="khanh_product-01__like"><i class="fa fa-heart"></i></span></a><a href="#"><span class="khanh_product-01__addcart"><i class="fa fa-shopping-cart"></i></span></a></div>-->
    </div>
    <div class="khanh_product-01__body">
        <h2 class="khanh_product-01__name">
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                <?php the_title() ?>
            </a>
        </h2>
<!--        <div class="khanh_product-01__group">-->
<!--            <div class="khanh_product-01__price"><span>$138.000</span></div>-->
<!--            <div class="khanh_product-01__star"><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star-half-empty"></i></span></div>-->
<!--        </div>-->
    </div>
</div>