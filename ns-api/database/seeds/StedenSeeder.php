<?php

use Illuminate\Database\Seeder;

class StedenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('steden')->insert(
      "stad" => 'Den Haag',
      "info" => "Den Haag is de derde grootste gemeente van Nederland. De stad heeft ongeveer een half miljoen inwoners. De Nederlandse regering en het parlement zijn hier gevestigd in het binnenhof. Het Binnenhof is het oudste parlementscomplex van Europa die nog in gebruik is. Niet heel ver lopen van het Binnenhof is het paleis Noordeinde. Paleis Noordeind is het werkpaleis van Koning Willem-Alexander. Buiten de stad ligt in het Haagse Bos het Paleis waar de Koninklijke familie woont. In de stad zijn veel oude en leuke bezienswaardigheden te vinden. Zo is in 1946 het Vredespaleis gebouwd voor het Internationaal Gerechtshof. Het Internationaal Gerechtshof is het belangrijkste gerechtelijk orgaan binnen de Verenigde Naties.",
      );
      DB::table('steden')->insert(
        "stad" => 'Amsterdam',
        "info" => 'Amsterdam is de hoofdstad van Nederland en is met 800 duizend inwoners de grootste gemeente van Nederland. Het aantal verschillende nationaliteiten in deze stad is het hoogste van de wereld. De naam Amsterdam komt van de dam die in de 13de eeuw is aangelegd is de Amstel. Amsterdam is beroemd om zijn grachtengordel en pakhuizen. De pakhuizen liggen aan de grachten en werden vroeger gebruikt als opslag van goederen. In Amsterdam staan de meeste pakhuizen van Nederland omdat de stad vroeger een groot handelscentrum was. De pakhuizen zijn vaak hoge, smalle en diepe gebouwen en worden nu vooral gebruikt als woningen. Bekende bezienswaardigheden zijn het Rijksmuseum, het Anne Frank Huis en het Van Gogh Museum. In het Rijksmuseum hangt het bekendste schilderij van Nederland: De nachtwacht. Jaarlijks bezoeken meer dan twee miljoen bezoekers dit museum.',
      );
      DB::table('steden')->insert(
        "stad" => 'Leiden',
        "info" => 'Leiden, ook wel de Sleutelstad genoemd, heeft de oudste universiteit van Nederland. Daarnaast is de stad bekend om de rijke geschiedenis en de oude binnenstad, met grachten monumentale bouwwerken en hofjes. Van 1573 tot 1574 was Leiden omsingeld door de Spanjaarden. 6000 van de 18.000 inwoners kwamen om van de honger en de pest. 3 oktober werden de Spanjaarden verslagen en was het een groot feest in Leiden. Dit feest wordt nog ieder jaar gevierd. 3 oktober staat heel Leiden op zijn kop met onder andere een van de grootste kermissen van Nederland om het Leidens ontzet te vieren. Leiden is een gezellige studentenstad waar alles op loopafstand is te doen. Een leuke bezienswaardigheid is de historische Burcht van Leiden.',
      );
      DB::table('steden')->insert(
        "stad" => 'Haarlem',
        "info" => 'Haarlem is de hoofdstad van Noord-Holland en telt 160.000 inwoners. De stad is populair onder toeristen omdat de historische binnenstad bestaat uit een groot aantal monumentale bouwwerken, waaronder veel kerken en hofjes. De stad ligt ten noorden van de Bollenstreek en tegenwoordig heeft de stad de reputatie de Bloemenstad te zijn. Ieder jaar komen er +/- 1 miljoen mensen naar de bloemencorso kijken die door Haarlem trekt. Een andere leuke bezienswaardigheid is de Jopenkerk. In deze kerk wordt het bier Jopen gebrouwen. Je kan hier rondleidingen krijgen, uit eten en bier bestellen aan de bar.',
      );
      DB::table('steden')->insert(
        "stad" => 'Heemstede-Aerdenhout',
        "info" => 'Heemstede en Aerdenhout delen een station. De naam Aerdenhout komt van 'Den Anderen Hout': Aerdenhout was een andere 'hout' (een ander bosgebied) dan de Haarlemmerhout. Aerdenhout staat bekend om zijn villa’s, die gelegen zijn in de bossen rondom het dorp zelf. Het agrarisch karakter van Aerdenhout blijkt nog uit het gegeven, dat er vroeger zelfs een melkerij (melkfabriek) aanwezig was voor de plaatselijke boeren. Deze heette Melkerij Mariënbosch en lag aan de Boekenroodeweg. Na afbraak in de jaren zestig ontstond een braakliggend gebied wat lange tijd bleef. Later werd het bebouwd met een school. Heemstede is een plaats en gemeente in de Nederlandse provincie Noord-Holland. De gemeente telt 27.278 inwoners (1 januari 2019, bron: CBS) en heeft een oppervlakte van 9,61 km2  (waarvan 0,15 km² water). Binnen de gemeentegrenzen liggen geen andere kernen.
        De plaatsnaam Hempstead in de staat New York is mogelijk een verbasterde vorm van Heemstede: Deze plaats was in de 17e eeuw een koloniale nederzetting nabij Nieuw-Amsterdam.
        ',
      );
      DB::table('steden')->insert(
        "stad" => 'Delft',
        "info" => 'Delft is een stad en gemeente in Zuid-Holland in Nederland, gelegen aan de Schie, tussen Den Haag en Rotterdam. Op 1 januari 2019 telde de gemeente Delft 103.217 inwoners. Delft heeft een historische binnenstad, ontwikkelde zich in de 19e eeuw tot industriestad en profileert zich tegenwoordig, met de aanwezigheid van een Technische Universiteit en de onderzoeksinstituten TNO en Deltares, vooral als Delft Kennisstad met als slogan Creating History. Binnen de geschiedenis van Nederland is Delft vooral bekend doordat Willem van Oranje er vanaf 1572 heeft gerealiseerd en er in 1584 werd vermoord. De Oranjes worden sindsdien traditioneel in Delft bijgezet. De bijnaam van Delft is de Prinsenstad. De patroonheilige van de stad is Hippolytus van Rome.',
      );
      DB::table('steden')->insert(
        "stad" => 'Schiedam',
        "info" => 'Schiedam is een stad en gemeente in de Nederlandse provincie Zuid-Holland. De gemeente neemt deel aan de Metropoolregio Rotterdam Den Haag. Schiedam is gelegen tussen Rotterdam en Vlaardingen, oorspronkelijk aan de Schie en later ook aan de Nieuwe Maas. Per 1 januari 2019 had de gemeente 78.094 inwoners (bron: CBS). De stad is wereldwijd bekend om haar jeneverproductie, de historische binnenstad met historische havens (in andere Hollandse steden zouden die 'grachten' heten) en de hoogste windmolens ter wereld.',
      );
      DB::table('steden')->insert(
        "stad" => 'Rotterdam',
        "info" => 'Rotterdam is een havenstad gelegen in het westen van Nederland, in de provincie Zuid-Holland. De stad is gelegen aan de Nieuwe Maas, een van de rivieren in de delta die gevormd wordt door de Rijn en de Maas. De haven van Rotterdam, lange tijd de grootste ter wereld, is de grootste en belangrijkste van Europa. Het havengebied strekt zich uit over een lengte van 40 kilometer. De naam Rotterdam stamt uit de dertiende eeuw en verwijst naar een dam in de rivier de Rotte. De historische binnenstad werd in mei 1940 grotendeels verwoest door een Duits bombardement. Rotterdam staat bekend om zijn vernieuwende architectuur.',
      );
      DB::table('steden')->insert(
        "stad" => 'Dordrecht',
        "info" => 'Dordrecht is met 118.667 inwoners (1 januari 2019, bron: CBS) de vijfde gemeente van de Nederlandse provincie Zuid-Holland. Dordrecht maakt deel uit van de grootstedelijke agglomeratie Drechtsteden die ongeveer 280.000 inwoners telt. De stad ligt op de plaats waar de Merwede zich splitst in de Noord en de Oude Maas. De gemeente Dordrecht omvat het gehele Eiland van Dordrecht. De bewoners van Dordrecht noemen hun stad veelal Dordt. Dordrecht beschikt over vier politiebureaus, twee brandweerkazernes, een ziekenhuis (Albert Schweitzer Ziekenhuis) en een gevangenis (Gevangenis Dordrecht).Dordrecht werd voor het eerst vermeld in een tekst uit de twaalfde eeuw, toen de stad nog werd aangeduid als Thuredrech, en kreeg in 1220 stadsrechten. In de middeleeuwen ontwikkelde de stad zich als belangrijke handelstad en stapelplaats en was het een van de zes grote steden van Holland. Later nam het belang van de stad af, maar de binnenstad herinnert nog altijd aan dit rijke verleden.Hollands oudste stad ligt op een eiland, omsloten door brede rivieren. Duizend monumenten, historische binnenstadhavens en een geweldige sfeer bepalen het karakter van deze eeuwenoude havenstad.Dordrecht is goed bereikbaar met de auto en het openbaar vervoer. De historische binnenstad vind je bij de kruising van de Oude Maas, Noord en Merwede. In het groene buitengebied overheerst de natuur van de Biesbosch.',
      );
      DB::table('steden')->insert(
        "stad" => 'Roosendaal',
        "info" => 'Roosendaal is een ondernemende stad waar veel te zien, te doen en te beleven is. Winkelstad bij uitstek met maar liefst drie overdekte winkelcentra, vermaard in de regio en geliefd bij onze zuiderburen. In de talrijke horecagelegenheden, de mooie winkels en bij de vele evenementen wordt u ontvangen met Roosendaalse gastvrijheid, gemoedelijkheid en gezelligheid. Koppel uw bezoek aan de binnenstad ook eens aan Rosada Fashion Outlet, GoStores of aan recreatiepark De Stok. Roosendaal kent de luxe van een mooie, groene omgeving met uitgestrekte bos- en heidegebieden, zoals Wouwse Plantage, Visdonk, de Rucphense Bossen en Kalmthoutse Heide. Dorpse gemoedelijkheid vindt u in de dorpen Heerle, Moerstraten, Nispen, Wouw en Wouwse Plantage. ',
      );
      DB::table('steden')->insert(
        "stad" => '',
        "info" => '',
      );
    }
}
