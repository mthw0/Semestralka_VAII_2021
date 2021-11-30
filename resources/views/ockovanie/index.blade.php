@include('menu')
<script>
    $(document).ready(function () {
        $("#faza1").load("faza1.php");
    });
</script>
<script src="js/jquery.js">

</script>
<script>
    document.title = document.title + " - " + "Očkovanie";
</script>
<div class="container">
    <div id="cookie-message" data-cookie-expiry="60" class="alert alert-primary" role="alert">
        Používaním tejto stránky súhlasíte s používaním súborov cookie.
        <span onclick="OK()"><b>OK</b>&nbsp</span>
    </div>

    <h1>Kto a kedy sa bude môcť dať zaočkovať?</h1>
    <hr>
    <p><a href={{route('objednavky.create')}} target="_blank" class="btn btn-primary">Požiadať
            o očkovanie</a>
    </p>
    <p><a href={{route('kontrola.index')}} target="_blank" class="btn btn-primary">Kontrola objednavky</a>
    </p>

    <p>
        Požiadať o očkovanie môžu všetci, ktorí patria do aktuálne otvorenej fázy a taktiež tí, ktorí patria do
        predchádzajúcich fáz očkovania.
    </p>
    <p>
        <strong>Napríklad:</strong> Je otvorená 3. fáza a ja patrím do 1. fázy, môžem teda požiadať o očkovanie. Ak by
        som bol napríklad v 5. fáze, zatiaľ nemôžem požiadať o očkovanie.
    </p>
    <h3>Čo ak sa očkovanie ľudia nedostavili? </h3>
    <p>Ak sa na očkovanie v daný deň nedostavili všetky riadne objednané osoby (t.j. objednané cez centrálny
        objednávkový systém), môže poskytovateľ podať zvyšné dávky osobám, ktorým sa v príslušnom zdravotníckom
        zariadení poskytuje ústavná zdravotná starostlivosť. Tieto osoby však musia spĺňať jednu z týchto dvoch
        podmienok:
        <br>– dosahujú vek minimálne 65 rokov,
        <br>– patria medzi osoby s ochorením podľa 5. fázy. </p>
    <p>
        Ak zvyšnú dávku nemôže podať týmto osobám, môže ju podať aj tým, ktorým neposkytuje zdravotnú starostlivosť v
        príslušnom zariadení, stále však platí, že očkované osoby musia:
        <br>– dosahovať vek minimálne 65 rokov, alebo
        <br>– patria medzi osoby s ochorením podľa 5. fázy
    </p>

    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" onclick="" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        1. Fáza
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p id="faza1">text</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                        2. Fáza
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                        3. Fáza
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.</p>
                </div>
            </div>
        </div>
    </div>

</div>
@include('footer')
