<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizza = new Pizza([
            "title" => "Неаполитана, 26 СМ",
            "description" => "Манящая, свежая, аппетитная классическая Неаполитана скрасит любой вечер в любой компании.",
            "consist" => "сыр, грибы, чеснок, острый перец, еще длинное наименование",
            "price" => 1345,
            "imagePath" => "./uploads/pizza-1.png"
        ]);
        $pizza->save();
        $pizza = new Pizza([
            "title" => "Веганская, 26 СМ",
            "description" => "Манящая, свежая, аппетитная классическая Неаполитана скрасит любой вечер в любой компании.",
            "consist" => "сыр, грибы, чеснок, острый перец, еще длинное наименование",
            "price" => 2000,
            "imagePath" => "./uploads/pizza-2.png"
        ]);
        $pizza->save();
        $pizza = new Pizza([
            "title" => "Мега пепперони, 26 СМ",
            "description" => "Манящая, свежая, аппетитная классическая Неаполитана скрасит любой вечер в любой компании.",
            "consist" => "сыр, грибы, чеснок, острый перец, еще длинное наименование",
            "price" => 1700,
            "imagePath" => "./uploads/pizza-3.png"
        ]);
        $pizza->save();
    }
}
