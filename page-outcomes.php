<?php
/* Template Name: Outcomes
   Template Post Type: page
*/

get_header();

?>

<main class="content u-margin-top-huge">

    <?php
    $workpackagesList = get_field("outcomes_columns");

    foreach ($workpackagesList as $workpackage) {
        $workpackageName  = $workpackage["title_for_one_period"];
        $outcomesList = $workpackage["column_for_one_period"]


    ?>

        <div class="wp-section mb-5 mt-5">
            <h4 class="mb-5"><?php echo $workpackageName  ?></h4>
            <div class="deliverable-boxes">

                <?php


                foreach ($outcomesList as $outcome) {

                ?>

                    <?php if ($outcome["image_outcome"] && $outcome["image_outcome"]["url"] ) { ?>
                        <div class="deliverable-box">
                            <div class=" mb-3 me-4">
                                <img src="<?php echo $outcome["image_outcome"]["url"]; ?>">
                            </div>
                            <a href="<?php echo $outcome["download_link"]; ?>" target="blank" download>
                                <p>Download</p>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="deliverable-box">
                            <div class="deliverable-box-blue-area mb-3">
                                <div class="circle mt-5 mb-3"> </div>
                                <p><?php echo $outcome["content_of_outcome"] ?></p>
                            </div>
                            <a href="<?php echo $outcome["download_link"]; ?>" download>
                                <p>Download</p>
                            </a>
                        </div>
                    <?php }
                    ?>
                <?php }
                ?>

            </div>
        </div>

    <?php }

    ?>

</main>
<?php
get_footer();
