<?php

/**
 * Template Name: portal-dev
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
<?php get_template_part('parts/home/banner'); ?>

<section class="relative -top-20 z-50">
    <div class="container">
        <div class="flex flex-col h-[400px] p-5 bg-white">
            <div class="flex border-b border-black py-5 border-opacity-20 items-center justify-between">
                <h1 class="text-[29px]">Большой опыт разработки</h1>
                <div class="flex items-center">
                    <img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/drupal.svg" alt="">
                    <img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/sharepoint.svg" alt="">
                    <img class="px-5 " src="<?php echo get_template_directory_uri(); ?>/resources/img/joomla.svg" alt="">
                    <img class=" px-5" src="<?php echo get_template_directory_uri(); ?>/resources/img/liferay.svg" alt="">
                </div>


            </div>

            <p class="mt-5">Мы создаем пользовательские веб-порталы как для государственных органов, так и коммерческих структур <br> вовлеченных в различные сферы экономики.</p>

            <div class="flex items-center ">
                <div class="div">
                    <span class="text-[110px] font-bold text-primary pr-3">15</span>
                </div>
                <div class="div">
                    <p>
                        лет опыта управленческого состава в сфере IT.
                        В том числе опыт создания сложных веб порталов-от компактных вертикальных решений<br> до сложных горизонтальных и облачных порталов.
                    </p>
                </div>
            </div>


        </div>
    </div>
</section>
<div class="container p-5">

    <h2 class="text-center text-[32px] font bold text-primary uppercase font-bold py-5">Этапы разработки</h2>
    <div class="grid grid-cols-2 mt-10">

        <div class="grid grid-cols-5">
            <div class="col-span-4 py-5 text-right text-primary font-bold uppercase">Определение целей</div>
            <div></div>

            <div class="">
                <div class="flex items-center">
                    <span class="text-[50px] font-bold text-primary border-l-4 border-black border-opacity-20">01</span>
                    <img class=" " src="<?php echo get_template_directory_uri(); ?>/resources/img/bigarrow-r.svg" alt="">
                </div>
            </div>
            <div class="col-span-3 text-right">
                <p>
                    Тщательное изучение
                    предметной области Заказчика.
                    Сбор информации о проекте.
                    Формализация целей и задач.
                </p>
            </div>

            <div class=" flex items-center justify-center">
                <img class="w-[80px] mr-5" src="<?php echo get_template_directory_uri(); ?>/resources/img/icons/task.svg" alt="">
            </div>


        </div>





        <div class="grid grid-cols-5">
            <div class="col-start-2 col-span-5 py-5 text-left text-primary font-bold uppercase">РАЗРАБОТКА ДИЗАЙНА</div>

            <div class=" flex items-center justify-center">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/resources/img/icons/line.svg" alt="">
            </div>

            <div class="col-span-3 text-left">
                <p>
                    Разработка дизайна портала учитывая, пожелания Заказчика и презентация готовых вариантов.
                </p>
            </div>

            <div class="flex items-center order-last">
                <span class="text-[50px] order-last font-bold text-primary border-r-4 border-black border-opacity-20">02</span>
                <img class=" " src="<?php echo get_template_directory_uri(); ?>/resources/img/bigarrow-l.svg" alt="">
            </div>


        </div>












        <div class="grid grid-cols-5 mt-20">
            <div class="col-span-4 py-5 text-right text-primary font-bold uppercase">Составление тз</div>
            <div></div>

            <div class="">
                <div class="flex items-center">
                    <span class="text-[50px] font-bold text-primary border-l-4 border-black border-opacity-20">01</span>
                    <img class=" " src="<?php echo get_template_directory_uri(); ?>/resources/img/bigarrow-r.svg" alt="">
                </div>
            </div>
            <div class="col-span-3 text-right">
                <p>
                    Обсуждение и согласование ТЗ
                    проводится обеими сторонами.
                    Какие то вещи знать не может заказчик, а какие-то исполнитель.
                    Дальнейшая разработка и сдача
                    проекта осуществляется согласно ТЗ .
                </p>
            </div>

            <div class=" flex items-center justify-center">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/resources/img/icons/time-dev.svg" alt="">
            </div>


        </div>





        <div class="grid grid-cols-5 mt-20">
            <div class="col-start-2 col-span-5 py-5 text-left text-primary font-bold uppercase">ВЕРСТКА И ПРОГРАММИРОВАНИЕ</div>

            <div class=" flex items-center justify-center">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/resources/img/icons/people-dev.svg" alt="">
            </div>

            <div class="col-span-3 text-left">
                <p>
                    Верстка согласованных обеими
                    сторонами макетов портала
                    и программирование .
                </p>
            </div>

            <div class="flex items-center order-last">
                <span class="text-[50px] order-last font-bold text-primary border-r-4 border-black border-opacity-20">02</span>
                <img class=" " src="<?php echo get_template_directory_uri(); ?>/resources/img/bigarrow-l.svg" alt="">
            </div>


        </div>



        <div class="grid grid-cols-5 mt-20">
            <div class="col-span-4 py-5 text-right text-primary font-bold uppercase">СОЗДАНИЕ ПРОТОТИПА</div>
            <div></div>

            <div class="">
                <div class="flex items-center">
                    <span class="text-[50px] font-bold text-primary border-l-4 border-black border-opacity-20">01</span>
                    <img class=" " src="<?php echo get_template_directory_uri(); ?>/resources/img/bigarrow-r.svg" alt="">
                </div>
            </div>
            <div class="col-span-3 text-right">
                <p>
                    Создание прототипа для десктопа
                    с учетом пользовательского опыта и максимального удобства
                    использования портала.
                    Согласование всех шагов
                    с Заказчиком.
                </p>
            </div>

            <div class=" flex items-center justify-center">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/resources/img/icons/puzle.svg" alt="">
            </div>


        </div>





        <div class="grid grid-cols-5 mt-20">
            <div class="col-start-2 col-span-5 py-5 text-left text-primary font-bold uppercase">ТЕСТИРОВАНИЕ</div>

            <div class=" flex items-center justify-center">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/resources/img/icons/lupe.svg" alt="">
            </div>

            <div class="col-span-3 text-left">
                <p>
                    Внутреннее тестирование полученного результата командой опытных тестировщиков
                    перед сдачей проекта.

                </p>
            </div>

            <div class="flex items-center order-last">
                <span class="text-[50px] order-last font-bold text-primary border-r-4 border-black border-opacity-20">02</span>
                <img class=" " src="<?php echo get_template_directory_uri(); ?>/resources/img/bigarrow-l.svg" alt="">
            </div>


        </div>




        <div class="grid grid-cols-5 mt-20">
            <div class="col-span-4 py-5 text-right text-primary font-bold uppercase">написание контента</div>
            <div></div>

            <div class="">
                <div class="flex items-center">
                    <span class="text-[50px] font-bold text-primary border-l-4 border-black border-opacity-20">01</span>
                    <img class=" " src="<?php echo get_template_directory_uri(); ?>/resources/img/bigarrow-r.svg" alt="">
                </div>
            </div>
            <div class="col-span-3 text-right">
                <p>
                    На основе анализа деятельности,
                    ниши создаем расширенный
                    контент включающий в себя все
                    основные задачи.
                </p>
            </div>

            <div class=" flex items-center justify-center">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/resources/img/icons/list.svg" alt="">
            </div>


        </div>





        <div class="grid grid-cols-5 mt-20">
            <div class="col-start-2 col-span-5 py-5 text-left text-primary font-bold uppercase">СДАЧА ПРОЕКТА</div>

            <div class=" flex items-center justify-center">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/resources/img/icons/people.svg" alt="">
            </div>

            <div class="col-span-3 text-left">
                <p>
                    Сдача проекта включает в себя
                    сам готовый ресурс со всеми
                    доступами всей документацией
                    по нему. В случае необходимости
                    обеспечиваем техническую
                    поддержку или осуществляем
                    консультации спецалистов Заказчика.

                </p>
            </div>

            <div class="flex items-center order-last">
                <span class="text-[50px] order-last font-bold text-primary border-r-4 border-black border-opacity-20">02</span>
                <img class=" " src="<?php echo get_template_directory_uri(); ?>/resources/img/bigarrow-l.svg" alt="">
            </div>


        </div>







    </div>
</div>
<section>

</section>

<?php get_template_part('parts/marketing'); ?>
<? php // get_template_part( 'parts/home/support'); 
?>


<?php get_footer(); ?>