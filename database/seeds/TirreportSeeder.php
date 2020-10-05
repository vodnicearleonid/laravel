<?php

use Illuminate\Database\Seeder;

class TirreportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tirreport')->insert(
            [
                ['start'=>"Start program_1", 'stop'=>"<p>1_Stop program.</p>",'driver'=>"<p>Nume sofer 1</p>",'truck'=>"<p>Camion 1</p>", 'pause'=>"<p>Camion 1</p>", 'author'=>'LEO1'],
                ['start'=>"Start program_2", 'stop'=>"<p>2_Stop program.</p>",'driver'=>"<p>Nume sofer 2</p>",'truck'=>"<p>Camion 2</p>", 'pause'=>"<p>Camion 1</p>", 'author'=>'LEO2'],
                ['start'=>"Start program_3", 'stop'=>"<p>3_Stop program.</p>",'driver'=>"<p>Nume sofer 3</p>",'truck'=>"<p>Camion 3</p>", 'pause'=>"<p>Camion 1</p>", 'author'=>'LEO3'],
            ]
        );
    }
}
