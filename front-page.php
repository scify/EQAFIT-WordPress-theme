<?php

/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eqafit
 */

get_header();

$targetGroupsList = get_field('target_groups');

$keyConceptsList = get_field('key_concepts');

$counter         = 0;

?>

<main>

    <!-- Back to top button -->
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <section class="section-main-title content-small u-margin-top-huge">
        <div class="section-main-title__text">
            <h1 class="heading-primary u-margin-top-big"><?php echo get_the_title(); ?></h1>
            <p class="heading-secondary"><?php echo get_field("subtitle") ?></p>
        </div>
        <div>
            <img class="img-fluid" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . "/images/title-image.png" ?>" alt="title-image">
        </div>

    </section>

    <section class="section-welcome u-margin-top-huge">
        <div class="content">
            <h1>Welcome to the EQAFIT Project!</h1>
            <div>
                <p>
                    <a href="https://www.eqafit.org/our-team/">Meet our team</a> and stay tuned for the upcoming results by following us on <a href="https://www.linkedin.com/showcase/eqafit/" target="_blank"category_image>LinkedIn</a> and subscribing to our <a href="http://eepurl.com/hSYm_9" target="_blank">newsletter</a>!
                </p>
                <a href="http://eepurl.com/hSYm_9"  target="_blank" class="btn mt-5 rounded">Subscribe to our newsletter</a>

            </div>
        </div>


    </section>

    <section class="section-about content u-margin-top-huge" id="about">
        <div class="u-margin-bottom-big content-small">
            <h2 class="u-margin-bottom-small">About the project</h2>
            <p><?php echo get_field("about_the_project_description") ?> </p>
        </div>
        <div class="content-small">
            <h2 class="u-margin-bottom-small">Main output</h2>
            <p> <?php echo get_field("main_output_description") ?></p>

        </div>
    </section>

    <section class="section-target-groups content u-margin-top-huge" id="target-groups">
        <h1 class="u-margin-bottom-small">Τarget Groups</h1>

        <div class="all-target-groups mt-5">


            <?php

            foreach ($targetGroupsList as $targetGroup) {

            ?>

                <div class="target-group">
                    <div class="target-group-box mb-5">
                        <h5 class="mt-2"><b><?php echo $targetGroup["target_group_name"]; ?></b></h5>
                        <i class="fas fa-chevron-down"></i>
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="target-group-impacts">
                        <a href="javascript:void(0)" class="close"></a>
                        <div>
                            <h4><b><?php echo $targetGroup["target_group_description_question"]; ?></b></h4>
                            <p><?php echo $targetGroup["target_group_description"]; ?></p>
                        </div>

                    </div>
                </div>
            <?php }
            ?>

        </div>
    </section>

    <section class="section-basic-objectives u-margin-top-huge" id="basic-objectives">
        <div class="content">
            <h1>Basic objectives</h1>
            <div>
                <ol>
                    <li class="mt-5"><span>1</span><?php echo get_field("basic_objectives_1") ?></li>
                    <li class="mt-5"><span>2</span><?php echo get_field("basic_objectives_2") ?></li>
                </ol>
            </div>
        </div>


    </section>

    <section class="section-the-challenge u-margin-top-huge" id="the-challenge">
        <div class="content">
            <h1 class="mb-5">The challenge </h1>
            <p><?php echo get_field("the_challenge_description") ?> </p>
        </div>
    </section>

    <section class="section-key-concepts content u-margin-top-huge" id="key-concepts">
        <h1 class="mb-5">Key concepts </h1>

        <div class="accordion accordion-flush" id="accordionFlushExample">

            <?php

            foreach ($keyConceptsList as $keyConcept) {
                $counter++;
            ?>

                <div class="accordion-item mb-4">
                    <h2 class="accordion-header key-title" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#key-<?php echo $counter ?>" aria-expanded="false" aria-controls="key-<?php echo $counter ?>">
                            <i class="fas fa-plus-circle"></i>
                            <i class="fas fa-minus-circle"></i> <b><?php echo $keyConcept["key_concept_title"]; ?></b>
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" id="key-<?php echo $counter ?>">
                        <div class="accordion-body"><?php echo $keyConcept["key_concept_description"]; ?></div>
                    </div>
                </div>
            <?php }
            ?>


        </div>

    </section>

    <section class="section-project-roadmap  u-margin-top-huge" id="project-roadmap">
        <h1 class="content">Project roadmap</h1>
        <div class="roadmap-bck">

            <?php echo do_shortcode(get_field("project_roadmap")) ?>
        </div>

    </section>

    <section class="section-consortium content u-margin-top-huge" id="consortium">
        <h1>Consortium</h1>
        <div class="consortium-logos mt-5">
            <a href="https://www.folkuniversitetet.se/" target="_blank"> <img class="img-fluid  mb-5" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . "/images/Folkuniversitetet_logo.png" ?>" alt="logo_folk"></a>
            <a href="https://www.asseffebi.eu/?lang=en" target="_blank"><img class="img-fluid mb-3" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . "/images/logo_Effebi.png" ?>" alt="logo_Effebi"></a>
            <a href="https://www.efpa.es/" target="_blank"><img class="img-fluid mb-3" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . "/images/logo_EFPA.png" ?>" alt="logo_EFPA"></a>
            <a href="https://www.ebtn-association.eu/" target="_blank"><img class="img-fluid mb-5" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . "/images/logo_EBTN.jpg" ?>" alt="logo_EBTN"></a>
            <a href="https://www.frankfurt-school.de/en/home" target="_blank"><img class="img-fluid mb-5" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . "/images/logo_FS.png" ?>" alt="logo_FS"></a>
            <a href="https://euba.sk/en/" target="_blank"><img class="img-fluid mb-3" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . "/images/logo_UEBA.png" ?>" alt="logo_UEBA"></a>
            <a href="https://licecohd.eu/" target="_blank"><img class="img-fluid  mb-5" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . "/images/logo_EG.png" ?>" alt="logo_FS"></a>

            <a href="http://www.scify.gr/site/en/" target="_blank"> <img class="img-fluid  mb-3" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . "/images/logo_scify.png" ?>" alt="logo_scify"></a>

        </div>




    </section>

</main>


<?php
get_footer();
