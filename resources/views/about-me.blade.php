@extends('layouts.layout')
@section('main')
    <main class="main">
        <div class="main__am-header">
            <div class="am-header__rectangle"></div>
            <figure class="am-header__am-figure">
                <img src="/assets/images/about-me_1.jpg" alt="Jochem aan het werk" class="am-figure__image am-figure__image--1">
                <img src="/assets/images/about-me_2.jpg" alt="Jochem aan het skaten" class="am-figure__image am-figure__image--2">
            </figure>
        </div>
        <article class="main__am-intro">
            <h2 class="am-intro__title am-title">Van kok tot programmeur</h2>
            <p class="am-intro__text am-text">
                Na het afronden van de koksopleiding ben ik begonnen met programmeren vanwege de betere
                arbeidsvoorwaarden en mijn interesse in de ICT en media.<br>
                Het programmeren was heel wat anders; ik hoefde niet meer 12 uur op een dag te rennen in een snikhete
                keuken en de mensen om me heen zijn over het algemeen veel minder gestresst, maar de discipline en het structureel nadenken heb ik meegenomen.
            </p>
        </article>
        <article class="main__am-properties">
            <h2 class="am-properties__title am-title">Soft skills: eigenschappen</h2>
            <figure class="am-properties__pr-figure">
                <img src="/assets/images/wordcloud.png" alt="Wordcloud met eigenschappen" class="pr-figure__img">
                <p class="pr-figure__desc">
                    Wordcloud met eigenschappen uit feedback
                </p>
            </figure>
            <p class="am-intro__text am-text">
                Afgelopen jaar heb ik op het hbo veel reflectie verslagen geschreven over mijn prestaties bij
                verschillende projecten. Hierbij heb ik veel feedback gekregen van medestudenten, docenten en
                opdrachtgevers. De eigenschappen die het meeste voorkomen heb ik in een wordcloud gestopt. Zoals
                iedereen heb ik niet alleen positieve eigenschappen maar staan er ook verbeterpunten in de wordcloud,
                en ik kijk ernaar uit om hieraan te werken om een betere programmeur te zijn.
                <br><br>
                Gemotiveerd staat het grootste aangegeven; dat betekend dat deze eigenschap het meeste uit de feedback
                terug komt en daar kan ik me volledig in terug vinden. Ik wil dolgraag nieuwe vaardigheden leren in het
                vakgebied en ik ben bereid daar veel tijd en energie in te steken zodat ik beter kan functioneren binnen
                een bedrijf en uiteindelijk zelfstandiger tickets kan oppakken en afronden.
                <br><br>
                Verder komen eigenschappen zoals creatief en positief naar voren; creatief ben ik zowel in het verzinnen
                van effectieve oplossingen voor problemen in bijvoorbeeld back-end systemen, maar ook in het creëren van
                grafische projecten zoals bij front-end producten..
                Positiviteit uitstralen doe ik onbewust, maar dit wordt vaak gewaardeerd door collega’s.
            </p>
        </article>
        <div class="horizontal-box">
        <article class="main__am-knowledge">
                <h2 class="am-knowledge__title am-title">Hard skills: kennis</h2>
                <p class="am-knowledge--text am-text">
                    Inmiddels ben ik 4 jaar aan het programmeren en heb ik kennis opgedaan van verschillende
                    programmeertalen en frameworks tijdens de opleiding mbo media & applicatie ontwikkelaar en hbo
                    informatica. Ook heb ik stage gelopen bij een front-end bedrijf en een back-end bedrijf en heb ik een
                    half jaar een bijbaan gehad naast mijn hbo als creative front-end developer. <br>
                    <a class="am-text__link" href="{{ url('/mijn-werk') }}">Lees meer over mijn werkervaringen…</a>
                    <br><br>
                    Hieronder staan de programmeertalen waarmee ik heb gewerkt.
                </p>
                <h3 class="am-subtitle">Front-end</h3>
                <section class="am-knowledge__language">
                    <h4 class="language__subject">HTML</h4>
                    <p class="language__text am-text">
                        De eerste taal waarmee ik code begon te schrijven, en waar ik vervolgens veel advertentie banners
                        en web pagina’s mee heb gemaakt in combinatie met javascript, css en php.
                    </p>
                </section>
                <section class="am-knowledge__language">
                    <h4 class="language__subject">CSS</h4>
                    <p class="language__text am-text">
                        Met CSS heb ik veel advertentie banners voorzien van styling en heb ik webpagina’s er beter uit
                        laten zien. Ook heb ik gewerkt met toevoegingen zoals bootstrap, SCSS en Sass, en hanteer ik graag
                        de BEM-methode.
                    </p>
                </section>
                <section class="am-knowledge__language">
                    <h4 class="language__subject">JS</h4>
                    <p class="language__text am-text">
                        Met javascript heb ik veel advertenties interactief gemaakt door animaties toe te voegen, pop-up
                        vensters te laten openen en carousels te maken.<br>
                        Ook heb ik gewerkt met frameworks zoals React, Veu en jQuery.
                    </p>
                </section>
                <section class="am-knowledge__language">
                    <h4 class="language__subject">Dart</h4>
                    <p class="language__text am-text">
                        Door middel van Flutter heb ik met dart een app gebouwd die zowel voor apple als android compiled
                        en ook in de browser voor desktops te gebruiken is.
                    </p>
                </section>
                <h3 class="am-subtitle">Back-end</h3>
                <section class="am-knowledge__language">
                    <h4 class="language__subject">PHP</h4>
                    <p class="language__text am-text">
                        In PHP heb ik object-georiënteerd leren programmeren, en vervolgens de mvc-structuur aangeleerd.
                        <br>Nu werk ik graag met PHP in het framework Laravel.
                    </p>
                </section>
                <section class="am-knowledge__language">
                    <h4 class="language__subject">Java</h4>
                    <p class="language__text am-text">
                        Met java begon ik met kleine command-line applicaties, en vervolgens leerde ik over JavaFX. Hierin
                        maakte ik kleine interfaces met buttons en interacties, en vervolgens maakte ik een game met
                        JavaFXGL.
                    </p>
                </section>
                <section class="am-knowledge__language">
                    <h4 class="language__subject">Python</h4>
                    <p class="language__text am-text">
                        Pas na drie jaar programmeren startte ik met Python, waarmee ik bijvoorbeeld leerde om teksten uit
                        webpagina’s te scrapen en een wordcloud te genereren met de meest belangrijke woorden uit de tekst.
                    </p>
                </section>
                <section class="am-knowledge__language">
                    <h4 class="language__subject">SQL</h4>
                    <p class="language__text am-text">
                        Met SQL kan ik commands uitvoeren in multi-relationele databases om nieuwe tabellen aan te maken,
                        data toe te voegen, relaties tussen data te creëren en efficiënt data op te halen.
                    </p>
                </section>
            </article>


            <article class="main__am-expertise">
                <h2 class="am-expertise__title am-title">Expertise</h2>
                <h3 class="am-subtitle am-expertise__subtitle">Back-end</h3>
                <p class="am-text">
                    Nu ik ervaring heb opgedaan in front-end development, wat ik erg leuk maar toch beperkt vond, wil ik me
                    graag meer verdiepen in back-end development. Het creëren van logische oplossingen voor software met
                    inlog-systemen, database connecties en koppelingen naar andere systemen spreekt mij erg aan.
                    Ondanks dat dit vaak samen gaat met grote verantwoordelijkheid en ondanks dat ik er nog een hoop voor
                    moet leren, lijkt dit mij een uitdaging waar ik me 100% voor wil inzetten.
                </p>
                <h3 class="am-subtitle am-expertise__subtitle">Cybersecurity & Forensisch ICT</h3>
                <p class="am-text">
                    Op het mbo en hbo heb ik ook les gekregen in cybersecurity en forensisch ICT. Encrypties, speuren en
                    filteren door images van harde schijven op zoek naar bewijsmateriaal en dus ook leren hoe je het beste
                    materiaal kan verbergen geeft mij een kick, alleen vond ik het documenteren minder interessant en helaas
                    ging daar de meeste tijd in zitten.
                </p>
                <h3 class="am-subtitle am-expertise__subtitle">Big data management</h3>
                <p class="am-text">
                    Ook kreeg ik les in big data management, het verwerken van grote hoeveelheid data en daar nuttige
                    informatie uithalen met behulp van Python script, SQL queries en PowerBI rapporten. Ik vond het erg
                    leerzaam en fijn om hier wat vanaf te weten, maar het werk gaf me weinig voldoening.
                </p>
                <h3 class="am-subtitle am-expertise__subtitle">UI/UX</h3>
                <p class="am-text">
                    Waar ik vooral in het begin van mijn leerproces mijn interesse lag was het optimaliseren van user
                    interfaces en user experience. Ik wist toen nog niet zo veel van graphic design, maar inmiddels heb ik
                    hier veel over geleerd bij GumGum, waar ik responsive advertentie banners programmeerde.
                </p>
            </article>
        </div>


        <article class="main__am-short">
            <h2 class="am-title">In het kort</h2>
            <p class="am-text">
                Naast alle professionele vaardigheden vertel ik nog even in het kort wie ik ben en wat ik doe in mijn
                vrije tijd.<br>Ik ben Jochem de Wit, 24 jaar oud en gepassioneerd skateboarder. Ik ben opgegroeid in
                Valkenburg (ZH) maar inmiddels woon ik in Den Haag, waar meer mogelijkheden zijn voor werk en skaten.
                Wanneer ik behoefte heb om mijn hoofd leeg te maken en te ontspannen dan duik ik graag de natuur in
                om te wandelen, of dan ga ik naar de zee en het strand.
            </p>
        </article>


    </main>
@endsection

@section('js')
    <script src="{{ asset("js/aboutme.js")  }}"></script>
@endsection