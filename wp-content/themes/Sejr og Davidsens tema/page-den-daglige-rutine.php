<?php
/*
Template Name: Den daglige rutine
*/ ?>

<?php get_header() ?>

<section class="heroDagligRutine">
    <h1><?php echo get_the_title() ?></h1>
    <p>
        <?php echo get_the_content() ?>
    </p>
</section>
<section class="dagligRutineSec">
    <section class="dagligRutineInnersec">
        <div class="greenBox">
            <img
                src="<?php echo get_theme_file_uri('/IMG/ikoner/sortHundepote.svg') ?>"
                alt="Ikon af hundepote" />
            <h3>kl. 7 - 8</h3>
            <p>Godmorgen. Personalet siger godmorgen til alle dyr</p>
        </div>
        <div class="greenBox">
            <img
                src="<?php echo get_theme_file_uri('/IMG/ikoner/sortHundepote.svg') ?>"
                alt="Ikon af hundepote" />
            <h3>kl. 8 - 9</h3>
            <p>morgengåtur og morgenmad</p>
        </div>
        <div class="greenBox">
            <img
                src="<?php echo get_theme_file_uri('/IMG/ikoner/sortHundepote.svg') ?>"
                alt="Ikon af hundepote" />
            <h3>kl. 9 - 14</h3>
            <p>Kæl, kram og snusetid.</p>
        </div>
    </section>
    <section class="dagligRutineInnersec">
        <div class="greenBox">
            <img
                src="<?php echo get_theme_file_uri('/IMG/ikoner/sortHundepote.svg') ?>"
                alt="Ikon af hundepote" />
            <h3>kl. 14 - 17</h3>
            <p>Eftermiddagsgåtur og aktivering</p>
        </div>
        <div class="greenBox">
            <img
                src="<?php echo get_theme_file_uri('/IMG/ikoner/sortHundepote.svg') ?>"
                alt="Ikon af hundepote" />
            <h3>kl. 17 - 18</h3>
            <p>Aftensmad serveres</p>
        </div>
        <div class="greenBox">
            <img
                src="<?php echo get_theme_file_uri('/IMG/ikoner/sortHundepote.svg') ?>"
                alt="Ikon af hundepote" />
            <h3>kl. 18 - 22</h3>
            <p>Vi begynder at gå til ro og får sagt trygt godnat til alle dyr</p>
        </div>
    </section>
    <div class="buttonDiv">
        <a href="<?php echo site_url('/book-ophold') ?>"><button class="blueButton">Book pensionsophold</button></a>
    </div>
</section>
<section class="dagligRutineCtaSec">
    <div>
        <h3>Har du spørgsmål?</h3>
        <p>
            Så tøv endelig ikke med at kontakte os. Vi sidder klare på telefon og
            mail i åbningstiden til at svare på alle de spørgsmål som du skulle
            have. <br />
            <br />
            Vi prioritere at du føler dig sikker i dit valg af dyrepension og
            internat, og vi forstår dig og dine bekymringer.
        </p>
        <div class="buttonDiv">
            <a href="<?php echo get_post_type_archive_link('#') ?>"><button class="blueButton">Kontakt os nu</button></a>
        </div>
    </div>
    <div>
        <img
            src="<?php echo get_theme_file_uri('/IMG/dagligRutine/spørgsmål.png') ?>"
            alt="Billede af en hund med bold" />
    </div>
</section>

<?php get_footer() ?>