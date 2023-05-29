<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use App\Models\ComicArtist;
use App\Models\ComicWriter;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db.comics');
        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            foreach ($comics['artists'] as $index => $artist) {
                $newArtist = new ComicArtist();
                $newArtist->$index = $artist['artist'];
                $newArtist->save();

            }
            foreach ($comics['writers'] as $index => $writer) {
                $newWriter = new ComicWriter();
                $newWriter->$index = $writer['writer'];
                $newWriter->save();

            }
            $newComic->save();
        }
    }
}