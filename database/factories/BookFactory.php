<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Author;
use App\Models\Book;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			'isbn' => $this->faker->text(50),
			'title' => $this->faker->text(50),
			'publisher_id' => $this->faker->numberBetween(1, 500),
			'price' => $this->faker->numberBetween(1, 1000),
            'author_id' => Author::all()->random()->id,
        ];
    }
	
	// $book = Book::factory()
	//	->has(Book::factory()->count(10))
    //    ->create();
}
