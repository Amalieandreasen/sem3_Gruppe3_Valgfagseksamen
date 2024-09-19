<?php
get_header();
while (have_posts()) {
    the_post();
}
?>

<main>
    <section class="heroSec">
        <div class="animalDesc">
            <h1>
                <?php the_title(); ?>
            </h1>
            <p>
                <?php the_content(); ?>
            </p>
        </div>
        <div class="animalPic">
            <?php the_post_thumbnail('dyrImg') ?>
        </div>
    </section>
    <section class="kontaktFlex">
        <section class="bookKontakt">
            <a href="#" class="blueBoxLink">
                <div class="blueBox">
                    <img
                        src="<?php echo get_theme_file_uri('/IMG/singleAnimal/mobile.png') ?>"
                        alt="Ikon af mobil" />
                    <h3>Book FaceTime</h3>
                </div>
            </a>
            <a href="#" class="blueBoxLink">
                <div class="blueBox">
                    <img
                        src="<?php echo get_theme_file_uri('/IMG/singleAnimal/dog.png') ?>"
                        alt="Ikon af hund" />
                    <h3>Mød <?php the_title() ?></h3>
                </div>
            </a>
            <a href="#" class="blueBoxLink">
                <div class="blueBox">
                    <img
                        src="<?php echo get_theme_file_uri('/IMG/singleAnimal/calendar.png') ?>"
                        alt="Ikon af kalender" />
                    <h3>Reserver <?php the_title() ?></h3>
                </div>
            </a>
        </section>
    </section>

    <section class="animalAttributes">
        <h3><?php the_title() ?>'s Egenskaber</h3>
        <?php
        // Her laves et associative array til foreach loopet som skal køre igennem alle egenskaberne
        $attributes = [
            'Alder' => 'alder',
            'Farve' => 'farver',
            'Køn' => 'kon',
            'Højde' => 'hojde',
            'Vægt' => 'vaegt',
            'Familievenlig' => 'familievenlig',
            'Været hos os siden d. ' => 'tid_ved_internat',
            'Trænet til jagt' => 'traenet_til_jagt'
        ];

        // Her indsætter vi dataen fra race relationsship. 
        $relatedRaces = get_field('race');
        //Koden køres hvis der er en race tilknyttet
        if ($relatedRaces) { ?>
            <div class="attribute">
                <span class="attribute-title">Race:</span>
                <div class="line"></div>

                <?php
                // der loopes igennem alle racer og der echoes titlen fra tilknyttet race 
                foreach ($relatedRaces as $race) { ?>
                    <span class="attribute-value"> <?php echo get_the_title($race->ID) ?> </span>
                <?php
                } ?>

            </div>
            <?php
        }
        // Her loppes igennem alle andre egenskaber der er tilknyttet til hvert dyr
        foreach ($attributes as $label => $fieldName) {
            $fieldValue = get_field($fieldName);


            if ($fieldValue) {
            ?>
                <div class="attribute">
                    <span class="attribute-title"><?php echo $label ?></span>
                    <div class="line"></div>
                    <span class="attribute-value"><?php echo $fieldValue ?></span>
                </div>
        <?php
            }
        }
        ?>
    </section>

    <section class="animalAttributes">
        <h3> Racens Egenskaber</h3>

        <?php
        $relatedRace = get_field('race');

        if ($relatedRace) {
            $race = $relatedRace[0];

            $raceAttributes = [
                'Aktivitetsniveau' => 'aktivitetsniveau',
                'Allergivenlig' => 'allergivenlig',
                'Pelstype' => 'pelstype'
            ];

            foreach ($raceAttributes as $raceLabel => $raceFieldName) {
                $raceFieldValue = get_field($raceFieldName, $relatedRace[0]);

                if ($raceFieldValue) {
        ?>
                    <div class="attribute">
                        <span class="attribute-title"><?php echo $raceLabel; ?>:</span>
                        <div class="line"></div>
                        <span class="attribute-value"><?php echo esc_html($raceFieldValue); ?></span>
                    </div>
        <?php
                }
            }
        }
        ?>
    </section>


    <section class="nyVenSec">
        <h3>Din nye ven?</h3>
        <div class="nyVenDiv">
            <div class="dyr">
                <img src="../Assets/Img/Forside/dummyDog.png" alt="" />
                <h4>Bob</h4>
                <div class="attributeAnimalCTA">
                    <span class="attributeTitleTime">Tid hos internat:</span>
                    <div class="lineFEP"></div>
                    <span class="attributeTimevalueTime">php</span>
                </div>
            </div>
            <div class="dyr">
                <img src="../Assets/Img/Forside/dummyDog.png" alt="" />
                <h4>Bob</h4>
                <div class="attributeAnimalCTA">
                    <span class="attributeTitleTime">Tid hos internat:</span>
                    <div class="lineFEP"></div>
                    <span class="attributeTimevalueTime">php</span>
                </div>
            </div>
            <div class="dyr">
                <img src="../Assets/Img/Forside/dummyDog.png" alt="" />
                <h4>Bob</h4>
                <div class="attributeAnimalCTA">
                    <span class="attributeTitleTime">Tid hos internat:</span>
                    <div class="lineFEP"></div>
                    <span class="attributeTimevalueTime">php</span>
                </div>
            </div>
            <div class="dyr">
                <img src="../Assets/Img/Forside/dummyDog.png" alt="" />
                <h4>Bob</h4>
                <div class="attributeAnimalCTA">
                    <span class="attributeTitleTime">Tid hos internat:</span>
                    <div class="lineFEP"></div>
                    <span class="attributeTimevalueTime">php</span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>