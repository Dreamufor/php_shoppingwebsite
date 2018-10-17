<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Models\Category(['name' =>'Maori Gifts', 'description' =>'Traditional maori souvenirs' ]);
        $category -> save();
        $category = new \App\Models\Category(['name' =>'Mugs', 'description' =>'Different kinds of mugs' ]);
        $category -> save();
        $category = new \App\Models\Category(['name' =>'T-Shirts', 'description' =>'T-Shirts made in New Zealand ' ]);
        $category -> save();
        $category = new \App\Models\Category(['name' =>'Home&Living', 'description' =>'Home decorations' ]);
        $category -> save();
    }
}
