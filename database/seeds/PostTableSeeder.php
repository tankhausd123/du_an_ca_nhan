<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'Title'=>'hello word',
            'content'=>'hello everybody yeah',
            'user_id'=> 2
        ]);
    }
}
