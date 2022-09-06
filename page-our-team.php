<?php
/* Template Name: Our team
   Template Post Type: page
*/

get_header();

$ourTeamList = get_field('team_expert');
?>

<main class="content u-margin-top-huge mb-5">
    <h1 class="u-margin-bottom-small"><?php echo get_the_title(); ?></h1>

    <div class="all-experts">

        <?php

        foreach ($ourTeamList as $ourTeamExpert) {

        ?>
            <div data-id="<?php echo $ourTeamExpert["name"]; ?>" class="expert">
                <div class="image-container ">
                    <img src="<?php echo $ourTeamExpert["image"]["url"]; ?>">
                    <h4 class="mt-2"><?php echo $ourTeamExpert["name"]; ?></h4>
                    <p class="university mb-0"><a href="<?php echo $ourTeamExpert["organization_url"]; ?>" target="_blank"><?php echo $ourTeamExpert["organization"]; ?></a></p>
                    <p class="role"><?php echo $ourTeamExpert["role"]; ?></p>

                </div>
            </div>
        <?php }
        ?>
    </div>


</main>
<?php
get_footer();
