<?php
get_header();

while ( have_posts() ) {
	the_post();
	?>
    <div class="container take-pride" data-aos="slide-up">
        <div class="row">
            <div class="col-lg-5">
                <div class="img-1 d-flex flex-row flex-wrap justify-content-end align-items-start">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 34.png'; ?>" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-5 col-lg-7">
                <div class="content-wrapper">
                    <div class="title pb-5">
                        <div>We take pride in our</div>
                        <div>professionalism, and develop</div>
                        <div>Auckland with our enthusiasm.</div>
                    </div>
                    <div class="txt pb-1">
                        <div><span>Our mission</span> is to provide a premium and private living experience for</div>
                        <div>Aucklanders at one of our busiest urban areas in Tāmaki Makurau</div>
                    </div>
                    <div class="txt pb-1">
                        <div><span>Our passion</span> is to make our developments stand out, and being unique just like
                        </div>
                        <div>the proud residents who live within them.</div>
                    </div>
                    <div class="txt pb-1">
                        <div><span>Our value</span> is to serve 1.5 million Aucklanders who live in our diverse and
                            dynamic
                        </div>
                        <div>community, with sustainable and innovative projects.</div>
                    </div>
                </div>
                <div class="our-partners">
                    <div class="title pb-5">Our Partners:</div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 d-flex flex-row flex-wrap justify-content-center align-items-center">
                                    <img class="p-3" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 40.png'; ?>" alt="">
                                </div>
                                <div class="col-lg-6 d-flex flex-row flex-wrap justify-content-center align-items-center">
                                    <img class="p-3" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 42.png'; ?>" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 d-flex flex-row flex-wrap justify-content-center align-items-center">
                                    <img class="p-3" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 44.png'; ?>" alt="">
                                </div>
                                <div class="col-lg-6 d-flex flex-row flex-wrap justify-content-center align-items-center">
                                    <img class="p-3" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 45.png'; ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-row flex-wrap justify-content-center align-items-start">
                            <img class="p-3" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 43.png'; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	get_template_part( 'template-parts/contact-form', 'left' );
}

get_footer();
