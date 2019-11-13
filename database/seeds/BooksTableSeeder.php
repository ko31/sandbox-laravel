<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::insert( "INSERT INTO books (isbn,title,price,publisher,published) VALUES
			('1','報知高校野球',900,'報知新聞社', '2019-01-01'),
			('2','週刊ベースボール',800,'ベースボール・マガジン社', '2019-02-01'),
			('3','ホームラン',1000,'廣済堂出版', '2019-03-01')
		" );
    }
}
