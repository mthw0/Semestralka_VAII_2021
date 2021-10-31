@include('menu')

<script>
    document.title=document.title+" - "+"Aktuálne opatrenia";
</script>

<div class="container">

    <div id="cookie-message" data-cookie-expiry="60" class="alert alert-primary" role="alert" style="display: none">
        Používaním tejto stránky súhlasíte s používaním súborov cookie.
        <span onclick="OK()"><b>OK</b>&nbsp</span>
    </div>

    <h1>Aktuálne opatrenia</h1>
    <h2>Prehľad najdôležitejších zmien od 8.2.2021</h2>
    <ul>
        <li>
            <strong> od 8. februára 2021 začína platiť COVID automat,</strong> okresy na Slovensku sú rozdelné podľa
            aktuálnej rizikovosti (4. stupne varovania),
        </li>
        <li>
            <strong> zamestnanci škôl a školských zariadení</strong> na území celej SR sa pri vstupe do priestorov zamestnávateľa budú
            musieť preukázať <strong>negatívnym</strong> (RT-PCR alebo antigénovým) <strong>testom</strong> na COVID-19, <strong>nie starším ako 7 dní,</strong>
        </li>
        <li>
            ostatným zamestnávateľom sa nariaďuje zakázať vstup zamestnancov do ich priestorov. Výnimky, za akých môže
            ísť zamestnanec do práce sa delia podľa okresov/v akom stupni varovania sú (pozor, treba sa riadiť
            opatreniami platnými „v najhoršom okrese“, ak ním čo i len prechádzate do práce):
        <ul>
            <li>
                od 10. februára 2021 sa zamestnanci v okresoch stupňa varovania III a IV musia vedieť preukázať negatívnym
                výsledkom RT-PCR alebo antigénového testu na COVID-19 nie starším ako 7 dní,
            </li>
            <li>
                od 15. februára 2021 sa zamestnanci v okresoch stupňa varovania II musia vedieť preukázať negatívnym
                výsledkom RT-PCR alebo antigénového testu na COVID-19 nie starším ako 14 dní,
            </li>
            <li>
                od 15. februára 2021 sa zamestnanci v okresoch stupňa varovania I musia vedieť preukázať negatívnym
                výsledkom RT-PCR alebo antigénového testu na COVID-19 nie starším ako 21 dní,
            </li>
        </ul>
        </li>
        <li>cesta do zamestnania prostredníctvom MHD, regionálnym autobusom či vlakom je povolená len s negatívnym testom na ochorenie COVID-19, nie starším ako 7 dní (neberie sa ohľad na okres či stupeň varovania), </li>
        <li>mení sa absolvovanie 10 dňovej izolácie po príchode na SR z rizikových krajín na 14 dňovú,  </li>
        <li>mení sa deň, kedy má byť osoba po príchode z rizikových krajín testovaná RT-PCR testom a to z piateho dňa na ôsmy deň,</li>
        <li>14 dňová izolácia platí aj v prípade úzkeho kontaktu s pozitívne testovanou osobou, aj keď je výsledok RT-PCR testu negatívny,</li>
        <li>otvoriť sa môžu aj záhradkárstva či opravovne šatstva,</li>
        <li>môžu sa realizovať športové podujatia, ktoré trvajú viac ako štyri dni (bez obecenstva), vstup do priestrov (ako plaváreň, hala a iné) je povolený len s negatívnym RT-PCR testom nie starší ako 24 hodín, pri výstupe len s negatívnym RT-PCR alebo antigénovým testom nie starší ako 12 hodín, </li>
        <li>ruší sa povinnosť preukázať sa testom na cestu do prírody v rámci okresu, avšak pobyt v prírode mimo okresu (nie v čiernej fáze) je povolený len s negatívnym RT-PCR alebo antigénovým testom nie starším ako 7 dní. </li>

    </ul>



</div>
@include('footer')
