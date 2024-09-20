<?php get_header() ?>
<div class="backgroundSVG2">
    <section class="heroBookOphold">
        <h1><?php echo get_the_title() ?></h1>
        <p>
            <?php echo get_the_content() ?>
        </p>
    </section>
    <section class="kontaktFlex">
        <section class="bookKontakt">
            <div class="greenBox">
                <img src="<?php echo get_theme_file_uri('/IMG/ikoner/lokation.svg') ?>" alt="Ikon af lokation" />
                <h3>Adresse:</h3>
                <p>
                    Dyrevej 1 <br />
                    9210 Aalborg SØ
                </p>
            </div>
            <div class="greenBox">
                <img src="<?php echo get_theme_file_uri('/IMG/ikoner/mobil.svg') ?>" alt="Ikon af mobil" />
                <h3>Kontaktoplysninger:</h3>
                <p>
                    Tlf: 12345678 <br />
                    Mail: sejr@dyrepension.dk
                </p>
            </div>
            <div class="greenBox">
                <img src="<?php echo get_theme_file_uri('/IMG/ikoner/ur.svg') ?>" alt="Ikon af ur" />
                <h3>Åbningstider:</h3>
                <p>
                    mandag - fredag: 10-16 <br />
                    lørdag: 10-16 <br />
                    søndag: 15-17
                </p>
            </div>
        </section>
    </section>
</div>
<div class="backgroundSVG">
    <section class="bookOpholdOmPensionen">
        <div>
            <img
                src="<?php echo get_theme_file_uri('/IMG/bookOphold/omPensionen.png') ?>"
                alt="Billede af personalet på pensionen" />
        </div>
        <div>
            <h3>Om Pensionen</h3>
            <p>
                Pensionen drives af Jesper og Merete, som begge er indkarnerede
                dyreelskere. Sejr & Davidsens Dyrepension har 4 ansatte udover Jesper
                og Merete. I vores dyrepension går vi op i at du trygt kan sende dine
                dyrevenner afsted uden bekymring. Vi sørger for at de aldrig keder sig
                og og bliver aktiveret præcist som hvis de var derhjemme. Hver hund og
                kat får deres eget hyggelige “værelse”, men om dagen vil de blive
                aktiveret sammen med alle dyrevennerne. OBS. vi tager selvfølgelig
                forbehold for hvis dit dyr skulle have specielle preferencer. Ejeren
                Merete er uddannet dyrelæge og ejeren Jesper er uddannet
                veterinærsygeplejerske. Derfor kan du være helt tryg i dit valg da vi
                har kompetencerne på plads til hvilken som helst situation.
            </p>
            <a class="" href="#"><button class="blueButton">Kontakt os i dag</button></a>
        </div>
    </section>
</div>
<section class="bookOpholdAccordionSec">
    <h3>Vigtig viden omkring pensionsophold</h3>
    <div class="accordion">
        <div class="contentBox">
            <div class="bookOpholdlabel">
                Hvilke krav er der for at mit dyr kan komme på pension?
            </div>
            <div class="bookOpholdIndhold">
                Vi kræver at du medbringer dit dyrs vaccinationskort og at dyret har
                en ansvarsforsikring.
            </div>
            <hr />
        </div>
        <div class="contentBox">
            <div class="bookOpholdlabel">
                Hvad skal jeg medbringe til mit dyr?
            </div>
            <div class="bookOpholdIndhold">
                Du behøves ikke at medbringe noget. Vi har senge, foder og legetøj.
                Vi har alt dit dyr skulle bruge. Dog anbefaler vi at du tager dit
                kæledyrs ynglingslegetøj med så den kan følge sig tryg. hvis dit dyr
                får en bestemt type foder anbefaler vi også at du medbringer dette.
            </div>
            <hr />
        </div>
        <div class="contentBox">
            <div class="bookOpholdlabel">
                Hvordan booker jeg et ophold til mit dyr?
            </div>
            <div class="bookOpholdIndhold">
                Det er meget simpelt. du kan enten ringe til os på 12345678 og booke
                et ophold, eller du kan bruge vores bookingformular her i bunden af
                siden.
            </div>
            <hr />
        </div>
        <div class="contentBox">
            <div class="bookOpholdlabel">
                Hvad sker der hvis mit dyr bliver syg under opholdet?
            </div>
            <div class="bookOpholdIndhold">
                Merete er uddanet dyrelæge og er derfor topudstyret hvis dit dyr
                skulle være uheldig. Vi har selvfølgelog kontakt med ejer fra start
                til slut og gør intet uden tilladelse.
            </div>
            <hr />
        </div>
        <div class="contentBox">
            <div class="bookOpholdlabel">
                hvornår kan jeg aflevere og afhente mit dyr?
            </div>
            <div class="bookOpholdIndhold">
                Du kan aflevere og hente dit dyr indenfor de åbningstider som er
                anført øverst på denne side. Når du booker et ophold vil du modtage
                en mail med flere praktiske informationer.
            </div>
        </div>
    </div>
</section>
<section class="priserSec">
    <h3>Priser</h3>
    <section class="priserInnerSec">
        <div class="greenBox">
            <img src="<?php echo get_theme_file_uri('/IMG/ikoner/hund.svg') ?>" alt="Ikon af hund" />
            <p>200 kr. for en hund pr. dag</p>
            <p>Disse priser er inkluderet mad og daglig luftning</p>
        </div>
        <div class="greenBox">
            <img src="<?php echo get_theme_file_uri('/IMG/ikoner/kat.svg') ?>" alt="Ikon af kat" />
            <p>200 kr. for en kat pr. dag</p>
            <p>Disse priser er inkluderet mad og daglig luftning</p>
        </div>
        <div class="greenBox">
            <img src="<?php echo get_theme_file_uri('/IMG/ikoner/bad.svg') ?>" alt="Ikon af bad" />
            <p>Bad og pelspleje</p>
            <p>
                Hund: fra 300kr. <br />
                Kat: fra 200kr.
            </p>
        </div>
    </section>
</section>
<section class="bookPensionsopholdSec">
    <div class="bookOpholdGreenSec">
        <h3>Book Pensionsophold</h3>
        <div class="bookOpholdDato">
            <form action="">
                <label for="dato">Hvornår skal dyret passes?</label>
                <input type="date" />

                <div class="omDyret">
                    <p>fortæl om dyret</p>
                    <div class="dyretFlex">
                        <div class="dyretDiv">
                            <label for="dyretype">Kat eller hund?</label>
                            <br />
                            <select name="dyretype" id="dyretype">
                                <option value="hund">Hund</option>
                                <option value="kat">Kat</option>
                            </select>
                            <br />
                            <label for="navnPåDyret">Navn på dyret</label>
                            <br />
                            <input
                                type="text"
                                name="navnPåDyret"
                                id="navnPåDyret"
                                placeholder="Skriv navnet her..." />
                            <br />
                        </div>
                        <div class="dyretDiv">
                            <label for="alderPåDyret">Alder på dyret</label>
                            <br />
                            <input
                                type="number"
                                name="alderPåDyret"
                                id="alderPåDyret"
                                placeholder="Skriv alderen her..." />
                            <br />
                            <label for="racePåDyret">Racen på dyret</label>
                            <br />
                            <input
                                type="text"
                                name="racePåDyret"
                                id="racePåDyret"
                                placeholder="Skriv racen her..." />
                            <br />
                        </div>
                    </div>
                    <div class="saerligeBemaerkninger">
                        <label for="saerligeBemaerkninger">Særlige bemærkninger til dyret</label>
                        <textarea
                            name="saerligeBemaerkninger"
                            id="saerligeBemaerkninger"
                            placeholder="Skriv din bemærkning her.... Det kan være hvis dit dyr har specielle behov, eller andet vi har brug for at vide...."
                            cols="50"
                            rows="5"></textarea>
                    </div>
                </div>
                <div class="omEjer">
                    <p>fortæl om dig</p>
                    <div class="ejerFlex">
                        <div class="ejerDiv">
                            <label for="navnEjer">Navn på ejer</label>
                            <br />
                            <input
                                type="text"
                                name="navnEjer"
                                id="navnEjer"
                                placeholder="Skriv navnet her..." />
                            <br />
                            <label for="adresseEjer">Adresse på ejer</label>
                            <br />
                            <input
                                type="text"
                                name="adresseEjer"
                                id="adresseEjer"
                                placeholder="Skriv adressen her..." />
                            <br />
                        </div>
                        <div class="dyretDiv">
                            <label for="nummerEjer">Mobilnummer på ejer</label>
                            <br />
                            <input
                                type="tel"
                                name="nummerEjer"
                                id="nummerEjer"
                                placeholder="Skriv mobilnummeret her..." />
                            <br />
                            <label for="emailEjer">Email på ejer</label>
                            <br />
                            <input
                                type="email"
                                name="emailEjer"
                                id="emailEjer"
                                placeholder="Skriv emailen her..." />
                            <br />
                        </div>
                    </div>
                    <div class="saerligeBemaerkninger">
                        <label for="saerligeBemaerkninger">Er der andet vi skal vide inden?</label>
                        <textarea
                            name="saerligeBemaerkninger"
                            id="saerligeBemaerkninger"
                            placeholder="Skriv din bemærkning her.... 
                  "
                            cols="50"
                            rows="5"></textarea>
                    </div>
                </div>
                <div class="submitKnap">
                    <input class="blueButton" type="submit" value="Book ophold nu" />
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer() ?>