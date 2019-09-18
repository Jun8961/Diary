<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $diaries=[
            [
                'title'=>'jun',
                'body'=>'watit ',

            ],
            [
                'title'=>'jun',
                'body'=>'watit ',

            ],
            [
                'title'=>'jun',
                'body'=>'watit ',

            ]
            
            ];

            foreach($diaries as $diary){
                DB::table('diaries')->insert([
                   //DBにデータを追加する
                        'title' => $diary['title'],
                        'body' => $diary['body'],
                        'user_id' => $user->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()

                ]);
                //
            }
    }

}
