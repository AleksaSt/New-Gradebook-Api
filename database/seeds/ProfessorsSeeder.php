<?php

use Illuminate\Database\Seeder;

class ProfessorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('professors')->insert([
            [
                'name' => 'professor 1'
            ],
            [
                'name' => 'professor 2'
            ],
            [
                'name' => 'professor 3'
            ],
            [
                'name' => 'professor 4'
            ],
            [
                'name' => 'professor 5'
            ]
        ]);
    }
}
