<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

public function run()
    {
        $posts = [];
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++)
        {
            $posts[] = [
                'title'=> $faker->word,
                'url'=> $faker->url,
                'content'=> $faker->paragraphs($nbSentences = 3, $variableNbSentences = true),
                'created_by' => App\User::all()->random()->id,
                ];
            }
            DB::table('posts')->insert($posts);
    }
}    