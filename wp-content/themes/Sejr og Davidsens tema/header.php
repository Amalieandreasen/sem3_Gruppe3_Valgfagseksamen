<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body>
    <section class="sellingPointsBar">
        <div class="sellingpoint">
            <img src="<?php echo get_theme_file_uri('/IMG/ikoner/thumbsUp.svg') ?>" alt="Thumbs up ikon" />
            <p>Internat og pension i en</p>
        </div>
        <div class="sellingpoint">
            <img src="<?php echo get_theme_file_uri('/IMG/ikoner/doktor.svg') ?> " alt="Doktor ikon" />
            <p>Drives af uddannet dyrelæge og veterinærsygeplejerske</p>
        </div>
        <div class="sellingpoint">
            <img src="<?php echo get_theme_file_uri('/IMG/ikoner/hjerte.svg') ?>" alt="Hjerte ikon" />
            <p>Vi elsker alle internatdyr og pensionsdyr ens!</p>
        </div>
    </section>
    <header>
        <a href="<?php echo site_url() ?>">
            <img src="<?php echo get_theme_file_uri('/IMG/Forside/logo.png') ?>" alt="logo" class="navlogo" />
        </a>
        <nav>
            <ul>
                <li>
                    <a href="#">Adoption <span class="pil">&#9660;</span></a>
                    <ul class="dropDownAdoption">
                        <li><a href="<?php echo get_post_type_archive_link('dyr') ?>">Adopter et dyr</a></li>
                        <li><a href="<?php echo site_url('/praktisk-information-omkring-adoption') ?>">Praktisk information</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pensionsophold <span class="pil">&#9660;</span></a>
                    <ul class="dropDownPension">
                        <li><a href="<?php echo site_url('/den-daglige-rutine') ?>">Daglig rutine</a></li>
                        <li><a href="<?php echo site_url('/book-ophold') ?>">Book ophold</a></li>
                    </ul>
                </li>
                <li><a href="#">Adfærdstræning</a></li>
                <li><a href="#">Produkter</a></li>
                <li><a href="#">Ekspertviden</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Kontakt os</a></li>
            </ul>
        </nav>
    </header>