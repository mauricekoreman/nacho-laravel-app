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
      "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Amsterdam',
        "info" => 'Amsterdam is de hoofdstad van Nederland en is met 800 duizend inwoners de grootste gemeente van Nederland. Het aantal verschillende nationaliteiten in deze stad is het hoogste van de wereld. De naam Amsterdam komt van de dam die in de 13de eeuw is aangelegd is de Amstel. Amsterdam is beroemd om zijn grachtengordel en pakhuizen. De pakhuizen liggen aan de grachten en werden vroeger gebruikt als opslag van goederen. In Amsterdam staan de meeste pakhuizen van Nederland omdat de stad vroeger een groot handelscentrum was. De pakhuizen zijn vaak hoge, smalle en diepe gebouwen en worden nu vooral gebruikt als woningen. Bekende bezienswaardigheden zijn het Rijksmuseum, het Anne Frank Huis en het Van Gogh Museum. In het Rijksmuseum hangt het bekendste schilderij van Nederland: De nachtwacht. Jaarlijks bezoeken meer dan twee miljoen bezoekers dit museum.',
        "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Leiden',
        "info" => 'Leiden, ook wel de Sleutelstad genoemd, heeft de oudste universiteit van Nederland. Daarnaast is de stad bekend om de rijke geschiedenis en de oude binnenstad, met grachten monumentale bouwwerken en hofjes. Van 1573 tot 1574 was Leiden omsingeld door de Spanjaarden. 6000 van de 18.000 inwoners kwamen om van de honger en de pest. 3 oktober werden de Spanjaarden verslagen en was het een groot feest in Leiden. Dit feest wordt nog ieder jaar gevierd. 3 oktober staat heel Leiden op zijn kop met onder andere een van de grootste kermissen van Nederland om het Leidens ontzet te vieren. Leiden is een gezellige studentenstad waar alles op loopafstand is te doen. Een leuke bezienswaardigheid is de historische Burcht van Leiden.',
        "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Haarlem',
        "info" => 'Haarlem is de hoofdstad van Noord-Holland en telt 160.000 inwoners. De stad is populair onder toeristen omdat de historische binnenstad bestaat uit een groot aantal monumentale bouwwerken, waaronder veel kerken en hofjes. De stad ligt ten noorden van de Bollenstreek en tegenwoordig heeft de stad de reputatie de Bloemenstad te zijn. Ieder jaar komen er +/- 1 miljoen mensen naar de bloemencorso kijken die door Haarlem trekt. Een andere leuke bezienswaardigheid is de Jopenkerk. In deze kerk wordt het bier Jopen gebrouwen. Je kan hier rondleidingen krijgen, uit eten en bier bestellen aan de bar.',
        "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Heemstede-Aerdenhout',
        "info" => 'Heemstede en Aerdenhout delen een station. De naam Aerdenhout komt van Den Anderen Hout: Aerdenhout was een andere hout (een ander bosgebied) dan de Haarlemmerhout. Aerdenhout staat bekend om zijn villa’s, die gelegen zijn in de bossen rondom het dorp zelf. Het agrarisch karakter van Aerdenhout blijkt nog uit het gegeven, dat er vroeger zelfs een melkerij (melkfabriek) aanwezig was voor de plaatselijke boeren. Deze heette Melkerij Mariënbosch en lag aan de Boekenroodeweg. Na afbraak in de jaren zestig ontstond een braakliggend gebied wat lange tijd bleef. Later werd het bebouwd met een school. Heemstede is een plaats en gemeente in de Nederlandse provincie Noord-Holland. De gemeente telt 27.278 inwoners (1 januari 2019, bron: CBS) en heeft een oppervlakte van 9,61 km2  (waarvan 0,15 km² water). Binnen de gemeentegrenzen liggen geen andere kernen.
        De plaatsnaam Hempstead in de staat New York is mogelijk een verbasterde vorm van Heemstede: Deze plaats was in de 17e eeuw een koloniale nederzetting nabij Nieuw-Amsterdam.',
        "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Delft',
        "info" => 'Delft is een stad en gemeente in Zuid-Holland in Nederland, gelegen aan de Schie, tussen Den Haag en Rotterdam. Op 1 januari 2019 telde de gemeente Delft 103.217 inwoners. Delft heeft een historische binnenstad, ontwikkelde zich in de 19e eeuw tot industriestad en profileert zich tegenwoordig, met de aanwezigheid van een Technische Universiteit en de onderzoeksinstituten TNO en Deltares, vooral als Delft Kennisstad met als slogan Creating History. Binnen de geschiedenis van Nederland is Delft vooral bekend doordat Willem van Oranje er vanaf 1572 heeft gerealiseerd en er in 1584 werd vermoord. De Oranjes worden sindsdien traditioneel in Delft bijgezet. De bijnaam van Delft is de Prinsenstad. De patroonheilige van de stad is Hippolytus van Rome.',
        "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Schiedam',
        "info" => 'Schiedam is een stad en gemeente in de Nederlandse provincie Zuid-Holland. De gemeente neemt deel aan de Metropoolregio Rotterdam Den Haag. Schiedam is gelegen tussen Rotterdam en Vlaardingen, oorspronkelijk aan de Schie en later ook aan de Nieuwe Maas. Per 1 januari 2019 had de gemeente 78.094 inwoners (bron: CBS). De stad is wereldwijd bekend om haar jeneverproductie, de historische binnenstad met historische havens (in andere Hollandse steden zouden die grachten heten) en de hoogste windmolens ter wereld.',
        "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Rotterdam',
        "info" => 'Rotterdam is een havenstad gelegen in het westen van Nederland, in de provincie Zuid-Holland. De stad is gelegen aan de Nieuwe Maas, een van de rivieren in de delta die gevormd wordt door de Rijn en de Maas. De haven van Rotterdam, lange tijd de grootste ter wereld, is de grootste en belangrijkste van Europa. Het havengebied strekt zich uit over een lengte van 40 kilometer. De naam Rotterdam stamt uit de dertiende eeuw en verwijst naar een dam in de rivier de Rotte. De historische binnenstad werd in mei 1940 grotendeels verwoest door een Duits bombardement. Rotterdam staat bekend om zijn vernieuwende architectuur.',
        "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Dordrecht',
        "info" => 'Dordrecht is met 118.667 inwoners (1 januari 2019, bron: CBS) de vijfde gemeente van de Nederlandse provincie Zuid-Holland. Dordrecht maakt deel uit van de grootstedelijke agglomeratie Drechtsteden die ongeveer 280.000 inwoners telt. De stad ligt op de plaats waar de Merwede zich splitst in de Noord en de Oude Maas. De gemeente Dordrecht omvat het gehele Eiland van Dordrecht. De bewoners van Dordrecht noemen hun stad veelal Dordt. Dordrecht beschikt over vier politiebureaus, twee brandweerkazernes, een ziekenhuis (Albert Schweitzer Ziekenhuis) en een gevangenis (Gevangenis Dordrecht).Dordrecht werd voor het eerst vermeld in een tekst uit de twaalfde eeuw, toen de stad nog werd aangeduid als Thuredrech, en kreeg in 1220 stadsrechten. In de middeleeuwen ontwikkelde de stad zich als belangrijke handelstad en stapelplaats en was het een van de zes grote steden van Holland. Later nam het belang van de stad af, maar de binnenstad herinnert nog altijd aan dit rijke verleden.Hollands oudste stad ligt op een eiland, omsloten door brede rivieren. Duizend monumenten, historische binnenstadhavens en een geweldige sfeer bepalen het karakter van deze eeuwenoude havenstad.Dordrecht is goed bereikbaar met de auto en het openbaar vervoer. De historische binnenstad vind je bij de kruising van de Oude Maas, Noord en Merwede. In het groene buitengebied overheerst de natuur van de Biesbosch.',
        "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Roosendaal',
        "info" => 'Roosendaal is een ondernemende stad waar veel te zien, te doen en te beleven is. Winkelstad bij uitstek met maar liefst drie overdekte winkelcentra, vermaard in de regio en geliefd bij onze zuiderburen. In de talrijke horecagelegenheden, de mooie winkels en bij de vele evenementen wordt u ontvangen met Roosendaalse gastvrijheid, gemoedelijkheid en gezelligheid. Koppel uw bezoek aan de binnenstad ook eens aan Rosada Fashion Outlet, GoStores of aan recreatiepark De Stok. Roosendaal kent de luxe van een mooie, groene omgeving met uitgestrekte bos- en heidegebieden, zoals Wouwse Plantage, Visdonk, de Rucphense Bossen en Kalmthoutse Heide. Dorpse gemoedelijkheid vindt u in de dorpen Heerle, Moerstraten, Nispen, Wouw en Wouwse Plantage. ',
        "taal" => "NL",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Amsterdam',
        "info" => 'Amsterdam is the capital of the Netherlands and, with 800,000 inhabitants, is the largest municipality in the Netherlands. The number of different nationalities in this city is the highest in the world. The name Amsterdam comes from the dam that was built in the 13th century is the Amstel. Amsterdam is famous for its canal belt and warehouses. The warehouses are located on the canals and were previously used as storage of goods. Amsterdam has most warehouses in the Netherlands because the city used to be a large trading center. The warehouses are often high, narrow and deep buildings and are now mainly used as houses. Well-known sights are the Rijksmuseum, the Anne Frank House and the Van Gogh Museum. The Rijksmuseum is home to the most famous painting in the Netherlands: The Night Watch. More than two million visitors visit this museum every year.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Haarlem',
        "info" => 'Haarlem is the capital of North Holland and has 160,000 inhabitants. The city is popular with tourists because the historic city center consists of a large number of monumental buildings, including many churches and courtyards. The city is located north of the Bulb Region and nowadays the city has the reputation of being the Flower City. Every year +/- 1 million people come to watch the flower parade that travels through Haarlem. Another nice place of interest is the Jopenkerk. Jopen beer is brewed in this church. You can get guided tours here, order food and beer at the bar.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Heemstede-Aerdenhout',
        "info" => 'Heemstede and Aerdenhout share a station. The name Aerdenhout comes from `Den Anderen Hout`: Aerdenhout was a different `wood` (a different forest area) than the Haarlemmerhout. Aerdenhout is known for its villas, which are located in the forests around the village itself. The agricultural character of Aerdenhout is evident from the fact that in the past there was even a dairy (milk factory) present for the local farmers. This was called Melkerij Mariënbosch and was located on the Boekenroodeweg. After demolition in the 1960s, an undeveloped area emerged which remained for a long time. Later it was built on a school. Heemstede is a town and municipality in the Dutch province of North Holland. The municipality has 27,278 inhabitants (1 January 2019, source: CBS) and has an area of ​​9.61 km2 (of which 0.15 km² water). There are no other cores within the municipal boundaries. The place name Hempstead in the state of New York is possibly a corrupted form of Heemstede: This place was a colonial settlement near New Amsterdam in the 17th century.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Leiden',
        "info" => 'Leiden, also known as the Key City, has the oldest university in the Netherlands. In addition, the city is known for its rich history and the old town, with canals and monumental buildings. From 1573 to 1574, Leiden was surrounded by the Spaniards. 6,000 of the 18,000 inhabitants died of hunger and the plague. October 3 the Spaniards were defeated and it was a big party in Leiden. This party is still celebrated every year. October 3, the whole of Leiden is turned upside down with, among other things, one of the largest fairs in the Netherlands to celebrate the relief of Leiden. Leiden is a pleasant student city where everything is within walking distance. A nice sight is the historic Leiden Castle.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'The Hague',
        "info" => 'The Hague is the third largest municipality in the Netherlands. The city has approximately half a million inhabitants. The Dutch government and parliament are located here in the courtyard. The Binnenhof is the oldest parliament complex in Europe that is still in use. Not far from the Binnenhof is the Noordeinde palace. Noordeind Palace is the working palace of King Willem-Alexander. Outside the city lies the Palace where the Royal family lives in the Haagse Bos. In the city you can find many old and nice sights. The Peace Palace was built in 1946 for the International Court of Justice. The International Court of Justice is the most important judicial body within the United Nations.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Delft',
        "info" => 'Delft is a city and municipality in South Holland in the Netherlands, located on the Schie, between The Hague and Rotterdam. On January 1, 2019, the municipality of Delft had 103,217 inhabitants. Delft has a historic city center, developed into an industrial city in the 19th century and is currently making a name for itself, with the presence of a Technical University and the research institutes TNO and Deltares, especially as a Delft Knowledge City with the slogan Creating History. Delft is best known in the history of the Netherlands because Willem van Oranje realized there from 1572 and was murdered there in 1584. The Oranjes have since been traditionally buried in Delft. Delft`s nickname is the Princes` City. The patron saint of the city is Hippolytus of Rome.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Schiedam',
        "info" => 'Schiedam is a city and municipality in the Dutch province of South Holland. The municipality participates in the Rotterdam The Hague Metropolitan Area. Schiedam is located between Rotterdam and Vlaardingen, originally on the Schie and later on the Nieuwe Maas. As of January 1, 2019, the municipality had 78,094 inhabitants (source: CBS). The city is known worldwide for its gin production, the historic city center with historic harbors (in other Dutch cities they would be called `canals`) and the highest windmills in the world.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Rotterdam',
        "info" => 'Rotterdam is a port city located in the west of the Netherlands, in the province of South Holland. The city is located on the Nieuwe Maas, one of the rivers in the delta formed by the Rhine and the Maas. The port of Rotterdam, for a long time the largest in the world, is the largest and most important in Europe. The port area extends over a length of 40 kilometers. The name Rotterdam dates from the thirteenth century and refers to a dam in the river Rotte. The historic city center was largely destroyed in May 1940 by a German bombing. Rotterdam is known for its innovative architecture.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Dordrecht',
        "info" => 'With 118,667 inhabitants (January 1, 2019, source: CBS), Dordrecht is the fifth municipality in the Dutch province of South Holland. Dordrecht is part of the Drechtsteden metropolitan agglomeration, which has around 280,000 inhabitants. The city is located where the Merwede divides into the North and the Old Maas. The municipality of Dordrecht covers the entire Island of Dordrecht. The residents of Dordrecht often call their city Dordt. Dordrecht has four police stations, two fire stations, a hospital (Albert Schweitzer Hospital) and a prison (Dordrecht prison). 1220 city rights. In the Middle Ages, the city developed into an important trading city and warehouse and it was one of the six major cities in Holland. Later the importance of the city diminished, but the inner city still reminds us of this rich past. Holland`s oldest city is situated on an island, surrounded by wide rivers. A thousand monuments, historic city ports and a great atmosphere determine the character of this age-old port city. Dordrecht is easily accessible by car and public transport. The historic city center can be found at the intersection of the Oude Maas, Noord and Merwede. The nature of the Biesbosch dominates in the green countryside.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Roosendaal',
        "info" => 'Roosendaal is an entrepreneurial city where there is much to see, do and experience. A shopping city par excellence with no fewer than three indoor shopping centers, renowned in the region and loved by our southern neighbors. In the numerous bars and restaurants, the beautiful shops and at the many events you will be welcomed with Roosendaal hospitality, geniality and conviviality. Couple your visit to the city center with Rosada Fashion Outlet, GoStores or the De Stok leisure park. Roosendaal has the luxury of a beautiful, green area with extensive forest and heath areas, such as Wouwse Plantage, Visdonk, the Rucphense Bossen and Kalmthoutse Heide. You will find village friendliness in the villages of Heerle, Moerstraten, Nispen, Wouw and Wouwse Plantage.',
        "taal" => "ENG",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Amsterdam',
        "info" => 'Amsterdam est la capitale des Pays-Bas et, avec 800 000 habitants, est la plus grande commune des Pays-Bas. Le nombre de nationalités différentes dans cette ville est le plus élevé au monde. Le nom Amsterdam vient du barrage qui a été construit au 13ème siècle est l`Amstel. Amsterdam est célèbre pour sa ceinture de canaux et ses entrepôts. Les entrepôts sont situés sur les canaux et servaient auparavant de stockage de marchandises. Amsterdam possède la plupart des entrepôts aux Pays-Bas, car la ville était autrefois un grand centre commercial. Les entrepôts sont souvent des bâtiments hauts, étroits et profonds et sont maintenant principalement utilisés comme maisons. Les sites touristiques connus sont le Rijksmuseum, la maison d`Anne Frank et le musée Van Gogh. Le Rijksmuseum abrite le tableau le plus célèbre des Pays-Bas: The Night Watch. Plus de deux millions de visiteurs visitent ce musée chaque année.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Haarlem',
        "info" => 'Haarlem est la capitale de la Hollande-Septentrionale et compte 160 000 habitants. La ville est populaire auprès des touristes car le centre-ville historique se compose d`un grand nombre de bâtiments monumentaux, y compris de nombreuses églises et cours. La ville est située au nord de la région des bulbes et a aujourd`hui la réputation d`être la ville des fleurs. Chaque année, environ 1 million de personnes assistent au défilé de fleurs qui se déroule à Haarlem. Le Jopenkerk est un autre lieu intéressant. La bière Jopen est brassée dans cette église. Vous pouvez obtenir des visites guidées ici, commander de la nourriture et de la bière au bar.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Heemstede-Aerdenhout',
        "info" => 'Heemstede et Aerdenhout partagent une même gare. Le nom Aerdenhout vient de «Den Anderen Hout»: Aerdenhout était un «bois» différent (une zone forestière différente) du Haarlemmerhout. Aerdenhout est connue pour ses villas situées dans les forêts entourant le village même. Le caractère agricole d’Aerdenhout ressort clairement du fait qu’il existait même dans le passé une laiterie (fabrique de lait) pour les agriculteurs locaux. Ceci s`appelait Melkerij Mariënbosch et était situé sur le Boekenroodeweg. Après la démolition dans les années 1960, une zone non développée est apparue qui est restée longtemps. Plus tard, il a été construit sur une école. Heemstede est une ville et une municipalité de la province néerlandaise de la Hollande-Septentrionale. La municipalité compte 27 278 habitants (1er janvier 2019, source: CBS) et a une superficie de 9,61 km2 (dont 0,15 km² d`eau). Il n`y a pas d`autres noyaux dans les limites municipales.
Le nom de lieu Hempstead dans l`État de New York est peut-être une forme corrompue de Heemstede: cet endroit était une colonie coloniale située près de New Amsterdam au 17ème siècle.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Leiden',
        "info" => 'Leiden, également connue sous le nom de Key City, est la plus ancienne université des Pays-Bas. En outre, la ville est connue pour sa riche histoire et sa vieille ville, avec ses canaux et ses bâtiments monumentaux. De 1573 à 1574, Leiden était encerclée par les Espagnols. 6 000 des 18 000 habitants sont morts de faim et de peste. Le 3 octobre, les Espagnols sont vaincus et c`est une grande fête à Leiden. Cette fête est toujours célébrée chaque année. Le 3 octobre, tout Leyde est bouleversé, avec notamment l`une des plus grandes foires des Pays-Bas pour célébrer le soulagement de Leiden. Leiden est une ville étudiante agréable où tout est accessible à pied. Le château historique de Leiden est un bel endroit.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'La Haye',
        "info" => 'La Haye est la troisième plus grande commune des Pays-Bas. La ville compte environ un demi million d`habitants. Le gouvernement et le parlement néerlandais sont situés ici dans la cour. Le Binnenhof est le plus ancien complexe parlementaire encore utilisé en Europe. Non loin du Binnenhof se trouve le palais Noordeinde. Noordeind Palace est le palais de travail du roi Willem-Alexander. En dehors de la ville se trouve le palais où la famille royale habite dans le Haagse Bos. Dans la ville, vous pouvez trouver de nombreux sites anciens et agréables. Le Palais de la Paix a été construit en 1946 pour la Cour internationale de justice. La Cour internationale de justice est l’organe judiciaire le plus important des Nations Unies.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Delft',
        "info" => 'Delft est une ville et une municipalité des Pays-Bas situés aux Pays-Bas, situées sur la Schie, entre La Haye et Rotterdam. Le 1er janvier 2019, la municipalité de Delft comptait 103 217 habitants. Delft a un centre-ville historique, devenu une ville industrielle au 19ème siècle et se fait un nom, avec la présence d`une université technique et les instituts de recherche TNO et Deltares, en particulier comme une ville du savoir de Delft avec le slogan Creating History. Delft est surtout connue dans l’histoire des Pays-Bas, car Willem van Oranje s’y est rendu compte dès 1572 et y a été assassiné en 1584. Les Oranjes sont depuis lors traditionnellement enterrés à Delft. Le surnom de Delft est la ville des princes. Le saint patron de la ville est Hippolyte de Rome.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Schiedam',
        "info" => 'Schiedam est une ville et une municipalité de la province néerlandaise de la Hollande méridionale. La municipalité participe à la région métropolitaine de Rotterdam-La Haye. Schiedam se situe entre Rotterdam et Vlaardingen, à l`origine sur la Schie et plus tard sur la Nieuwe Maas. Au 1er janvier 2019, la municipalité comptait 78 094 habitants (source: CBS). La ville est connue dans le monde entier pour sa production de gin, son centre-ville historique doté de ports historiques (dans d`autres villes néerlandaises, ils seraient appelés "canaux") et les moulins à vent les plus hauts du monde.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Rotterdam',
        "info" => 'Rotterdam est une ville portuaire située à l`ouest des Pays-Bas, dans la province de la Hollande méridionale. La ville est située sur la Nieuwe Maas, l`un des fleuves du delta formé par le Rhin et la Meuse. Le port de Rotterdam, longtemps le plus grand du monde, est le plus grand et le plus important d’Europe. La zone portuaire s`étend sur une longueur de 40 kilomètres. Le nom de Rotterdam date du XIIIe siècle et fait référence à un barrage dans la rivière Rotte. Le centre-ville historique a été en grande partie détruit en mai 1940 par un bombardement allemand. Rotterdam est connue pour son architecture innovante.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Dordrecht',
        "info" => 'Dordrecht est la cinquième commune de la province néerlandaise de la Hollande méridionale avec 118 667 habitants (1 er janvier 2019, source: CBS). Dordrecht fait partie de l`agglomération métropolitaine de Drechtsteden, qui compte environ 280 000 habitants. La ville est située là où le Merwede se divise en deux parties: le nord et l’ancienne Meuse. La municipalité de Dordrecht couvre l’ensemble de l’île de Dordrecht. Les habitants de Dordrecht appellent souvent leur ville à Dordt. Dordrecht possède quatre commissariats de police, deux casernes de pompiers, un hôpital (hôpital Albert Schweitzer) et une prison (la prison de Dordrecht). 1220 droits de la ville. Au Moyen  ge, la ville s`est développée pour devenir une importante ville commerçante et un important entrepôt. Elle était l`une des six villes principales de la Hollande. Plus tard, l`importance de la ville a diminué, mais le centre-ville nous rappelle encore ce riche passé. La plus vieille ville de Hollande est située sur une île, entourée de larges rivières. Un millier de monuments, des ports historiques et une atmosphère agréable déterminent le caractère de cette ville portuaire séculaire: Dordrecht est facilement accessible en voiture et en transports en commun. Le centre-ville historique se trouve à l`intersection de la Oude Maas, de Noord et de Merwede. La nature du Biesbosch domine dans la campagne verdoyante.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Roosendaal',
        "info" => 'Roosendaal est une ville entrepreneuriale où il y a beaucoup à voir, à faire et à vivre. Une ville commerçante par excellence avec pas moins de trois centres commerciaux indoor, renommés dans la région et appréciés de nos voisins du sud. Dans les nombreux bars et restaurants, les beaux magasins et les nombreux événements, vous serez accueillis avec hospitalité, gentillesse et convivialité Roosendaal. Associez votre visite au centre-ville à Rosada Fashion Outlet, au GoStores ou au parc de loisirs De Stok. Roosendaal a le luxe d`une belle zone verte avec de vastes zones de forêts et de bruyères, telles que Wouwse Plantage, Visdonk, Rucphense Bossen et Kalmthoutse Heide. Vous trouverez la convivialité de village dans les villages de Heerle, Moerstraten, Nispen, Wouw et Wouwse Plantage.',
        "taal" => "FR",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Amsterdam',
        "info" => 'Ámsterdam es la capital de los Países Bajos y, con 800.000 habitantes, es el municipio más grande de los Países Bajos. El número de diferentes nacionalidades en esta ciudad es el más alto del mundo. El nombre de Ámsterdam proviene de la presa que se construyó en el siglo XIII y se llama Amstel. Amsterdam es famosa por su cinturón de canales y almacenes. Los almacenes están ubicados en los canales y se utilizaron anteriormente como almacenamiento de mercancías. Amsterdam tiene la mayoría de los almacenes en los Países Bajos porque la ciudad solía ser un gran centro comercial. Los almacenes son a menudo edificios altos, estrechos y profundos y ahora se utilizan principalmente como casas. Lugares de interés conocidos son el Rijksmuseum, la Casa de Ana Frank y el Museo Van Gogh. El Rijksmuseum es el hogar de la pintura más famosa de los Países Bajos: The Night Watch. Más de dos millones de visitantes visitan este museo cada año.',
        "taal" => "SP",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Haarlem',
        "info" => 'Haarlem es la capital de Holanda del Norte y tiene 160.000 habitantes. La ciudad es popular entre los turistas porque el centro histórico de la ciudad consta de una gran cantidad de edificios monumentales, que incluyen muchas iglesias y patios. La ciudad está ubicada al norte de la Región Bulb y en la actualidad la ciudad tiene la reputación de ser la Ciudad de las Flores. Cada año, más o menos 1 millón de personas vienen a ver el desfile de flores que recorre Haarlem. Otro lugar agradable de interés es el Jopenkerk. La cerveza de Jopen se elabora en esta iglesia. Puede obtener visitas guiadas aquí, pedir comida y cerveza en el bar.',
        "taal" => "SP",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Heemstede-Aerdenhout',
        "info" => 'Heemstede y Aerdenhout comparten una estación. El nombre Aerdenhout proviene de `Den Anderen Hout`: Aerdenhout era un `bosque` diferente (un área de bosque diferente) que el Haarlemmerhout. Aerdenhout es conocida por sus villas, que se encuentran en los bosques que rodean el pueblo. El carácter agrícola de Aerdenhout es evidente por el hecho de que en el pasado había incluso una lechería (fábrica de leche) presente para los granjeros locales. Esto se llamaba Melkerij Mariënbosch y estaba ubicado en Boekenroodeweg. Después de la demolición en la década de 1960, surgió un área sin desarrollar que se mantuvo durante mucho tiempo. Más tarde fue construido en una escuela. Heemstede es una ciudad y municipio en la provincia holandesa de Holanda del Norte. El municipio tiene 27,278 habitantes (1 de enero de 2019, fuente: CBS) y tiene un área de 9.61 km2 (de los cuales 0.15 km² de agua). No hay otros núcleos dentro de los límites municipales. El nombre del lugar Hempstead en el estado de Nueva York es posiblemente una forma corrompida de Heemstede: este lugar era un asentamiento colonial cerca de Nueva Ámsterdam en el siglo XVII.',
        "taal" => "SP",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Leiden',
        "info" => 'Leiden, también conocida como la Ciudad Clave, tiene la universidad más antigua de los Países Bajos. Además, la ciudad es conocida por su rica historia y el casco antiguo, con canales y edificios monumentales. Desde 1573 hasta 1574, Leiden fue rodeada por los españoles. 6.000 de los 18.000 habitantes murieron de hambre y de peste. El 3 de octubre los españoles fueron derrotados y fue una gran fiesta en Leiden. Esta fiesta todavía se celebra cada año. El 3 de octubre, el conjunto de Leiden se vuelve del revés con, entre otras cosas, una de las ferias más grandes de los Países Bajos para celebrar el alivio de Leiden. Leiden es una agradable ciudad de estudiantes donde todo está a poca distancia. Una bonita vista es el histórico castillo de Leiden.',
        "taal" => "SP",
      ]);
      DB::table('steden')->insert([
        "stad" => 'La Haya',
        "info" => 'La Haya es el tercer municipio más grande de los Países Bajos. La ciudad tiene aproximadamente medio millón de habitantes. El gobierno holandés y el parlamento se encuentran aquí en el patio. El Binnenhof es el complejo parlamentario más antiguo de Europa que todavía está en uso. No muy lejos del Binnenhof se encuentra el palacio Noordeinde. El palacio de Noordeind es el palacio de trabajo del rey Willem-Alexander. Fuera de la ciudad se encuentra el palacio donde vive la familia real en Haagse Bos. En la ciudad puedes encontrar muchas vistas antiguas y bonitas. El Palacio de la Paz fue construido en 1946 para la Corte Internacional de Justicia. La Corte Internacional de Justicia es el órgano judicial más importante dentro de las Naciones Unidas.',
        "taal" => "SP",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Delft',
        "info" => 'Delft es una ciudad y municipio en el sur de Holanda en los Países Bajos, ubicada en Schie, entre La Haya y Rotterdam. El 1 de enero de 2019, el municipio de Delft tenía 103,217 habitantes. Delft tiene un centro histórico de la ciudad, desarrollado como una ciudad industrial en el siglo XIX y actualmente se está haciendo un nombre por sí mismo, con la presencia de una Universidad Técnica y los institutos de investigación TNO y Deltares, especialmente como una Ciudad del Conocimiento de Delft con el eslogan Creando Historia. Delft es más conocido en la historia de los Países Bajos porque Willem van Oranje se dio cuenta allí desde 1572 y fue asesinado allí en 1584. Los Oranjes han sido tradicionalmente enterrados en Delft. El apodo de Delft es la Ciudad de los Príncipes. El santo patrón de la ciudad es Hipólito de Roma.',
        "taal" => "SP",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Schiedam',
        "info" => 'Schiedam es una ciudad y municipio en la provincia holandesa de Holanda Meridional. El municipio participa en el área metropolitana de Rotterdam La Haya. Schiedam se encuentra entre Rotterdam y Vlaardingen, originalmente en Schie y más tarde en Nieuwe Maas. Al 1 de enero de 2019, el municipio tenía 78,094 habitantes (fuente: CBS). La ciudad es conocida en todo el mundo por su producción de ginebra, el centro histórico de la ciudad con puertos históricos (en otras ciudades holandesas, que se llamarían "canales") y los molinos de viento más altos del mundo.',
        "taal" => "SP",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Rotterdam',
        "info" => 'Rotterdam es una ciudad portuaria situada en el oeste de los Países Bajos, en la provincia de Holanda Meridional. La ciudad está ubicada en el Nieuwe Maas, uno de los ríos en el delta formado por el Rin y el Maas. El puerto de Rotterdam, que durante mucho tiempo es el más grande del mundo, es el más grande e importante de Europa. El área del puerto se extiende sobre una longitud de 40 kilómetros. El nombre de Rotterdam data del siglo XIII y se refiere a una represa en el río Rotte. El centro histórico de la ciudad fue destruido en gran parte en mayo de 1940 por un bombardeo alemán. Rotterdam es conocida por su arquitectura innovadora.',
        "taal" => "SP",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Dordrecht',
        "info" => 'Con 118,667 habitantes (1 de enero de 2019, fuente: CBS), Dordrecht es el quinto municipio en la provincia holandesa de Holanda Meridional. Dordrecht es parte de la aglomeración metropolitana de Drechtsteden, que tiene alrededor de 280,000 habitantes. La ciudad está ubicada donde el Merwede se divide en el Norte y el Viejo Maas. El municipio de Dordrecht cubre toda la isla de Dordrecht. Los residentes de Dordrecht a menudo llaman a su ciudad Dordt. Dordrecht tiene cuatro estaciones de policía, dos estaciones de bomberos, un hospital (Hospital Albert Schweitzer) y una prisión (prisión de Dordrecht). Dordrecht fue mencionado por primera vez en un texto del siglo XII, cuando la ciudad todavía se llamaba Thuredrech y entró en 1220 derechos de la ciudad. En la Edad Media, la ciudad se convirtió en una importante ciudad comercial y almacén, y fue una de las seis principales ciudades de Holanda. Más tarde, la importancia de la ciudad disminuyó, pero el interior de la ciudad aún nos recuerda este rico pasado. La ciudad más antigua de Holanda está situada en una isla, rodeada por amplios ríos. Mil monumentos, puertos históricos de la ciudad y un gran ambiente determinan el carácter de esta antigua ciudad portuaria. Se puede acceder fácilmente a Dordrecht en automóvil y en transporte público. El centro histórico de la ciudad se encuentra en la intersección de Oude Maas, Noord y Merwede. La naturaleza del Biesbosch domina en el campo verde.',
        "taal" => "SP",
      ]);
      DB::table('steden')->insert([
        "stad" => 'Roosendaal',
        "info" => 'Roosendaal es una ciudad empresarial donde hay mucho que ver, hacer y experimentar. Una ciudad comercial por excelencia con no menos de tres centros comerciales cubiertos, reconocidos en la región y amados por nuestros vecinos del sur. En los numerosos bares y restaurantes, las hermosas tiendas y en los numerosos eventos, será recibido con la hospitalidad, cordialidad y cordialidad de Roosendaal. Combine su visita al centro de la ciudad con Rosada Fashion Outlet, GoStores o el parque de ocio De Stok. Roosendaal tiene el lujo de una hermosa área verde con extensas áreas de bosque y vegetación, como Wouwse Plantage, Visdonk, Rucphense Bossen y Kalmthoutse Heide. Encontrará la amistad de la aldea en los pueblos de Heerle, Moerstraten, Nispen, Wouw y Wouwse Plantage.',
        "taal" => "SP",
      ]);
      // DB::table('steden')->insert([
      //   "stad" => '',
      //   "info" => '',
      //   "taal" => "SP",
      // ]);


    }
}
