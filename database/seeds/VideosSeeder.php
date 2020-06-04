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
                'image_dir' => '/public/img/venom.jpg',
                'cena' => 20.99
            ],
            [
                'id' => 2,
                'tytul' => 'Czarownica 2',
                'kategoria' => 'Fantasy',
                'rok_produkcji' => '2019-10-16',
                'opis_fabuly' => 'Aurora postanawia wyjść za mąż i zamieszkać w zamku przyszłego męża.',
                'image_dir' => '/public/img/czarownica2.jpg',
                'cena' => 30
            ]
        ]);
    }
}
