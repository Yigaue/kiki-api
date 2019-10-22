<?php

use Illuminate\Database\Seeder;

class CreateStorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('stories')->insert([
            'user_id'=>rand(),
            'country_id'=>rand(),
            'title'=> Str::random(10),
            'content'=> Str::random(300),
            'author'=> Str::random(10),
            'image'=>Str::random(10).'png'
            
            ]);
        }

    }
}
