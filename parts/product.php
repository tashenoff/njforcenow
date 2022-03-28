
<h1 class="text-[35px] font-bold uppercase">дополнительные товары</h1>
<div id="product" class="grid lg:grid-cols-4 grid-cols-1 my-10 gap-4">
   

    <?php if( have_rows('products') ): ?>

    <?php while( have_rows('products') ): the_row(); 

    // vars
    $image = get_sub_field('photo');
    $title = get_sub_field('title');
    $text = get_sub_field('desc');
    $price = get_sub_field('price');
    ?>
    

    <div class="flex justify-between flex-col border border-dark border-opacity-20 p-3 rounded-lg">
    <img class="object-contain w-full h-[200px]" src="<?php echo $image['url']; ?>" />
   <h5 class="text-dark font-bold uppercase my-5">
        <?php echo $title; ?></h5>
   <div class="font-bold uppercase">
        цена: <span class="font-bold uppercase text-dark">
            <?php echo $price; ?></span><span> Тенге</span> </div>
            <div class="my-3">
    <?php echo $text; ?>
    </div>

    <a class="w-full" href="https://api.whatsapp.com/send?phone=87473544930&text=%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0">
    <button class="w-full transition-all hover:border-primary rounded-lg px-5 py-2 border border-black border-opacity-20 hover:bg-primary hover:text-white">заказать</button>
    </a>

    </div>


<?php endwhile; ?>

<?php endif; ?>

</div>