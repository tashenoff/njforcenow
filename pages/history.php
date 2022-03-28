<?php

/**
 * Template Name: history
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
<?php get_template_part('parts/home/banner'); ?>

<section class="relative -top-20 z-50">
    <div class="container px-40">
        <div class="grid grid-cols-2 gap-0">
            <div class="div">
                <img class="block" src="<?php echo get_template_directory_uri(); ?>/resources/img/h1.png" alt="">
            </div>
            <div class="row-span-2 relative flex items-center justify-center text-center text-white">
                <div class="bg-primary flex flex-col absolute p-5 ">
                    <span>более</span>
                    <span class="text-[100px] font-bold text-white">100</span>
                    <span>реализованных <br> проектов</span>
                </div>
                <img class="block" src="<?php echo get_template_directory_uri(); ?>/resources/img/h3.png" alt="">
            </div>

            <div class="relative flex items-center justify-center">
                <img class="block" src="<?php echo get_template_directory_uri(); ?>/resources/img/h2.png" alt="">
                <div class="bg-primary flex flex-col absolute -top-[110px] p-5 ">

                    <span class="text-[80px] text-center font-bold text-white">15</span>
                    <span class="text-white text-center">лет опыта <br>
                        управленческого <br>
                        состава в сфере IT</span>
                </div>
            </div>

        </div>
    </div>

</section>

<section class="site-footer bg-banner relative bg-banner__marketing text-white py-12 h-[100px] flex items-center">
    <div class="container relative z-50">
        <div class="flex justify-between w-full text-white items-center">
            <div class="div">
                <h1>технологии</h1>
            </div>
            <div class="div">
                <button class="px-5 py-2 border-white border mr-5"> <i class="icon-arrow-right-cirle mr-3"></i> Скачать презентацию</button>
                <button class="px-5 py-2 border-white border"> <i class="icon-arrow-right-cirle mr-3"></i> Скачать презентацию</button>
            </div>

        </div>
    </div>
</section>



<section>

    <div class="hex-grid__wrap">
        <ul class="hex-grid__list">
            <li class="hex-grid__item hex-grid__item--light hex-grid__item--fake"></li>
            <li class="hex-grid__item hex-grid__item--blank"></li>
            <li class="hex-grid__item hex-grid__item--light hex-grid__item--fake"></li>
            <li class="hex-grid__item hex-grid__item--blank"></li>
            <li class="hex-grid__item hex-grid__item--light hex-grid__item--fake"></li>
            <li class="hex-grid__item">

                <p class="hex-grid__content">Платформы
                    <span class="text-[12px] mt-4">Microsoft Windows, Linux, IBM AIX, Sun Solaris</span>
                </p>
            </li>
            <li class="hex-grid__item">
                <p class="hex-grid__content">Базы данных
                    <span class="text-[12px] mt-4">Microsoft SQL Server,
                        IBM Db2, Firebird, Oracle </span>
                </p>
            </li>
            <li class="hex-grid__item hex-grid__item--light hex-grid__item--fake"></li>
            <li class="hex-grid__item hex-grid__item--light hex-grid__item--fake"></li>
            <li class="hex-grid__item">
                <p class="hex-grid__content">Методы тестирования
                <span class="text-[12px] mt-4">Интерфейсное, функциональное, нагрузочное  
</span>
                </p>
            </li>
            <li class="hex-grid__item hex-grid__item--light hex-grid__item--fake"></li>
            <li class="hex-grid__item ">
                <p class="hex-grid__content">Application <br>Servers
                <span class="text-[12px] mt-4">IBM  WebSphere,  
Apache Tomcat,  Weblogic Server, JBOSS, Glassfish</span>

                </p>
            </li>
            <li class="hex-grid__item hex-grid__item--blank"></li>
            <li class="hex-grid__item ">
                <p class="hex-grid__content">Средства разработки
                <span class="text-[10px] mt-4">IBM  WebSphere,  
                Java, Delphi, Visual Studio,
Net, C++, JavaScript, C#,  JSP, HTML, XML,  WSDL, UML, IBM Rational Rose, IBM Modeler,MS Visio, ERWin, SQL, EnterprisArchetecht  
</span>
                </p>
            </li>
        </ul>
    </div>
</section>


<section>

</section>



<?php get_footer(); ?>