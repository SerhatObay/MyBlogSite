<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0;$i<4;$i++){
            DB::table('post')->insert([
                'title'=>$faker->sentence(6),
                'image_url'=>$faker->imageUrl(800,400,'cats',true,'Faker'),
                'description'=>$faker->paragraph(6),
                'created_at'=>$faker->dateTime('now'),
                'updated_at'=>now()


            ]);
    }
    }
}
