<?php

use Illuminate\Database\Seeder;
use App\Salad;
class SaladTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salad = new Salad([
            "title" => "Шеф-салат",
            "description" => "Лучшее дополнение к любому столу из свежих овощей",
            "consist" => "сыр, грибы, чеснок, острый перец, еще длинное наименование",
            "price" => 500,
            "weight" => 100,
            "imagePath" => "./uploads/pizza-1.png"
        ]);
        $salad->save();
        $salad = new Salad([
            "title" => "Цезарь с семгой",
            "description" => "Лучшее дополнение к любому столу из свежих овощей",
            "consist" => "сыр, грибы, чеснок, острый перец, еще длинное наименование",
            "price" => 250,
            "weight" => 100,
            "imagePath" => "./uploads/pizza-2.png"
        ]);
        $salad->save();
        $salad = new Salad([
            "title" => "Сaлат греческий",
            "description" => "Лучшее дополнение к любому столу из свежих овощей",
            "consist" => "сыр, грибы, чеснок, острый перец, еще длинное наименование",
            "price" => 450,
            "weight" => 100,
            "imagePath" => "./uploads/pizza-3.png"
        ]);
        $salad->save();
        $salad = new Salad([
            "title" => "Чука сарада",
            "description" => "Лучшее дополнение к любому столу из свежих овощей",
            "consist" => "сыр, грибы, чеснок, острый перец, еще длинное наименование",
            "price" => 320,
            "weight" => 100,
            "imagePath" => "./uploads/pizza-3.png"
        ]);
        $salad->save();
        $salad = new Salad([
            "title" => "Куриный",
            "description" => "Лучшее дополнение к любому столу из свежих овощей",
            "consist" => "сыр, грибы, чеснок, острый перец, еще длинное наименование",
            "price" => 270,
            "weight" => 100,
            "imagePath" => "./uploads/pizza-3.png"
        ]);
        $salad->save();
    }
}
