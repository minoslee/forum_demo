<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i<100; $i++)
        {
            DB::table('articles')->insert([
                'title' => str_random(10),
                'content' => str_random(50),
                'user_id' => '1',
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now(),
                'status'=>0,
                'zan_cnt'=>0,
                'reply_cnt'=>0,
                //'created_at'=>
            ]);
        }
    }
}
