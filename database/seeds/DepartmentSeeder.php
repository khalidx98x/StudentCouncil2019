<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker\Factory::create();
        foreach (range(0, 50) as $index) {
            \App\Department::create([
                'name' => $faker->name,
                'manager_id' =>$faker->numberBetween(1,30),
                'type' => $faker->randomElements(['0','1']),


            ]);
        }
    }
}
