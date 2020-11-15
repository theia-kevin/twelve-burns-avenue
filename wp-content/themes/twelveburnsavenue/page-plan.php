<?php
get_header();

while ( have_posts() ) {
	the_post();
	?>
    <div class="container burns-ave">
        <div class="row">
            <div class="col-lg-12 col-wrapper">
                <img class="img-fluid img-twelve" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 1.png'; ?>" alt="">
                <div class="content-wrapper d-flex flex-column flex-wrap align-items-end">
                    <div class="year py-3">
                        2020
                    </div>
                    <div class="title-wrapper pb-5">
                        <div class="title-1">
                            Burns Ave
                        </div>
                        <div class="title-2">
                            Takapuna &#9702; Auckland
                        </div>
                    </div>
                    <div class="txt-wrapper">
                        <div class="txt-1">Experience having the best support</div>
                        <div class="txt-2">facilities located <span class="three-sixty">360&#8217;</span> around your
                        </div>
                        <div class="txt-3">home. Live in an area with one of the</div>
                        <div class="txt-4">best standards of living in all of</div>
                        <div class="txt-5">Auckland.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
}

get_footer();
