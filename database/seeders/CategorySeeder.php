<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name'=>'Kraska Emulsiya Travertin']);
        Category::create(['name'=>'Paqir Himikatlar']);
        Category::create(['name'=>'Mel Jidkiy Oboylar']);
        Category::create(['name'=>'Kley Sement Rodben']);
    }
}
