<?php get_header() ?>

<main>
    <section class="heroVideo">
        <video
            src="<?php echo get_theme_file_uri('/IMG/Forside/forsideHeroVideo.mp4') ?>"
            autoplay
            muted
            loop
            playsinline></video>
        <div class="textOverlay">
            <div class="heroText">
                <h1>
                    Søger du en ny bedste ven <br />
                    eller <br />
                    tryg pasning til din firbenede ven?
                </h1>
            </div>
        </div>
    </section>

    <section class="owners">
        <div class="ownerAndTxtTop">
            <img src="<?php echo get_theme_file_uri('/IMG/Forside/merete.png') ?>" alt="Merete Sejr" />
            <div class="ownerDesc">
                <h3>Merete Sejr - Fagdyrelæge og Ejer</h3>
                <p>
                    Merete Sejr er ejer af Sejr og Davidsens Dyrepension og -internat
                    og er en erfaren og passioneret dyrlæge med en specialisering
                    inden for sygdomme hos hunde og katte. Hun har en baggrund som
                    praktiserende dyrlæge og bringer over 20 års erfaring med sig fra
                    både egen klinik og videreuddannelse som fagdyrlæge. Hendes
                    ekspertise sikrer, at alle dyr, som kommer til pensionen, får
                    professionel pleje og omsorg. Merete brænder for at skabe trygge
                    omgivelser for både kæledyr og deres ejere, og hun har altid fokus
                    på at kombinere sin dybtgående faglighed med en personlig og
                    kærlig tilgang til hvert enkelt dyr. Selv om hun ikke længere
                    driver sin egen praksis, har hun stadig ret til at praktisere og
                    står altid klar til at yde rådgivning og vejledning om dyrenes
                    sundhed.
                </p>
            </div>
        </div>
        <div class="ownerAndTxtBottom">
            <div class="ownerDesc">
                <h3>Jesper Davidsen – Medejer og Veterinærsygeplejerske</h3>
                <p>
                    Merete Sejr er ejer af Sejr og Davidsens Dyrepension og -internat
                    og er en erfaren og passioneret dyrlæge med en specialisering
                    inden for sygdomme hos hunde og katte. Hun har en baggrund som
                    praktiserende dyrlæge og bringer over 20 års erfaring med sig fra
                    både egen klinik og videreuddannelse som fagdyrlæge. Hendes
                    ekspertise sikrer, at alle dyr, som kommer til pensionen, får
                    professionel pleje og omsorg. Merete brænder for at skabe trygge
                    omgivelser for både kæledyr og deres ejere, og hun har altid fokus
                    på at kombinere sin dybtgående faglighed med en personlig og
                    kærlig tilgang til hvert enkelt dyr. Selv om hun ikke længere
                    driver sin egen praksis, har hun stadig ret til at praktisere og
                    står altid klar til at yde rådgivning og vejledning om dyrenes
                    sundhed.
                </p>
            </div>
            <img src="<?php echo get_theme_file_uri('/IMG/Forside/jesper.png') ?>" alt="Jesper Davidsen" />
        </div>
    </section>
    <?php include 'cta-dyr.php'; ?>
    <section class="internatPensionSec">
        <div>
            <div class="ownerAndTxtTop">
                <img src="<?php echo get_theme_file_uri('/IMG/Forside/internat.png') ?>" alt="Billede 2 hunde fra internatet" />
                <div class="ownerDesc">
                    <h3>Internatet</h3>
                    <p>
                        Sejr og Davidsens Dyrepension og -internat er en af Nordjyllands
                        førende dyrepensioner, hvor hunde- og katteejere kan få tryg og
                        professionel pasning af deres kæledyr. Ejeren Merete Sejr,
                        dyrlæge med specialisering i hunde- og kattesygdomme, samt
                        medejer Jesper Davidsen, uddannet veterinærsygeplejerske med
                        ekspertise i dyreadfærd, sikrer et trygt og omsorgsfuldt miljø
                        for alle dyr. Her kombineres mange års erfaring og faglig
                        ekspertise med kærlighed og omtanke, så både du og dit kæledyr
                        kan føle jer i trygge hænder.
                    </p>
                    <div class="buttonDiv">
                        <a href="<?php echo get_post_type_archive_link('#') ?>"><button class="blueButton">Læs mere om internatet</button></a>
                    </div>
                </div>
            </div>
            <div class="ownerAndTxtBottom">
                <div class="ownerDesc">
                    <h3>Pensionen</h3>
                    <p>
                        Sejr og Davidsens Dyrepension tilbyder kærlig og professionel
                        pasning af hunde og katte i trygge omgivelser. Med mange års
                        erfaring inden for dyrepleje og adfærd sørger Merete Sejr og
                        Jesper Davidsen for, at dit kæledyr får den bedst mulige omsorg
                        under sit ophold. Dyrepensionen er moderne indrettet med
                        rummelige faciliteter, så både hunde og katte kan føle sig
                        hjemme og godt tilpas. Her er fokus på trivsel, leg og sundhed,
                        så du kan være sikker på, at dit dyr har det godt, mens du er
                        væk
                    </p>
                    <div class="buttonDiv">
                        <a href="<?php echo get_post_type_archive_link('#') ?>"><button class="blueButton">Book Ophold</button></a>
                    </div>
                </div>
                <img
                    src="<?php echo get_theme_file_uri('/IMG/Forside/pension.png') ?>"
                    alt="Billede af personale og hunde" />
            </div>
        </div>
    </section>

    <section class="commentWrapper">
        <h3>Hvad siger vores kunder</h3>
        <div class="commentCarouselSec">
            <button class="prev" onclick="prevComment()">❮</button>

            <section class="carouselSec">
                <div class="comment active">
                    <p>
                        "Super service, Milo havde en super god uge hos Sejr & Davidsen
                        Pension!"
                    </p>
                    <p>- Susanne Larsen</p>
                </div>
                <div class="comment">
                    <p>
                        "Jeg fik min lille Buster her, og han er den dejligste lille
                        hund"
                    </p>
                    <p>- Jane Petersen</p>
                </div>
                <div class="comment">
                    <p>"Super søde og flinke medarbejdere!"</p>
                    <p>- Lars Thomsen</p>
                </div>
                <div class="comment">
                    <p>"God oplevelse, kan anbefaldes"</p>
                    <p>- Anne Jørgensen</p>
                </div>
            </section>
            <button class="next" onclick="nextComment()">❯</button>
        </div>
    </section>
</main>

<?php get_footer() ?>