<section class="masthead__wrapper text-dark masthead__detail">
        <?php
                $bg = $background_image_name ?? 'bgd.png'
        ?>
        <img class="masthead__detail--image lazyload" data-src="{{ asset('images/'. $bg . '') }}" alt="" />
</section>