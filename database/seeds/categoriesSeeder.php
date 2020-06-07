<?php

use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'category_name' => 'Akcja',
                'video_connection' => '100',
                'slug' => 'akcja'
            ],
            [
                'id' => 2,
                'category_name' => 'Fantasy',
                'video_connection' => '101',
                'slug' => 'fantasy'
            ],
            [
                'id' => 3,
                'category_name' => 'Familijny',
                'video_connection' => '102',
                'slug' => 'familijny'
            ],
            [
                'id' => 4,
                'category_name' => 'Komedia',
                'video_connection' => '103',
                'slug' => 'komedia'
            ],
            [
                'id' => 5,
                'category_name' => 'Sci-Fi',
                'video_connection' => '104',
                'slug' => 'sci-fi'
            ]
        ]);
    }
}
