<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            'red',
            'yellow',
            'white'
        ];

        foreach($colors as $color){
            DB::table('colors')->insert([
                'name' => $color,
            ]);
        }
    }
}
