<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Facades\File;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(database_path('seeders/comics.json'));
        $comics = json_decode($json, true);

        foreach ($comics as $comic) {
            Comic::create($comic);
        }
    
    }
}
