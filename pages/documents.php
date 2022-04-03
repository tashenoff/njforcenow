<?php

/**
 * Template Name: documents
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

<section style="background-repeat:no-repeat; background-size:cover; background-image: url(<?php echo the_post_thumbnail_url(); ?>);" class="bg-primary text-white">
    <div class="container mx-auto">
        <div class="flex flex-col justify-center items-start  h-[643px]">
            <?php the_title(sprintf('<h1 class="headers"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>


        </div>
    </div>
</section>

<? php // get_template_part( 'parts/home/support'); 
?>


<div class="container">
    <div class="flex w-full">
    <div class="w-full relative">
    <div class="bg-primary h-[50px] w-[50px] block relative -top-40 right-0">1</div>
        <ul>
            <li>Письмо авторизации</li>
            <li>Письмо авторизации</li>
            <li>Письмо авторизации</li>
            <li>Письмо авторизации</li>
            <li>Письмо авторизации</li>
        </ul>

      
    </div>
    <div class="div relative -top-40">

    <div style="width:600px " class="swiper mySwiper-doc">
        <div class="swiper-wrapper">
            <div style="" class="swiper-slide  w-[200px]"><img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/slider.png" alt=""></div>
            <div style="" class="swiper-slide  w-[200px]"> <img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/slider.png" alt=""></div>
            <div style="" class="swiper-slide  w-[200px]"><img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/slider.png" alt=""></div>
            <div style="" class="swiper-slide  w-[200px]"><img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/slider.png" alt=""></div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    </div>
    </div>
    
</div>



<div style="" class="">
    <div class="flex items-end w-full">
    <!-- Swiper -->
    <!-- <div style="width:500px;" class="swiper mySwiper-doc">
        <div class="swiper-wrapper">
            <div style="width:500px;" class="swiper-slide  w-[200px]"><img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/slider.png" alt=""></div>
            <div style="width:500px;" class="swiper-slide  w-[200px]"> <img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/slider.png" alt=""></div>
            <div style="width:500px;" class="swiper-slide  w-[200px]"><img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/slider.png" alt=""></div>
            <div style="width:500px;" class="swiper-slide  w-[200px]"><img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/slider.png" alt=""></div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div> -->
</div>
</div>

<script>
    var swiper = new Swiper(".mySwiper-doc", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<?php get_footer(); ?>