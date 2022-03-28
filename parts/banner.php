<section style="background-repeat:no-repeat; background-size:cover; background-image: url(<?php echo the_post_thumbnail_url(); ?>);" class="bg-primary text-white">
    <div class="container mx-auto">
        <div class="flex flex-col justify-center items-center  h-[443px]">
    <?php the_title( sprintf( '<h1 class="headers"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

    <div class="flex w-full items-center justify-center py-5"><a href="/">Главная</a> ><?php the_title()?> </div>
    <div class="btn btn-outline btn-outline-white">Связаться с нами</div>
    <?php get_template_part( 'parts/bread');?>
    


</div>
</div>
</section>