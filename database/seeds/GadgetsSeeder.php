<?php

use Illuminate\Database\Seeder;

class GadgetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gadgets')->insert(
        [
            ['producer' => " Nokia (producer) ", 'screen' => "ecran tactil (screen)", 'processor' => "AMD AM4, ядер 6, потоков 12, 3.4 ГГц, TurboBoost 3.9 ГГц(processor)", 'color' => "Reed (color)", 'price' => "5000 (price)" ],
            ['producer' => " Apple (producer) ", 'screen' => "ecran tactil (screen)", 'processor' => "AMD A6 7480, OEM. Код: 1115535; сокет SocketFM2+ (processor)", 'color' => "yellow (color)", 'price' => "5000 (price)" ],
            ['producer' => " Samsung (producer) ", 'screen' => "ecran tactil (screen)", 'processor' => "6-ядерный процессор, 3600 МГц (processor)", 'color' => "Green (color)", 'price' => "5000 (price)" ],
            ['producer' => " Sony (producer) ", 'screen' => "ecran tactil (screen)", 'processor' => " AMD Ryzen 3 3200G (processor)", 'color' => "Blue (color)", 'price' => "5000 (price)" ],
        ]
        );
    }
}
