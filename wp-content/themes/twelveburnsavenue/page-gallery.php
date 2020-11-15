<?php
get_header();

while ( have_posts() ) {
	the_post();
	?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="synced-slide owl-carousel owl-theme">
                    <div data-hash="photo-1">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </div>
                    <div data-hash="photo-2">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </div>
                    <div data-hash="photo-3">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </div>
                    <div data-hash="photo-4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </div>
                    <div data-hash="photo-5">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </div>
                    <div data-hash="photo-6">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-slider owl-carousel owl-theme">
                    <a href="#photo-1" data-hash="photo-1">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </a>
                    <a href="#photo-2" data-hash="photo-2">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </a>
                    <a href="#photo-3" data-hash="photo-3">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </a>
                    <a href="#photo-4" data-hash="photo-4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </a>
                    <a href="#photo-5" data-hash="photo-5">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </a>
                    <a href="#photo-6" data-hash="photo-6">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/c3f9f63a39924870af4598d888693b8.jpg'; ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
	<?php
}

get_footer();
