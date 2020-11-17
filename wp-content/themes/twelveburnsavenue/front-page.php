<?php
get_header();

while (have_posts()) {
    the_post();
    ?>
    <div class="container burns-ave" data-aos="slide-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="img-wrapper">
                    <img class="img-fluid img-twelve" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 1.png'; ?>" alt="">
                    <div class="content-wrapper d-flex flex-column flex-wrap align-items-start" data-aos="slide-up">
                        <div class="title-wrapper">
                            <div>
                                <div class="year">2020</div>
                                <div class="title-1">Burns Ave</div>
                            </div>
                            <div class="title-2">Takapuna &#9702; Auckland</div>
                        </div>
                        <div class="txt">Experience having the best support facilities located
                            <span class="three-sixty">360&#8217;</span> around your home. Live in an area with one of
                            the best standards of living in all of Auckland.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container lifestyle" data-aos="slide-up">
        <div class="row">
            <div class="col-lg-7">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 4.png'; ?>" alt="">
            </div>
            <div class="col-lg-5 d-flex flex-column flex-wrap justify-content-center align-items-start">
                <div class="p-5">
                    <div class="title pb-5">Lifestyle</div>
                    <div class="subtitle pb-5">
                        <div>A Home</div>
                        <div>For Your</div>
                        <div>Grand Living</div>
                    </div>
                    <div class="txt-wrapper">
                        <div class="txt-1">Takapuna - Unbeatable Location</div>
                        <div class="txt-2">Experience living in one of the best locations in New Zealand.</div>
                    </div>
                    <a href="<?php echo get_permalink(get_page_by_path('lifestyle')); ?>" class="d-inline-flex flex-row flex-wrap align-items-center pt-5">
                        <div class="txt-readmore">Read More</div>
                        <div class="btn-readmore ml-3"><i class="fa fa-angle-right"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 akaruna-auckland" data-aos="slide-up">
        <div class="row no-gutters">
            <div class="offset-lg-4 col-lg-8">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 5.png'; ?>" alt="">
            </div>
        </div>
    </div>
    <div class="container high-quality-interiors-1" data-aos="slide-up">
        <div class="row">
            <div class="offset-lg-6 col-lg-6 col-wrapper">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 7.png'; ?>" alt="">
                <div class="content-wrapper">
                    <div class="title-wrapper py-5">
                        <div class="title-1">High</div>
                        <div class="title-2">Quality</div>
                        <div class="title-3">Interiors</div>
                    </div>
                    <div class="txt-1">Experience a home designed from the latest</div>
                    <div class="txt-2">trends, and built with the highest quality.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container high-quality-interiors-2" data-aos="slide-up">
        <div class="row">
            <div class="col-lg-10">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 9.png'; ?>" alt="">
                <div class="txt-wrapper">
                    <div class="txt-1">Interior Design</div>
                    <div><span class="txt-2">by</span> <span class="txt-3">Award-Winning Designer</span></div>
                    <div class="txt-4 pt-3">Robert Xia</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container key-features" data-aos="slide-up" id="plan">
        <div class="row pb-5">
            <div class="offset-lg-2 col-lg-10 text-center text-lg-right">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 10.png'; ?>" alt="">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 11.png'; ?>" alt="">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 12.png'; ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-4 col-lg-8 px-5 px-lg-0">
                <div class="title py-1 my-3">Key Features</div>
                <div class="subtitle">Structure</div>
                <div class="txt">Composite concrete floor system; Steel beam and steel column system with H1.2</div>
                <div class="txt">Structural framing exterior wall.</div>
                <div class="subtitle">Cladding</div>
                <div class="txt">High quality mix of exterior and long lasting cladding materials with a layer of GIB
                </div>
                <div class="txt">Weather line system as Rigid air barrier giving additional weather protection.</div>
                <div class="subtitle">Roof</div>
                <div class="txt">Metal craft colour steel long run roof</div>
                <div class="txt">Exposed Downpipe; Metal downpipe system with colour steel finish.</div>
                <div class="txt">Powder coated aluminium joinery with double glazing.</div>
                <div class="subtitle">Balcony</div>
                <div class="txt">Glass balustrade and composite decking on jacks over membrane to concrete and steel
                    structure.
                </div>
                <div class="subtitle">Insulation</div>
                <div class="txt">Insulation to exterior walls and roof to meet NZ Building Code.</div>
                <a href="<?php echo get_permalink(get_page_by_path('design')); ?>" class="d-inline-flex flex-row flex-wrap align-items-center pt-5">
                    <div class="txt-readmore">Read More</div>
                    <div class="btn-readmore ml-3"><i class="fa fa-angle-right"></i></div>
                </a>
            </div>
        </div>
    </div>
    <div class="container floor-plan" data-aos="slide-up">
        <div class="row">
            <div class="col-lg-7">
                <div class="title-wrapper pb-5">
                    <div class="title-1">Floor Plan</div>
                    <div class="title-2">of Units</div>
                </div>
                <div class="txt-1">Know exactly how your new home will be laid out</div>
                <div class="txt-2">with our latest flooring plan design.</div>
            </div>
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column flex-wrap">
                    <li class="nav-item">
                        <a class="nav-link p-0 py-3 my-1" data-toggle="tab" href="#level4">Level 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-0 py-3 my-1" data-toggle="tab" href="#level3">Level 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-0 py-3 my-1" data-toggle="tab" href="#level2">Level 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-0 py-3 my-1 active" data-toggle="tab" href="#level1">Level 1</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <img class="img-fluid m-5" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 14.png'; ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div class="tab-pane container fade" id="level4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 13.png'; ?>" alt="">
                    </div>
                    <div class="tab-pane container fade" id="level3">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 13.png'; ?>" alt="">
                    </div>
                    <div class="tab-pane container fade" id="level2">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 13.png'; ?>" alt="">
                    </div>
                    <div class="tab-pane container active" id="level1">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 13.png'; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_template_part('template-parts/contact-form', 'right');
}

get_footer();
