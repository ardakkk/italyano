<?php

use Illuminate\Database\Seeder;
use App\Bvg;
class BvgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bvg = new Bvg([
            "title" => "Coca-Cola",
            "price" => 170,
            "weight" => 1.5,
            "imagePath" => "./uploads/pizza-1.png"
        ]);
        $bvg->save();
        $bvg = new Bvg([
            "title" => "Cok Rich",
            "price" => 170,
            "weight" => 1.5,
            "imagePath" => "./uploads/pizza-1.png"
        ]);
        $bvg->save();
        $bvg = new Bvg([
            "title" => "Bon Aqua",
            "price" => 170,
            "weight" => 1.5,
            "imagePath" => "./uploads/pizza-1.png"
        ]);
        $bvg->save();
        $bvg = new Bvg([
            "title" => "Sprite",
            "price" => 170,
            "weight" => 1.5,
            "imagePath" => "./uploads/pizza-1.png"
        ]);
        $bvg->save();
        $bvg = new Bvg([
            "title" => "Schweppes",
            "price" => 170,
            "weight" => 1.5,
            "imagePath" => "./uploads/pizza-1.png"
        ]);
        $bvg->save();
        $bvg = new Bvg([
            "title" => "Fanta",
            "price" => 170,
            "weight" => 1.5,
            "imagePath" => "./uploads/pizza-1.png"
        ]);
        $bvg->save();
    }
}
