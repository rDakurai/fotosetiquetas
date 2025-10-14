<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $tags = ['Naturaleza', 'Arquitectura', 'Retrato', 'Urbano', 'Animales'];
        foreach ($tags as $name) {
            Tag::firstOrcreate(['name' => $name]);
        }
    }
}