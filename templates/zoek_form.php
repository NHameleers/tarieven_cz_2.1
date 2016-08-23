<div class="container">
    <div class="intro">
        <p>Begin augustus heeft CZ de tariefafspraken met ziekenhuizen
        <a href="https://www.cz.nl/over-cz/inkoop-van-zorg/wat-kost-uw-behandeling-in-het-ziekenhuis">gepubliceerd</a>.
        Niet alle tarieven zijn vrijgegeven. Alleen de tarieven waarvoor de minimale prijs lager is dan 885 (het maximale
        eigen risico) zijn gepubliceerd.</p>
        <br>
        <p>Op deze pagina kunt u per behandeling de tarieven van alle ziekenhuizen zien. 
        Vul een omschrijving van uw behandeling in (of een declaratiecode of zorgproductcode als u deze weet) en klik op 'Zoeken' om de tarieven te bekijken.</p>
        <br>
    </div>

    <form action="public/zoek.php" method="post">
        <fieldset>
            <div class="form-group">
                <input autofocus class="form-control zoek-box input-lg" name="zorgcode" 
                placeholder="Vul omschrijving, declaratiecode of zorgproduct in om de tarieven in verschillende ziekenhuizen te zien" type="text"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-warning">Zoeken</button>
            </div>
        </fieldset>
    </form>

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-left">Wat laten de data zien?</h2>
        </div>
        <div class="col-md-6 col-sm-12">
            <table class="table table-hover text-left">
                <tr>
                    <td></td>
                    <td class="text-right">249</td>
                    <td>Zorgverleners, in</td>

                </tr>
                <tr>
                    <td></td>
                    <td class="text-right">112</td>
                    <td>steden, die samen</td>

                </tr>
                <tr>
                    <td></td>
                    <td class="text-right">2158</td>
                    <td>verschillende behandelingen aanbieden.</td>
                </tr>
                <tr>
                    <td><i class="fa fa-eur" aria-hidden="true"></i></td>
                    <td class="text-right">0.01</td>
                    <td>is de prijs van de goedkoopste.</td>
                </tr>
                <tr>
                    <td><i class="fa fa-eur" aria-hidden="true"></i></td>
                    <td class="text-right">2820</td>
                    <td>is de prijs van de duurste.</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-right"></td>
                    <td>Voor eenzelfde behandeling kunnen prijzen flink verschillen tussen zorgverleners</td>
                </tr>
                <tr>
                    <td><i class="fa fa-eur" aria-hidden="true"></i></td>
                    <td class="text-right">335</td>
                    <td>is het gemiddelde verschil tussen minimum- en maximumtarief</td>
                </tr>
                <tr>
                    <td><i class="fa fa-eur" aria-hidden="true"></i></td>
                    <td class="text-right">379</td>
                    <td>is de standaard deviatie van dat verschil, en</td>
                </tr>
                <tr>
                    <td><i class="fa fa-eur" aria-hidden="true"></i></td>
                    <td class="text-right">2212</td>
                    <td>is het maximale verschil tussen minimum- en maximumtarief van een behandeling</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6 col-sm-12" id="map_netherlands">
           <img src="public/img/verschillen_tussen_tarieven.PNG" alt="Verschillen tussen tarieven" class="img-responsive" id="histogram">        
        </div>
    </div> <!-- .row -->
</div> <!-- .container -->