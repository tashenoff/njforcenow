<section style="background-repeat:no-repeat; background-size:cover;" class="bg-banner relative text-white relative overflow-hidden">


<video class="absolute w-full z-10 w-auto min-w-full min-h-full max-w-none z-20" autoplay loop muted>
            <source src="<?php echo get_template_directory_uri(); ?>/resources/video.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>


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