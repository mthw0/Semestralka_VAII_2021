@include ('menu')
<script>
    document.title=document.title+" - "+"Čo je COVID-19?";
    $('#polozkyMenu1').addClass('active');
    $('#polozkyMenu2').removeClass('active');
    $('#polozkyMenu3').removeClass('active');
    $('#polozkyMenu4').removeClass('active');
    $('#polozkyMenu5').removeClass('active');
    $('#polozkyMenu6').removeClass('active');
    $('#polozkyMenu7').removeClass('active');
</script>

<div id="cookie-message" data-cookie-expiry="60" class="alert alert-primary" role="alert">
    Používaním tejto stránky súhlasíte s používaním súborov cookie.
    <span onclick="OK()"><b>OK</b>&nbsp;</span>
</div>
<div class="container">
    <div class="one-third side">
        <h2>
            Máte niektoré z týchto príznakov:
        </h2>
        <ul>
            <li>zvýšená teplota</li>
            <li>neutíchajúci kašeľ?</li>
        </ul>
        <p>
            Kontaktujte nás a nechajte sa vyšetriť na COVID-19.
        </p>

        <a href="" class="btn btn-success">Požiadať o PCR vyšetrenie</a>
        <a href="" class="btn btn-success">Požiadať o Ag vyšetrenie</a>
        <p><a href="">Úprava/overenie požiadavky (zrušenie/preobjednanie termínu na testovanie)</a></p>
        <p><a href="">Zoznam laboratórií na vyšetrenie ochorenia COVID – 19</a></p>
        <p><a href="">Zoznam antigénových testovacích miest</a></p>
        <p><a href="">Najčastejšie otázky ohľadne testovania</a></p>

        <h2>Vrátili ste sa zo zahraničia z rizikovej krajiny?</h2>
        <a href="" class="btn btn-success">Vyplňte formulár ehranica</a>

    </div>
    <div class="two-thirds main">
        <h1 class="warning">Čo je COVID-19?</h1>
        <hr>
        <p>COVID-19 je infekčné ochorenie, vyvolané koronavírusom SARS-CoV-2. Prvýkrát bol identifikovaný u pacientov so
            závažným respiračným ochorením v decembri roku 2019 v čínskom meste Wu-chan. COVID-19 postihuje najmä
            dýchací systém, v ťažkých prípadoch vyvoláva ťažký zápal pľúc a môže viesť až k úmrtiu pacienta. Vírus sa
            prenáša kvapôčkami sekrétu pri kašli, kýchaní a rozprávaní. Ohrozuje osoby, ktoré sú v blízkom alebo dlhšie
            trvajúcom kontakte s nakazeným. Infekcia sa prenáša aj cez kontaminované predmety.</p>
        <h2>Aké sú príznaky ochorenia?</h2>
        <ul>
            <li>horúčka nad 38°C</li>
            <li>kašeľ</li>
            <li>sťažené dýchanie</li>
            <li>bolesť svalov</li>
            <li>bolesť hlavy</li>
            <li>únava, malátnosť</li>
            <li>strata čuchu a chuti</li>
        </ul>
        <h2>Inkubačný čas a spôsob prenosu</h2>
        <ul>
            <li>Inkubačný čas ochorenia COVID-19 je 2 až 14 dní, môže byť aj dlhší. Medián inkubačného času je 5 až 6
                dní.
            </li>
            <li>Za najviac infekčnú sa považuje osoba s prítomnými klinickými príznakmi. Osoba je infekčná už pred
                nástupom prvých príznakov.
            </li>
            <li>Predpokladá sa prenos najmä vzdušnou cestou. Fekálno-orálny prenos nie je vylúčený.</li>
            <li>Na základe dostupných informácií sa predpokladá nozokomiálne (nemocničné) šírenie ochorenia na COVID-19
                v zdravotníckych zariadeniach, kde je potrebné dodržiavať ďalšie protiepidemické opatrenia pre
                zdravotníckych pracovníkov.
            </li>
        </ul>

        <h2>Prevencia</h2>

        <p>V rámci prevencie vydal Úrad verejného zdravotníctva SR opatrenie, v rámci ktorého sa zakazuje vychádzať a
            pohybovať sa na verejnosti bez prekrytia horných dýchacích ciest. Všetci občania teda majú <strong>
                povinnosť nosiť rúško všade mimo svojho bydliska.</strong></p>
        <p>Verejnosti sa ďalej odporúča dodržiavať nasledovné preventívne opatrenia:</p>

        <ul>
            <li>
                Umývajte si ruky často mydlom a vodou najmenej po dobu 20 sekúnd. Ak nie je k dispozícii mydlo a voda,
                treba použiť dezinfekčný prostriedok na ruky na báze alkoholu.
            </li>
            <li>
                Očí, nosa ani úst sa nedotýkajte neumytými rukami.
            </li>
            <li>
                Zakrývajte si nos a ústa pri kašľaní a kýchaní jednorazovou papierovou vreckovkou a následne ju zahoďte
                do koša.
            </li>
            <li>
                Vyhýbajte sa blízkemu kontaktu s ľuďmi, ktorí javia príznaky nádchy alebo chrípky.
            </li>
            <li>
                Ak ste chorý, kontaktujte svojho ošetrujúceho lekára, ktorý určí ďalší postup liečby, doma na lôžku sa z
                ochorenia liečte v samostatnej izbe.
            </li>
            <li>
                V domácnosti dbajte na zvýšenú dezinfekciu povrchov.
            </li>
            <li>V priestoroch, kde sa pohybuje veľa ľudí (obchody, pošta, MHD,…), používajte jednorazové rukavice.</li>

        </ul>
    </div>

</div>


@include('footer')
