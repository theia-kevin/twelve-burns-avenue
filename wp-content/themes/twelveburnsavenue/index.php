<?php
get_header();

while ( have_posts() ) {
	the_post();
	?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                <div class="display-4"><?php echo get_the_title(); ?></div>
                <p><?php echo get_the_content(); ?></p>
            </div>
        </div>
    </div>
	<?php
}

get_footer();
