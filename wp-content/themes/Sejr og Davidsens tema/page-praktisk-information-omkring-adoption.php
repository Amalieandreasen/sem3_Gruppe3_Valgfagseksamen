<?php get_header() ?>

<div class="backgroundSVG2">
    <section class="heroPraktiskInfo">
        <h1><?php echo get_the_title(); ?></h1>
        <p>
            <?php echo get_the_content(); ?>
        </p>
    </section>
    <section class="kontaktFlex">
        <section class="praktiskKontakt">
            <div class="greenBox">
                <img
                    src="<?php echo get_theme_file_uri('/IMG/ikoner/lokation.svg') ?>"
                    alt="Ikon af lokation" />
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
                    lørdag: 10-14 <br />
                    søndag: Lukket
                </p>
            </div>
        </section>
    </section>
</div>
<div class="backgroundSVG">
    <section class="praktiskInfoOmInternatet">
        <div>
            <img
                src="<?php echo get_theme_file_uri('/IMG/praktiskInfoAdoption/omInternatet.png') ?>"
                alt="Billede af 2 hunde fra internatet" />
        </div>
        <div>
            <h3>Om internatet</h3>
            <p>
                Sejr og Davidsens Dyreinternat drives af Jesper og Merete som begge
                er indkarnerede dyreelskere og har tidligere karriere indenfor dyr
                og deres sundhed. På vores dyreinternat modtager hunde og katte der
                er herreløse, nødstødte eller svigtede. Her træner vi og plejer
                dyrene så de senere kan bortadopteres til nye søde og velfungerende
                ejere. Vi elsker dyr helt ind i hjertet og derfor føler vi at vi
                giver en masse tilbage. Vi udvælger nye ejere nøje, da dyrene
                fortjener det bedste efter svære omstændigheder. Vi glæder os til at
                finde din nye bedste ven.
            </p>
            <a class="" href="#"><button class="blueButton">Kontakt os i dag</button></a>
        </div>
    </section>
</div>
<section class="praktiskInfoAccordionSec">
    <h3>Vigtig viden ved Adoption</h3>
    <div class="accordion">
        <div class="contentBox">
            <div class="praktiskInfolabel">
                Hvordan foregår ansøgningsprocessen?
            </div>
            <div class="PraktiskinfoIndhold">
                <ul>
                    <li>
                        Første step er at du finder den dyr/kat som du er intereserret i
                        her på hjemmesiden.
                    </li>
                    <li>
                        Derefter kan du enten møde op i vores åbningstid eller skriv en
                        besked inden om at du gerne vil ind og besøge dyreinternatet.
                    </li>
                    <li>
                        Alternativt kan du booke et videomøde så du kan møde dyret
                        hjemmefra.
                    </li>
                    <li>
                        Du vil herefte kunne reservere dyret inde på hjemmesiden (dette
                        kræver at vi har snakket med dig enten ved fysisk eller online
                        møde).
                    </li>
                    <li>
                        Vi sender dig en mail med ansøgningskema og alt det praktiske.
                    </li>
                </ul>
            </div>
            <hr />
        </div>
        <div class="contentBox">
            <div class="praktiskInfolabel">
                Kan jeg blive skrevet op til en bestemt race?
            </div>
            <div class="PraktiskinfoIndhold">
                Vi skriver desværre ikke folk op grundet vi aldrig ved hvilke dyr vi
                modtager. Hold øje med hjemmesiden for nye hunde og katte som bliver
                lagt op.
            </div>
            <hr />
        </div>
        <div class="contentBox">
            <div class="praktiskInfolabel">Tager i imod donationer?</div>
            <div class="PraktiskinfoIndhold">
                Vi tager glædeligt imod alle slags donationer. Enten ved aflevering
                på vores fysiske adresse i åbningstiden eller på mobilepay:
                12345678. Tak på forhånd!
            </div>
            <hr />
        </div>
        <div class="contentBox">
            <div class="praktiskInfolabel">Hvad er inkluderet i prisen?</div>
            <div class="PraktiskinfoIndhold">
                i prisen er der inkluderet at dyret har fuld vaccinationsbog og er
                øremærket. Du vil få en smule mad med hjem og dyret
                ynglingsgenstand, så den føler sig tryg de første par dage
                hjemmefra.
            </div>
        </div>
    </div>
</section>
<section class="bookPensionsopholdSec">
    <div class="bookOpholdGreenSec">
        <h3>Book besøg hos os</h3>
        <div class="bookOpholdDato">
            <form action="">
                <label for="dato">Hvornår vil du besøge os?</label>
                <input type="date" />
                <br />
                <br />
                <label for="navnPåDyret">Er der et bestemt dyr du vil besøge?</label>
                <input
                    type="text"
                    name="navnPåDyret"
                    id="navnPåDyret"
                    placeholder="Skriv navnet her..." />
                <br />
                <div class="omEjer">
                    <p>fortæl om dig</p>
                    <div class="ejerFlex">
                        <div class="ejerDiv">
                            <label class="labelkontakt" for="navnEjer">Navn på dig</label>
                            <br />
                            <input
                                type="text"
                                name="navnEjer"
                                id="navnEjer"
                                placeholder="Skriv navnet her..." />
                            <br />
                            <label class="labelkontakt" for="adresseEjer">Adresse på dig</label>
                            <br />
                            <input
                                type="text"
                                name="adresseEjer"
                                id="adresseEjer"
                                placeholder="Skriv adressen her..." />
                            <br />
                        </div>
                        <div class="dyretDiv">
                            <label class="labelkontakt" for="nummerEjer">Mobilnummer på dig</label>
                            <br />
                            <input
                                type="tel"
                                name="nummerEjer"
                                id="nummerEjer"
                                placeholder="Skriv mobilnummeret her..." />
                            <br />
                            <label class="labelkontakt" for="emailEjer">Email på dig</label>
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
                    <input
                        class="blueButton"
                        id="submit"
                        type="submit"
                        value="Book besøg nu" />
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer() ?>