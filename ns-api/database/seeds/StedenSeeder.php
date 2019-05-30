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
      DB::table('steden')->insert([
      "stad" => 'Den Haag',
      "info" => "Den Haag is de derde grootste gemeente van Nederland. De stad heeft ongeveer een half miljoen inwoners. De Nederlandse regering en het parlement zijn hier gevestigd in het binnenhof. Het Binnenhof is het oudste parlementscomplex van Europa die nog in gebruik is. Niet heel ver lopen van het Binnenhof is het paleis Noordeinde. Paleis Noordeind is het werkpaleis van Koning Willem-Alexander. Buiten de stad ligt in het Haagse Bos het Paleis waar de Koninklijke familie woont. In de stad zijn veel oude en leuke bezienswaardigheden te vinden. Zo is in 1946 het Vredespaleis gebouwd voor het Internationaal Gerechtshof. Het Internationaal Gerechtshof is het belangrijkste gerechtelijk orgaan binnen de Verenigde Naties.",
    ]);
    DB::table('steden')->insert([
      "stad" => 'Amsterdam',
      "info" => 'Amsterdam is de hoofdstad van Nederland en is met 800 duizend inwoners de grootste gemeente van Nederland. Het aantal verschillende nationaliteiten in deze stad is het hoogste van de wereld. De naam Amsterdam komt van de dam die in de 13de eeuw is aangelegd is de Amstel. Amsterdam is beroemd om zijn grachtengordel en pakhuizen. De pakhuizen liggen aan de grachten en werden vroeger gebruikt als opslag van goederen. In Amsterdam staan de meeste pakhuizen van Nederland omdat de stad vroeger een groot handelscentrum was. De pakhuizen zijn vaak hoge, smalle en diepe gebouwen en worden nu vooral gebruikt als woningen. Bekende bezienswaardigheden zijn het Rijksmuseum, het Anne Frank Huis en het Van Gogh Museum. In het Rijksmuseum hangt het bekendste schilderij van Nederland: De nachtwacht. Jaarlijks bezoeken meer dan twee miljoen bezoekers dit museum.',
    ]);
    DB::table('steden')->insert([
      "stad" => 'Leiden',
      "info" => 'Leiden, ook wel de Sleutelstad genoemd, heeft de oudste universiteit van Nederland. Daarnaast is de stad bekend om de rijke geschiedenis en de oude binnenstad, met grachten monumentale bouwwerken en hofjes. Van 1573 tot 1574 was Leiden omsingeld door de Spanjaarden. 6000 van de 18.000 inwoners kwamen om van de honger en de pest. 3 oktober werden de Spanjaarden verslagen en was het een groot feest in Leiden. Dit feest wordt nog ieder jaar gevierd. 3 oktober staat heel Leiden op zijn kop met onder andere een van de grootste kermissen van Nederland om het Leidens ontzet te vieren. Leiden is een gezellige studentenstad waar alles op loopafstand is te doen. Een leuke bezienswaardigheid is de historische Burcht van Leiden.',
    ]);
    }
}
