<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'vtuber_id' => 1,
            'title' => '仮タイトル',
            'body' => '仮内容',
            'vtuber_evaluation' => 3,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);    //
    }
}
