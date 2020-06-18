<?php

use Illuminate\Database\Seeder;

class GradebooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gradebooks')->insert([
            [
                'name' => 'Gradebook 1'
            ],
            [
                'name' => 'Gradebook 2'
            ],
            [
                'name' => 'Gradebook 3'
            ],
            [
                'name' => 'Gradebook 4'
            ],
            [
                'name' => 'Gradebook 5'
            ]
        ]);
    }
}
