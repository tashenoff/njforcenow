<section style="background-repeat:no-repeat; background-size:cover; background-image: url(<?php echo the_post_thumbnail_url(); ?>);" class="bg-banner relative text-white relative">

    <div class="container mx-auto relative z-40">
        <div class="flex flex-col w-full items-start justify-center h-[680px] text-white ">
            <?php the_title(sprintf('<h1 class=""><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>

            <p class="text-[18px] mt-5">Разработка ассортимента пекарни полного цикла</p>


            <a class="" href="https://api.whatsapp.com/send?phone=87473544930&text=%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0">
                <button class="group relative overflow-hidden modal-toggle btn btn-outline border hover:border-secondary transition-all duration-1000 uppercase mt-10 text-sm tracking-wider">
                    <span class="relative z-50 group-hover:text-black font-bold">Связаться с нами</span>
                    <div class="bg-secondary absolute top-0 right-[-250px] group-hover:right-[0px] transition-all duration-700 w-full h-full"></div>
                </button>

            </a>

        </div>

    </div>



    <div class="absolute bottom-0 left-0 py-5 border-t border-white border-opacity-20 w-full">
        <?php get_template_part('parts/block-social'); ?>
    </div>

    </div>

</section>