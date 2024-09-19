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
        <div class="backgroundSVG2">
            <div class="ownerAndTxtTop">
                <img src="<?php echo get_theme_file_uri('/IMG/Forside/merete.png') ?>" alt="Merete Sejr" />
                <div class="ownerDesc">
                    <h3>Merete Sejr - Fagdyrelæge og Ejer</h3>
                    <p>
                        Merete Sejr er indhaver af Sejr og Davidsens Dyrepension og -internat. Hun er en erfaren og passioneret dyrlæge med en specialisering inden for sygdomme hos hunde og katte. Hun har en baggrund som praktiserende dyrlæge og bringer over 20 års erfaring med sig. Både fra egen klinik og videreuddannelse som fagdyrlæge. Hendes ekspertise sikrer, at alle dyr, som kommer til pensionen, får professionel pleje og omsorg i top klasse. Merete brænder for at skabe trygge omgivelser for både kæledyr og deres ejere, og hun har altid fokus på at kombinere sin faglighed med en personlig og kærlig tilgang til hvert enkelte dyr. Hun står altid klar til at yde rådgivning og vejledning om dyrenes sundhed.
                    </p>
                </div>
            </div>
        </div>
        <div class="backgroundSVG">
            <div class="ownerAndTxtBottom">
                <div class="ownerDesc">
                    <h3>Jesper Davidsen – Medejer og Veterinærsygeplejerske</h3>
                    <p>
                        Jesper Davidsen er medejer af Sejr og Davidsens Dyrepension og -internat, hvor han arbejder som veterinærsygeplejerske og adfærdsspecialist. Med en uddannelse som veterinærsygeplejerske, er Jesper en uvurderlig del af teamet. Han har en særlig forståelse for dyrenes psykiske trivsel og arbejder dagligt med at sikre, at hvert dyr har det godt både fysisk og mentalt under deres ophold. Jesper er kendt for sin tålmodighed og sin evne til at skabe en rolig atmosfære, der hjælper selv de mest nervøse dyr med at falde til hos Sejr & Davidsen.
                    </p>
                </div>
                <img src="<?php echo get_theme_file_uri('/IMG/Forside/jesper.png') ?>" alt="Jesper Davidsen" />
            </div>
        </div>
    </section>
    <?php include 'cta-dyr.php'; ?>
    <section class="internatPensionSec">
        <div>
            <div class="ownerAndTxtTop">
                <img src="<?php echo get_theme_file_uri('/IMG/Forside/internat.png') ?>" alt="Billede 2 hunde fra internatet" />
                <div class="ownerDesc background">
                    <h3>Internatet</h3>
                    <p>
                        Sejr og Davidsens Dyreinternat drives af Jesper og Merete som begge er indkarnerede dyreelskere og har tidligere karriere indenfor dyr og deres sundhed. På vores dyreinternat modtager hunde og katte der er herreløse, nødstødte eller svigtede. Her træner vi og plejer dyrene så de senere kan bortadopteres til nye søde og velfungerende ejere. Vi elsker dyr helt ind i hjertet og derfor føler vi at vi giver en masse tilbage. Vi udvælger nye ejere nøje, da dyrene fortjener det bedste efter svære omstændigheder. Vi glæder os til at finde din nye bedste ven.
                    </p>
                    <div class="buttonDiv">
                        <a href="<?php echo site_url('/praktisk-information-omkring-adoption') ?>"><button class="blueButton">Læs mere om internatet</button></a>
                    </div>
                </div>
            </div>
            <div class="ownerAndTxtBottom">
                <div class="ownerDesc">
                    <h3>Pensionen</h3>
                    <p>
                        Pensionen drives af Jesper og Merete, som begge er indkarnerede dyreelskere. Sejr & Davidsens Dyrepension har 4 ansatte udover Jesper og Merete. I vores dyrepension går vi op i at du trygt kan sende dine dyrevenner afsted uden bekymring. Vi sørger for at de aldrig keder sig og og bliver aktiveret præcist som hvis de var derhjemme. Hver hund og kat får deres eget hyggelige “værelse”, men om dagen vil de blive aktiveret sammen med alle dyrevennerne. OBS. vi tager selvfølgelig forbehold for hvis dit dyr skulle have specielle preferencer. Ejeren Merete er uddannet dyrelæge og ejeren Jesper er uddannet veterinærsygeplejerske. Derfor kan du være helt tryg i dit valg da vi har kompetencerne på plads til hvilken som helst situation.
                    </p>
                    <div class="buttonDiv">
                        <a href="<?php echo site_url('/book-ophold') ?>"><button class="blueButton">Book Ophold</button></a>
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