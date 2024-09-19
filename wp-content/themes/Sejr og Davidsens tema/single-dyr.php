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
        <div class="attribute">
            <span class="attribute-title">Race:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Alder:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Farve:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Køn:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Højde:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Vægt:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Familievenlig:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Allergivenlig:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Aktivitetsniveu:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Temperemant:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Vaccineret:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Tid ved internat:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
        <div class="attribute">
            <span class="attribute-title">Trænet til jagt:</span>
            <div class="line"></div>
            <span class="attribute-value">php</span>
        </div>
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