<?php

use Illuminate\Database\Seeder;
use App\post;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(post::class, 100) -> create();
    }
}
