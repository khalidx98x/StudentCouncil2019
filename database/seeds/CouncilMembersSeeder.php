<?php

use Illuminate\Database\Seeder;

class CouncilMembersSeeder extends Seeder
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
        foreach (range(0, 30) as $index) {
            $image = $faker->image(public_path('images/CouncilMembers'));
            $image = str_replace(public_path(), '', $image);
            \App\CouncilMember::create([
                'name' => $faker->firstName,
                'description' => $faker->text,
                'image' =>$image,


            ]);
        }
    }

}
