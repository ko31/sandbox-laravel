<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO reviews (book_id,name,body) VALUES
			('1','ichiro','Good book!'),
			('1','hideki','Awesome!'),
			('2','daisuke','Cool!')
		");
    }
}
