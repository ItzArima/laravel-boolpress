<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $post = new Post();
            $post->title = $faker->sentence();
            $post->image = $faker->imageUrl(600, 400, 'posts');
            $post->body = $faker->realTextBetween($minNbChars = 160, $maxNbChars = 300, $indexSize = 2);
            $post->save();
        }
    }
}
