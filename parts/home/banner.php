<section style="background-repeat:no-repeat; background-size:cover; background-image: url(<?php echo the_post_thumbnail_url(); ?>);" class="bg-banner relative text-white relative">

    <div class="container mx-auto relative z-40">
        <div class="flex flex-col w-full items-start justify-center h-[680px] text-white ">
            <?php the_title(sprintf('<h1 class=""><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>

            <p class="text-[18px] mt-5">
                Вам необходим партнер оказывающий технологическую поддержку который понимает насколько важно для Вашего бизнеса поддерживать работоспособность Ваших систем на пиковой производительности.
                Партнер, который делает больше, чем просто регирует, когда что-то вышло из строя.
            </p>

        </div>

    </div>



    <div class="absolute bottom-0 left-0 py-5 border-t border-white border-opacity-20 w-full">
        <?php get_template_part('parts/block-social'); ?>
    </div>

    </div>

</section>