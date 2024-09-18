<?php
get_header();
?>

<main>
    <section class="heroSec">
        <div class="heroTextDiv">
            <h1>Find din nye bedste ven</h1>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe
                facere labore amet cum aperiam nihil neque quae, iure voluptate
                atque dolorum veniam minima qui corporis! Rem numquam recusandae
                explicabo quis.
            </p>
            <div class="buttonDiv">
                <a href=""><button class="blueButton">Læs mere om adoptionsprocessen</button></a>
            </div>
        </div>
        <div class="heroPic">
            <img
                src="<?php echo get_theme_file_uri('/IMG/adopterDyr/adoptAnimal.png') ?>"
                alt="Billede af hund og par" />
        </div>
    </section>
    <section class="filterSection">
        <form id="animalFilterForm" method="GET">
            <div class="dropdown">
                <button type="button" class="dropdownBtn">Dyreart</button>
                <div class="dropdownOptions">
                    <label>
                        <input type="checkbox" name="allAnimals" value="All" /> Alle
                    </label>
                    <label>
                        <input type="checkbox" name="dog" value="dog" /> Hund
                    </label>
                    <label>
                        <input type="checkbox" name="cat" value="cat" /> Kat
                    </label>
                </div>
            </div>

            <div class="dropdown">
                <button type="button" class="dropdownBtn">Køn</button>
                <div class="dropdownOptions">
                    <label>
                        <input type="checkbox" name="allGenders" value="All" /> Alle
                    </label>
                    <label>
                        <input type="checkbox" name="male" value="male" /> Han
                    </label>
                    <label>
                        <input type="checkbox" name="female" value="female" /> Hun
                    </label>
                </div>
            </div>

            <div class="dropdown">
                <button type="button" class="dropdownBtn">Race</button>
                <div class="dropdownOptions">
                    <label>
                        <input type="checkbox" name="allRaces" value="All" /> Alle Racer
                    </label>
                    <label>
                        <input
                            type="checkbox"
                            name="goldenRetriever"
                            value="goldenRetriever" />
                        Golden Retriever
                    </label>
                    <label>
                        <input type="checkbox" name="pitbull" value="pitbull" /> Pitbull
                    </label>
                    <label>
                        <input type="checkbox" name="dummyBox" value="dummyBox" /> Dummy
                        Box
                    </label>
                </div>
            </div>

            <div class="dropdown">
                <button type="button" class="dropdownBtn">Familievenlig</button>
                <div class="dropdownOptions">
                    <label>
                        <input
                            type="checkbox"
                            name="familyFriendly"
                            value="familyFriendly" />
                        Alle
                    </label>
                    <label>
                        <input
                            type="checkbox"
                            name="familiyFriendlyTrue"
                            value="familiyFriendlyTrue" />
                        Ja
                    </label>
                    <label>
                        <input
                            type="checkbox"
                            name="familiyFriendlyFalse"
                            value="familiyFriendlyFalse" />
                        Nej
                    </label>
                </div>
            </div>

            <div class="dropdown">
                <button type="button" class="dropdownBtn">Egnet til Jagt</button>
                <div class="dropdownOptions">
                    <label>
                        <input type="checkbox" name="huntingDog" value="huntingDog" />
                        Alle
                    </label>
                    <label>
                        <input
                            type="checkbox"
                            name="huntingDogTrue"
                            value="huntingDogTrue" />
                        Ja
                    </label>
                    <label>
                        <input
                            type="checkbox"
                            name="huntingDogFalse"
                            value="huntingDogFalse" />
                        Nej
                    </label>
                </div>
            </div>
        </form>
    </section>

    <section class="animals">
        <div class="nyVenDivAdopted">
            <?php while (have_posts()) {
                the_post();
                $internatTid = get_field('tid_ved_internat'); ?>
                <div class="dyr">
                    <a href="<?php echo get_permalink() ?>">
                        <?php the_post_thumbnail('dyrCard'); ?></a>
                    <a href="<?php echo get_permalink() ?>">
                        <h4><?php the_title() ?></h4>
                    </a>
                    <div class="attributeAnimalCTA">
                        <span class="attributeTitleTime">Været hos os siden d.</span>
                        <div class="lineFEP"></div>
                        <span class="attributeTimevalueTime"><?php echo $internatTid ?></span>
                    </div>
                </div>

            <?php
            } ?>
        </div>
    </section>
    <!-- Her laves en custom query til vores grønne CTA Boks hvor der skal vises 4 tilfældige hver gang der loades -->
    <?php
    $ctaDyr = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'dyr',
        'orderby' => 'rand',
    )); ?>

    <section class="nyVenSec">
        <h3>Din nye ven?</h3>
        <div class="nyVenDiv">
            <?php while ($ctaDyr->have_posts()) {
                $ctaDyr->the_post();
                $internatTid = get_field('tid_ved_internat'); ?>
                <div class="dyr">
                    <a href="<?php echo get_permalink() ?>">
                        <?php the_post_thumbnail('dyrCard'); ?></a>
                    <a href="<?php echo get_permalink() ?>">
                        <h4><?php the_title() ?></h4>
                    </a>
                    <div class="attributeAnimalCTA">
                        <span class="attributeTitleTime">Været hos os siden d.</span>
                        <div class="lineFEP"></div>
                        <span class="attributeTimevalueTime"><?php echo $internatTid ?></span>
                    </div>
                </div>

            <?php
            } ?>

        </div>
        <div class="buttonDiv">
            <a href=""><button class="blueButton">Se alle vores dyr</button></a>
        </div>
    </section>
</main>
<?php get_footer(); ?>