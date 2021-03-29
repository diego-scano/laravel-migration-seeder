<?php

use Illuminate\Database\Seeder;
use App\Book;
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
          $book = new Book();
          $book->title = $faker->name();
          $book->author = $faker->name();
          $book->genre = $faker->name();
          $book->cover = 'https://images-na.ssl-images-amazon.com/images/I/41ciF-EWRdL._SX309_BO1,204,203,200_.jpg';
          $book->save();
        }
    }
}
