<?php

use Illuminate\Database\Seeder;
use App\Main;

class MainTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $main = new Main([
            'title' => 'Маргарита',
            'description' => 'Великолепная, пикантная, горячая итальянская пицца с аппетитным французским сыром.',
            'imagePath' => '/storage/asas.jpg',
            'source' => 'choose-pizza'
        ]);
        $main->save();
        $main = new Main([
            'title' => 'Маргарита',
            'description' => 'Великолепная, пикантная, горячая итальянская пицца с аппетитным французским сыром.',
            'imagePath' => '/storage/asas.jpg',
            'source' => 'choose-pizza'
        ]);
        $main->save();
    }
}
