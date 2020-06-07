<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'id' => 1,
                'tytul' => 'Venom',
                'kategoria' => 'Akcja',
                'rok_produkcji' => '2018-10-01',
                'opis_fabuly' => 'Kiedy Eddie Brock zdobywa moce symbionta, zmuszony jest uwolnić swoje alter-ego "Venoma", by ratować własne życie.',
                'image_dir' => '/img/venom.jpg',
                'category_connection' => '100',
                'slug' => 'venom',
                'cena' => 20.99
            ],
            [
                'id' => 2,
                'tytul' => 'Matrix',
                'kategoria' => 'Akcja',
                'rok_produkcji' => '1999-03-24',
                'opis_fabuly' => 'Haker komputerowy Neo dowiaduje się od tajemniczych rebeliantów, że świat, w którym żyje, jest tylko obrazem przesyłanym do jego mózgu przez roboty.',
                'image_dir' => '/img/matrix.jpg',
                'category_connection' => '100',
                'slug' => 'matrix',
                'cena' => 10
            ],
            [
                'id' => 3,
                'tytul' => 'Mroczny Rycerz',
                'kategoria' => 'Akcja',
                'rok_produkcji' => '2008-07-14',
                'opis_fabuly' => 'Batman, z pomocą porucznika Gordona oraz prokuratora Harveya Denta, występuje przeciwko przerażającemu i nieobliczalnemu Jokerowi, który chce pogrążyć Gotham City w chaosie.',
                'image_dir' => '/img/mrocznyrycerz.jpg',
                'category_connection' => '100',
                'slug' => 'mroczny-rycerz',
                'cena' => 10
            ],
            [
                'id' => 4,
                'tytul' => 'Iron Man',
                'kategoria' => 'Akcja',
                'rok_produkcji' => '2008-04-14',
                'opis_fabuly' => 'Tony Stark buduje supernowoczesną zbroję. Multimiliarder postanawia walczyć ze złem jako Iron Man.',
                'image_dir' => '/img/ironman.jpg',
                'category_connection' => '100',
                'slug' => 'iron-man',
                'cena' => 10
            ],
            [
                'id' => 5,
                'tytul' => 'Deadpool',
                'kategoria' => 'Akcja',
                'rok_produkcji' => '2016-01-21',
                'opis_fabuly' => 'Były żołnierz oddziałów specjalnych zostaje poddany niebezpiecznemu eksperymentowi. Niebawem uwalnia swoje alter ego i rozpoczyna polowanie na człowieka, który niemal zniszczył jego życie.',
                'image_dir' => '/img/deadpool.jpg',
                'category_connection' => '100',
                'slug' => 'deadpool',
                'cena' => 10
            ],
            [
                'id' => 6,
                'tytul' => 'Czarownica 2',
                'kategoria' => 'Fantasy',
                'rok_produkcji' => '2019-10-16',
                'opis_fabuly' => 'Aurora postanawia wyjść za mąż i zamieszkać w zamku przyszłego męża.',
                'image_dir' => '/img/czarownica2.jpg',
                'category_connection' => '101',
                'slug' => 'czarownica2',
                'cena' => 30
            ],
            [
                'id' => 7,
                'tytul' => 'Bruce Wszechmogący',
                'kategoria' => 'Fantasy',
                'rok_produkcji' => '2003-05-14',
                'opis_fabuly' => 'Reporter, który narzekał nadmiernie na Boga, otrzymuje jego moc i przekona się, że nie łatwo jest rządzić światem.',
                'image_dir' => '/img/bruce.jpg',
                'category_connection' => '101',
                'slug' => 'bruce-wszechmogacy',
                'cena' => 30
            ],
            [
                'id' => 8,
                'tytul' => 'Hobbit: Niezwykła podróż',
                'kategoria' => 'Fantasy',
                'rok_produkcji' => '2012-11-28',
                'opis_fabuly' => 'Hobbit Bilbo Baggins wyrusza w niebezpieczną podroż, by wraz z czarodziejem Gandalfem i trzynastoma krasnoludami pokonać smoka Smauga.',
                'image_dir' => '/img/hobbit-np.jpg',
                'category_connection' => '101',
                'slug' => 'hobbit-np',
                'cena' => 30
            ],
            [
                'id' => 9,
                'tytul' => 'Iluzjonista',
                'kategoria' => 'Fantasy',
                'rok_produkcji' => '2006-04-27',
                'opis_fabuly' => 'Wiedeń u progu XX w. Syn rzemieślnika, iluzjonista Eisenheim, wykorzystuje niezwykłe umiejętności, by zdobyć miłość arystokratki, narzeczonej austro-węgierskiego księcia.',
                'image_dir' => '/img/iluzjonista.jpg',
                'category_connection' => '101',
                'slug' => 'iluzjonista',
                'cena' => 25
            ],
            [
                'id' => 10,
                'tytul' => 'Alicja w Krainie Czarów',
                'kategoria' => 'Fantasy',
                'rok_produkcji' => '2012-11-28',
                'opis_fabuly' => 'Hobbit Bilbo Baggins wyrusza w niebezpieczną podroż, by wraz z czarodziejem Gandalfem i trzynastoma krasnoludami pokonać smoka Smauga.',
                'image_dir' => '/img/alicja-wkc.jpg',
                'category_connection' => '101',
                'slug' => 'alicja-wkc',
                'cena' => 25
            ],
            [
                'id' => 11,
                'tytul' => 'Shrek',
                'kategoria' => 'Familijny',
                'rok_produkcji' => '2001-04-22',
                'opis_fabuly' => 'By odzyskać swój dom, brzydki ogr z gadatliwym osłem wyruszają uwolnić piękną księżniczkę.',
                'image_dir' => '/img/shrek.jpg',
                'category_connection' => '102',
                'slug' => 'shrek',
                'cena' => 20
            ],
            [
                'id' => 12,
                'tytul' => 'Król Lew',
                'kategoria' => 'Familijny',
                'rok_produkcji' => '1994-06-15',
                'opis_fabuly' => 'Targany niesłusznymi wyrzutami sumienia po śmierci ojca mały lew Simba skazuje się na wygnanie, rezygnując z przynależnego mu miejsca na czele stada.',
                'image_dir' => '/img/krol-lew.jpg',
                'category_connection' => '102',
                'slug' => 'krol-lew',
                'cena' => 15
            ],
            [
                'id' => 13,
                'tytul' => 'Kevin sam w domu',
                'kategoria' => 'Familijny',
                'rok_produkcji' => '1990-11-10',
                'opis_fabuly' => 'Przez świąteczny pośpiech ośmioletni Kevin zostaje sam w domu na Boże Narodzenie.',
                'image_dir' => '/img/kevin-swd.jpg',
                'category_connection' => '102',
                'slug' => 'kevin-swd',
                'cena' => 20
            ],
            [
                'id' => 14,
                'tytul' => 'Madagaskar',
                'kategoria' => 'Familijny',
                'rok_produkcji' => '2005-05-25',
                'opis_fabuly' => 'Lew, zebra, hipopotam i żyrafa zostają wysłane statkiem z nowojorskiego zoo do Afryki. Pośrodku oceanu ich klatki wypadają za burtę pokładu, w wyniku czego zwierzęta lądują na brzegu egzotycznej wyspy.',
                'image_dir' => '/img/madagaskar.jpg',
                'category_connection' => '102',
                'slug' => 'madagaskar',
                'cena' => 20
            ],
            [
                'id' => 15,
                'tytul' => 'Charlie i fabryka czekolady',
                'kategoria' => 'Familijny',
                'rok_produkcji' => '2005-07-10',
                'opis_fabuly' => 'Ubogi Charlie Bucket znajduje jeden z pięciu złotych biletów, który umożliwia mu zwiedzenie ogromnej fabryki czekolady.',
                'image_dir' => '/img/charlie-ifc.jpg',
                'category_connection' => '102',
                'slug' => 'charlie-ifc',
                'cena' => 20
            ],
            [
                'id' => 16,
                'tytul' => 'Forrest Gump',
                'kategoria' => 'Komedia',
                'rok_produkcji' => '1994-06-23',
                'opis_fabuly' => 'Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.',
                'image_dir' => '/img/forrest-gump.jpg',
                'category_connection' => '103',
                'slug' => 'forrest-gump',
                'cena' => 20
            ],
            [
                'id' => 17,
                'tytul' => 'SeksMisja',
                'kategoria' => 'Komedia',
                'rok_produkcji' => '1984-05-14',
                'opis_fabuly' => 'W roku 2044 zostają odhibernowani dwaj ostatni przedstawiciele płci męskiej, wprowadzając chaos do idealnego świata rządzonego przez Ligę Kobiet.',
                'image_dir' => '/img/seksmisja.jpg',
                'category_connection' => '103',
                'slug' => 'seksmisja',
                'cena' => 20
            ],
            [
                'id' => 18,
                'tytul' => 'Dzień Świra',
                'kategoria' => 'Komedia',
                'rok_produkcji' => '2002-06-07',
                'opis_fabuly' => 'Adaś Miauczyński, 49-letni rozwiedziony polonista, żyje w kręgu swoich natręctw, nie potrafiąc wyrwać się z nudy i rutyny dnia codziennego.',
                'image_dir' => '/img/dzien-swira.jpg',
                'category_connection' => '103',
                'slug' => 'dzien-swira',
                'cena' => 20
            ],
            [
                'id' => 19,
                'tytul' => 'Truman Show',
                'kategoria' => 'Komedia',
                'rok_produkcji' => '1998-06-01',
                'opis_fabuly' => 'Truman Burbank odkrywa, że jest głównym bohaterem reality show nadawanego 24 godziny na dobę.',
                'image_dir' => '/img/truman-show.jpg',
                'category_connection' => '103',
                'slug' => 'truman-show',
                'cena' => 20
            ],
            [
                'id' => 20,
                'tytul' => 'Kiler',
                'kategoria' => 'Komedia',
                'rok_produkcji' => '1997-11-17',
                'opis_fabuly' => 'Jerzy Kiler, warszawski taksówkarz, przypadkowo zostaje wzięty za płatnego zabójcę i umieszczony w areszcie. Wyciąga go stamtąd boss świata przestępczego, który oferuje mu nowe zadanie.',
                'image_dir' => '/img/kiler.jpg',
                'category_connection' => '103',
                'slug' => 'kiler',
                'cena' => 20
            ],
            [
                'id' => 21,
                'tytul' => 'Incepcja',
                'kategoria' => 'Sci-Fi',
                'rok_produkcji' => '2010-07-08',
                'opis_fabuly' => 'Czasy, gdy technologia pozwala na wchodzenie w świat snów. Złodziej Cobb ma za zadanie wszczepić myśl do śpiącego umysłu.',
                'image_dir' => '/img/incepcja.jpg',
                'category_connection' => '104',
                'slug' => 'incepcja',
                'cena' => 20
            ],
            [
                'id' => 22,
                'tytul' => 'Jestem Legendą',
                'kategoria' => 'Sci-Fi',
                'rok_produkcji' => '2007-12-05',
                'opis_fabuly' => 'Tajemniczy wirus wymordował lub zamienił w krwiożercze bestie prawie całą ludzkość. Samotny naukowiec Robert Neville poszukuje szczepionki, by odwrócić mutację.',
                'image_dir' => '/img/jestem-legenda.jpg',
                'category_connection' => '104',
                'slug' => 'jestem-legenda',
                'cena' => 25
            ],
            [
                'id' => 23,
                'tytul' => 'Interstellar',
                'kategoria' => 'Sci-Fi',
                'rok_produkcji' => '2014-10-26',
                'opis_fabuly' => 'Byt ludzkości na Ziemi dobiega końca wskutek zmian klimatycznych. Grupa naukowców odkrywa tunel czasoprzestrzenny, który umożliwia poszukiwanie nowego domu.',
                'image_dir' => '/img/interstellar.jpg',
                'category_connection' => '104',
                'slug' => 'interstellar',
                'cena' => 30
            ],
            [
                'id' => 24,
                'tytul' => 'Powrót do Przyszłości',
                'kategoria' => 'Sci-Fi',
                'rok_produkcji' => '1985-07-03',
                'opis_fabuly' => 'W 1985 roku dr Emmett Brown buduje wehikuł czasu. Jego przyjaciel Marty McFly przenosi się w lata 50. i niechcący przeszkadza w poznaniu się swoim rodzicom.',
                'image_dir' => '/img/powrot-do-przyszlosci.jpg',
                'category_connection' => '104',
                'slug' => 'powrot-do-przyszlosci',
                'cena' => 30
            ],
            [
                'id' => 25,
                'tytul' => 'Marsjanin',
                'kategoria' => 'Sci-Fi',
                'rok_produkcji' => '2015-09-11',
                'opis_fabuly' => 'Po nieudanej ekspedycji Mark zostaje sam na Marsie. Mimo znikomych zapasów oraz zerwanej łączności z dowództwem mężczyzna stara się przetrwać w trudnych warunkach.',
                'image_dir' => '/img/marsjanin.jpg',
                'category_connection' => '104',
                'slug' => 'marsjanin',
                'cena' => 35
            ]

            
        ]);
    }
}
