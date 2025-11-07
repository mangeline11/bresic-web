<?php
// Uključivanje gornjeg dijela stranice (header)
include 'includes/header.php';
?>

<!-- Prikaz jelovnika i karte pića -->
<div class="container page-content">
    <h1>Naš Jelovnik</h1>

    <!-- Filteri -->
    <div class="menu-filters">
        <button class="filter-btn active" data-filter="all">Sve</button>
        <button class="filter-btn" data-filter="predjela">Predjela</button>
        <button class="filter-btn" data-filter="gotova-jela">Gotova Jela</button>
        <button class="filter-btn" data-filter="pecenje">Pečenje</button>
        <button class="filter-btn" data-filter="odrezak">Odrezak</button>
        <button class="filter-btn" data-filter="grill">Grill</button>
        <button class="filter-btn" data-filter="piletina">Jela od piletine</button>
        <button class="filter-btn" data-filter="ribe">Ribe</button>
        <button class="filter-btn" data-filter="rizoto">Rižoto</button>
        <button class="filter-btn" data-filter="vegeterijanska">Vegeterijanska</button>
        <button class="filter-btn" data-filter="prilozi">Prilozi</button>
        <button class="filter-btn" data-filter="kruh">Kruh</button>
        <button class="filter-btn" data-filter="salate">Salate</button>
        <button class="filter-btn" data-filter="umaci">Umaci</button>
        <button class="filter-btn" data-filter="desert">Desert</button>
        <button class="filter-btn" data-filter="pica">Pića</button>
    </div>

    <!-- PREDJELA -->
    <section class="menu-category menu-item-filterable" data-category="predjela">
        <h2>Predjela</h2>
        <article class="menu-item">
            <h3>Kulin <span class="portion">0,1 kg</span></h3>
            <p class="price">5,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Pršut <span class="portion">0,1 kg</span></h3>
            <p class="price">4,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Tvrdi sir <span class="portion">0,1 kg</span></h3>
            <p class="price">2,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Salata od hobotnice</h3>
            <p class="price">12,00 €</p>
        </article>
    </section>

    <!-- GOTOVA JELA -->
    <section class="menu-category menu-item-filterable" data-category="gotova-jela">
        <h2>Gotova Jela</h2>
        <article class="menu-item">
            <h3>Juha dnevna <span class="portion">(porcija)</span></h3>
            <p class="price">3,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Fiš paprikaš <span class="portion">(porcija)</span></h3>
            <p class="price">9,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Lovački gulaš <span class="portion">(porcija)</span></h3>
            <p class="price">9,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Čorbanac <span class="portion">(porcija)</span></h3>
            <p class="price">9,00 €</p>
        </article>
    </section>

    <!-- PEČENJE -->
    <section class="menu-category menu-item-filterable" data-category="pecenje">
        <h2>Pečenje</h2>
        <article class="menu-item">
            <h3>Teleća koljenica <span class="portion">(komad/kg)</span></h3>
            <p class="price">30,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Teletina pod pekom <span class="portion">(porcija/300 g)</span></h3>
            <p class="price">12,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Svinjsko pečenje <span class="portion">(porcija/300 g)</span></h3>
            <p class="price">10,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Janjetina s ražnja <span class="portion">1kg</span></h3>
            <p class="price">45,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Janjetina pod pekom <span class="portion">(porcija/300 g)</span></h3>
            <p class="price">14,00 €</p>
        </article>
    </section>

    <!-- ODREZAK -->
    <section class="menu-category menu-item-filterable" data-category="odrezak">
        <h2>Odrezak</h2>
        <article class="menu-item">
            <h3>Biftek <span class="portion">(porcija/cca 200 g)</span></h3>
            <p class="price">22,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Ramstek s pršutom <span class="portion">(porcija/cca 300 g)</span></h3>
            <p class="price">15,00 €</p>
        </article>
        <article class="menu-item">
            <h3>T-Bone odrezak <span class="portion">1 kg</span></h3>
            <p class="price">40,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Svinjski lungić <span class="portion">(porcija)</span></h3>
            <p class="price">14,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Bečki odrezak <span class="portion">(porcija)</span></h3>
            <p class="price">10,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Zagrebački odrezak <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
    </section>

    <!-- GRILL -->
    <section class="menu-category menu-item-filterable" data-category="grill">
        <h2>Grill</h2>
        <article class="menu-item">
            <h3>Ćevapi <span class="portion">(porcija)</span></h3>
            <p class="price">8,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Kobasice <span class="portion">(porcija)</span></h3>
            <p class="price">8,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Mesna plata za 1 osobu <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Pljeskavica <span class="portion">(porcija)</span></h3>
            <p class="price">10,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Punjena pljeskavica <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Vratina žar <span class="portion">(porcija)</span></h3>
            <p class="price">10,00 €</p>
        </article>
    </section>

    <!-- JELA OD PILETINE -->
    <section class="menu-category menu-item-filterable" data-category="piletina">
        <h2>Jela od piletine</h2>
        <article class="menu-item">
            <h3>Cordon Blue <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Pileći file na žaru <span class="portion">(porcija)</span></h3>
            <p class="price">10,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Piletina u curry umaku <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Pileće rolice <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
    </section>

    <!-- RIBE -->
    <section class="menu-category menu-item-filterable" data-category="ribe">
        <h2>Ribe</h2>
        <article class="menu-item">
            <h3>Brancin <span class="portion">1 kg</span></h3>
            <p class="price">30,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Hobotnica <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Lignje <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Orada <span class="portion">1 kg</span></h3>
            <p class="price">30,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Pastrmka <span class="portion">1 kg</span></h3>
            <p class="price">24,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Smuđ <span class="portion">1 kg</span></h3>
            <p class="price">30,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Smuđ file <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Šaran pole <span class="portion">(cca 1kg)</span></h3>
            <p class="price">15,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Šaran šnite <span class="portion">(porcija)</span></h3>
            <p class="price">10,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Škampi <span class="portion">(porcija)</span></h3>
            <p class="price">15,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Škarpina <span class="portion">1 kg</span></h3>
            <p class="price">26,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Tuna odrezak <span class="portion">(porcija)</span></h3>
            <p class="price">15,00 €</p>
        </article>
    </section>

    <!-- RIŽOTO -->
    <section class="menu-category menu-item-filterable" data-category="rizoto">
        <h2>Rižoto</h2>
        <article class="menu-item">
            <h3>Rižoto Plodovi mora <span class="portion">(porcija)</span></h3>
            <p class="price">12,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Rižoto s piletinom <span class="portion">(porcija)</span></h3>
            <p class="price">10,00 €</p>
        </article>
    </section>

    <!-- VEGETERIJANSKA JELA -->
    <section class="menu-category menu-item-filterable" data-category="vegeterijanska">
        <h2>Vegeterijanska jela</h2>
        <article class="menu-item">
            <h3>Povrće na žaru <span class="portion">(porcija)</span></h3>
            <p class="price">7,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Punjene gljive <span class="portion">(porcija)</span></h3>
            <p class="price">8,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Tjestenina s povrćem <span class="portion">(porcija)</span></h3>
            <p class="price">10,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Tjestenina s piletinom <span class="portion">(porcija)</span></h3>
            <p class="price">10,00 €</p>
        </article>
    </section>

    <!-- PRILOZI -->
    <section class="menu-category menu-item-filterable" data-category="prilozi">
        <h2>Prilozi</h2>
        <article class="menu-item"><h3>Tijesto</h3><p class="price">2,50 €</p></article>
        <article class="menu-item"><h3>Blitva</h3><p class="price">3,00 €</p></article>
        <article class="menu-item"><h3>Gljive na žaru</h3><p class="price">3,00 €</p></article>
        <article class="menu-item"><h3>Krumpir pole</h3><p class="price">2,50 €</p></article>
        <article class="menu-item"><h3>Pommes Frites</h3><p class="price">2,50 €</p></article>
        <article class="menu-item"><h3>Povrće na žaru</h3><p class="price">3,50 €</p></article>
        <article class="menu-item"><h3>Kuhani krumpir s blitvom</h3><p class="price">3,00 €</p></article>
        <article class="menu-item"><h3>Đuveč</h3><p class="price">3,50 €</p></article>
    </section>

    <!-- KRUH -->
    <section class="menu-category menu-item-filterable" data-category="kruh">
        <h2>Kruh</h2>
        <article class="menu-item">
            <h3>Kruh <span class="portion">(komad)</span></h3>
            <p class="price">0,20 €</p>
        </article>
        <article class="menu-item">
            <h3>Lepinja <span class="portion">(komad)</span></h3>
            <p class="price">1,00 €</p>
        </article>
    </section>

    <!-- SALATE -->
    <section class="menu-category menu-item-filterable" data-category="salate">
        <h2>Salate</h2>
        <article class="menu-item"><h3>Krastavci</h3><p class="price">3,00 €</p></article>
        <article class="menu-item"><h3>Kupus</h3><p class="price">3,00 €</p></article>
        <article class="menu-item"><h3>Mix salata s dresingom</h3><p class="price">3,50 €</p></article>
        <article class="menu-item"><h3>Rajčica</h3><p class="price">3,00 €</p></article>
        <article class="menu-item"><h3>Šopska</h3><p class="price">3,50 €</p></article>
        <article class="menu-item"><h3>Zelena</h3><p class="price">3,00 €</p></article>
        <article class="menu-item"><h3>Miješana salata</h3><p class="price">3,00 €</p></article>
        <article class="menu-item"><h3>Salata s piletinom</h3><p class="price">9,00 €</p></article>
    </section>

    <!-- UMACI -->
    <section class="menu-category menu-item-filterable" data-category="umaci">
        <h2>Umaci</h2>
        <article class="menu-item"><h3>Ajvar</h3><p class="price">1,50 €</p></article>
        <article class="menu-item"><h3>Ketchup</h3><p class="price">1,50 €</p></article>
        <article class="menu-item"><h3>Majoneza</h3><p class="price">1,50 €</p></article>
        <article class="menu-item"><h3>Tartar umak</h3><p class="price">2,00 €</p></article>
        <article class="menu-item"><h3>Vrhnje</h3><p class="price">1,00 €</p></article>
    </section>

    <!-- DESERT -->
    <section class="menu-category menu-item-filterable" data-category="desert">
        <h2>Desert</h2>
        <article class="menu-item">
            <h3>Sladoled <span class="portion">(porcija 2 kuglice)</span></h3>
            <p class="price">3,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Palačinke</h3>
            <p class="price">4,00 €</p>
        </article>
        <article class="menu-item">
            <h3>Kolač</h3>
            <p class="price">3,00 €</p>
        </article>
    </section>

    <div class="menu-item-filterable" data-category="pica">
        <h1 class="page-break">Karta Pića</h1>

        <!-- APERITIVI -->
        <section class="menu-category">
            <h2>Aperitivi</h2>
            <article class="menu-item"><h3>Šljivovica <span class="portion">0,03 l</span></h3><p class="price">1,80 €</p></article>
            <article class="menu-item"><h3>Travarica <span class="portion">0,03 l</span></h3><p class="price">1,80 €</p></article>
            <article class="menu-item"><h3>Vilijamovka <span class="portion">0,03 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Voćne rakije <span class="portion">0,03 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Brandy <span class="portion">0,03 l</span></h3><p class="price">1,50 €</p></article>
            <article class="menu-item"><h3>Martini <span class="portion">0,05 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Medica <span class="portion">0,03 l</span></h3><p class="price">2,00 €</p></article>
            <article class="menu-item"><h3>Orahovac <span class="portion">0,03 l</span></h3><p class="price">2,00 €</p></article>
            <article class="menu-item"><h3>Pelinkovac <span class="portion">0,03 l</span></h3><p class="price">1,70 €</p></article>
            <article class="menu-item"><h3>Stock <span class="portion">0,03 l</span></h3><p class="price">1,90 €</p></article>
            <article class="menu-item"><h3>Wermouth <span class="portion">0,10 l</span></h3><p class="price">2,50 €</p></article>
            <article class="menu-item"><h3>Balanitines <span class="portion">0,03 l</span></h3><p class="price">2,50 €</p></article>
            <article class="menu-item"><h3>Jack Daniel’s <span class="portion">0,03 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Courvasie <span class="portion">0,03 l</span></h3><p class="price">4,00 €</p></article>
            <article class="menu-item"><h3>Martel <span class="portion">0,03 l</span></h3><p class="price">4,00 €</p></article>
            <article class="menu-item"><h3>Jägermeister <span class="portion">0,03 l</span></h3><p class="price">2,20 €</p></article>
            <article class="menu-item"><h3>Vodka <span class="portion">0,03 l</span></h3><p class="price">1,60 €</p></article>
        </section>

        <!-- VINA -->
        <section class="menu-category">
            <h2>Vina</h2>
            <article class="menu-item"><h3>Crno vino <span class="portion">1 l</span></h3><p class="price">15,00 €</p></article>
            <article class="menu-item"><h3>Graševina Grozdanović <span class="portion">1 l</span></h3><p class="price">14,00 €</p></article>
            <article class="menu-item"><h3>Gemišt <span class="portion">0,2 l</span></h3><p class="price">1,90 €</p></article>
            <article class="menu-item"><h3>Gemišt <span class="portion">0,3 l</span></h3><p class="price">2,50 €</p></article>
            <article class="menu-item"><h3>Bambus <span class="portion">0,35 l</span></h3><p class="price">3,90 €</p></article>
            <hr class="menu-divider">
            <article class="menu-item"><h3>Cabernet Sauvignon <span class="portion">0,75 l</span></h3><p class="price">22,00 €</p></article>
            <article class="menu-item"><h3>Crni Pinot <span class="portion">0,75 l</span></h3><p class="price">22,00 €</p></article>
            <article class="menu-item"><h3>Graševina Adžić <span class="portion">0,75 l</span></h3><p class="price">27,00 €</p></article>
            <article class="menu-item"><h3>Graševina Grozdanović <span class="portion">0,75</span></h3><p class="price">20,00 €</p></article>
            <article class="menu-item"><h3>Graševina Kutjevo <span class="portion">0,75 l</span></h3><p class="price">22,00 €</p></article>
            <article class="menu-item"><h3>Initium Graševina Bariqoue <span class="portion">0,75 l</span></h3><p class="price">32,00 €</p></article>
            <article class="menu-item"><h3>Plavac <span class="portion">0,75 l</span></h3><p class="price">20,00 €</p></article>
            <article class="menu-item"><h3>Roze <span class="portion">0,75 l</span></h3><p class="price">22,00 €</p></article>
        </section>

        <!-- PIVO -->
        <section class="menu-category">
            <h2>Pivo</h2>
            <article class="menu-item"><h3>Erdinger <span class="portion">0,50 l</span></h3><p class="price">3,20 €</p></article>
            <article class="menu-item"><h3>Paulaner Munchner Hell <span class="portion">0,50 l</span></h3><p class="price">3,20 €</p></article>
            <article class="menu-item"><h3>Paulaner Hefe-Weisbier <span class="portion">0,50 l</span></h3><p class="price">4,00 €</p></article>
            <article class="menu-item"><h3>Heineken <span class="portion">0,33 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Ožujsko <span class="portion">0,33 l</span></h3><p class="price">2,80 €</p></article>
            <article class="menu-item"><h3>Stella Artois <span class="portion">0,33 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Staropramen <span class="portion">0,50 l</span></h3><p class="price">2,80 €</p></article>
            <article class="menu-item"><h3>Tomislav tamno <span class="portion">0,50 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Radler <span class="portion">0,50 l</span></h3><p class="price">2,60 €</p></article>
            <article class="menu-item"><h3>Bezalkoholno pivo <span class="portion">0,50 l</span></h3><p class="price">3,00 €</p></article>
        </section>

        <!-- BEZALKOHOLNA PIĆA -->
        <section class="menu-category">
            <h2>Bezalkoholna Pića</h2>
            <article class="menu-item"><h3>Voda gazirana <span class="portion">1 l</span></h3><p class="price">5,00 €</p></article>
            <article class="menu-item"><h3>Jamnica gazirana <span class="portion">0,33 l</span></h3><p class="price">2,50 €</p></article>
            <article class="menu-item"><h3>Voda negazirana <span class="portion">0,33 l</span></h3><p class="price">2,00 €</p></article>
            <article class="menu-item"><h3>Voda negazirana <span class="portion">0,75 l</span></h3><p class="price">5,00 €</p></article>
            <hr class="menu-divider">
            <article class="menu-item"><h3>Coca Cola <span class="portion">0,25 l</span></h3><p class="price">2,50 €</p></article>
            <article class="menu-item"><h3>Fanta <span class="portion">0,25 l</span></h3><p class="price">2,50 €</p></article>
            <article class="menu-item"><h3>Pepsi Cola <span class="portion">0,25 l</span></h3><p class="price">2,00 €</p></article>
            <article class="menu-item"><h3>Schwepes Bitter Lemon <span class="portion">0,25 l</span></h3><p class="price">2,50 €</p></article>
            <article class="menu-item"><h3>Tonic <span class="portion">0,25 l</span></h3><p class="price">2,50 €</p></article>
            <article class="menu-item"><h3>Hidra <span class="portion">0,50 l</span></h3><p class="price">2,60 €</p></article>
            <article class="menu-item"><h3>Limunska trava <span class="portion">0,33 l</span></h3><p class="price">2,50 €</p></article>
            <hr class="menu-divider">
            <article class="menu-item"><h3>Borovnica <span class="portion">0,2 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Jabuka <span class="portion">0,2 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Ledeni čaj <span class="portion">0,33 l</span></h3><p class="price">2,50 €</p></article>
            <article class="menu-item"><h3>Marelica <span class="portion">0,2 l</span></h3><p class="price">3,00 €</p></article>
            <article class="menu-item"><h3>Orangina <span class="portion">0,25 l</span></h3><p class="price">3,00 €</p></article>
        </section>

        <!-- TOPLI NAPITCI -->
        <section class="menu-category">
            <h2>Topli napitci</h2>
            <article class="menu-item"><h3>Čaj</h3><p class="price">1,60 €</p></article>
            <article class="menu-item"><h3>Kava</h3><p class="price">1,40 €</p></article>
            <article class="menu-item"><h3>Kava s mlijekom</h3><p class="price">1,60 €</p></article>
        </section>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
