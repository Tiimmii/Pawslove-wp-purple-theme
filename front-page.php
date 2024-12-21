<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pawslove
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="container img-carousel  pb-5 pt-3">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="<?php echo get_template_directory_uri(). '/images/1.jpg' ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo get_template_directory_uri(). '/images/2.jpg' ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(). '/images/3.jpg' ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="container">
            <h1 class="text-center">
                Popular Products
            </h1>
            <p class="text-center">We offer a number of high quality toys to help keep <br/> your pets health and spoiled</p>

            <div class="pt-5 pb-5">
                <?php echo do_shortcode('[products popularity columns=4 limit=4]'); ?>
            </div>
    </section>

    <section class="categories py-5">
        <div class="container">
            <h1 class="text-center pt-5">Categories</h1>
            <p class="text-center">We offer a number of high quality toys to help keep <br/> your pets health and spoiled</p>
            
            <div class="row pt-5">
            <div class="categories__col col-md-4 col-sm-12 mb-3">
                <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                    <img class="position-absolute top-0 buttom-0 end-0 start-0" src="<?php echo get_template_directory_uri(). '/images/snug.jpg' ?>" alt="dog snug" loading="lazy"/>
                    <h2 class="h2 position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Toys</h2>
                </a>
            </div>

            <div class="categories__col col-md-4 col-sm-12 mb-3">
                <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                    <img class="position-absolute top-0 buttom-0 end-0 start-0" src="<?php echo get_template_directory_uri(). '/images/dog-catching-a-biscuit.jpg' ?>" alt="dog catching a biscuit" loading="lazy"/>
                    <h2 class="h2 position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Food</h2>
                </a>
            </div>

            <div class="categories__col col-md-4 col-sm-12 mb-3">
                <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                    <img class="position-absolute top-0 buttom-0 end-0 start-0" src="<?php echo get_template_directory_uri(). '/images/dog-wearing-costume.jpg' ?>" alt="dog wearing a costume" loading="lazy"/>
                    <h2 class="h2 position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Care</h2>
                </a>
            </div>
        </div>

        <div class="row mb-3">
            <div class="categories__col col-md-4 col-sm-12">
                <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                    <img class="position-absolute top-0 buttom-0 end-0 start-0" src="<?php echo get_template_directory_uri(). '/images/dog-wearing-costume.jpg' ?>" alt="dog wearing a costume" loading="lazy"/>
                    <h2 class="h2 position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Accessories</h2>
                </a>
            </div>

            <div class="categories__col col-md-8 col-sm-12">
                <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                    <img class="special-offer position-absolute top-0 buttom-0 end-0 start-0" src="<?php echo get_template_directory_uri(). '/images/cute-happy-dog.jpg' ?>" alt="cute happy dog" loading="lazy"/>
                    <h2 class="special-offer-text position-absolute bottom-0 h-full start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white d-flex flex-column align-items-center justify-content-center">Special Offers <p class="-off">UP TO 40% OFF</p></h2>
                </a>
            </div> 
        </div>
        </div>

    </section>

    <section class="container">
        <h1 class="text-center">
            Special Offers
        </h1>
        <p class="text-center">We offer a number of high quality toys to help keep <br/> your pets health and spoiled</p>

        <div class="pt-5 pb-5">
            <?php echo do_shortcode('[sale_products columns=4 limit=4]'); ?>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();
