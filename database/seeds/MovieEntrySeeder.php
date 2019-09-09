<?php

use App\MovieFormat;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MovieEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'user_id' => 1,
            'title' => 'Test Title',
            'format' => 1,
            'length' => 120,
            'year' => '2019',
            'rating' => 4,
            'created_at' => Carbon::now()
        ]);
    }
}
