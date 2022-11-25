<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Author;

class AuthorFactory extends Factory
{
	protected $model = Author::class;
	
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'abbreviation' => $this->faker->text(50),
            'first_name' => $this->faker->text(50),
            'last_name' => $this->faker->text(50),
			'date_of_birth' => $this->faker->date(),
			'date_of_death' => $this->faker->date(),
			'area_of_interest' => $this->faker->text(50),
			'nom_standard' => $this->faker->text(50),
        ];
    }

    /*
    public function definition()
    {
        return [
            'abbreviation' => $this->faker->text(50),
            'first_name' => $this->faker->first_name,
            'last_name' => $this->faker->last_name,
            'date_of_birth' => $this->faker->date_of_birth,
            'date_of_death' => $this->faker->date_of_death,
            'area_of_interest' => $this->faker->area_of_interest,
            'nom_standard' => $this->faker->nom_standard,
        ];
    }
    */

	
	// $author = Author::factory()->create();
	
	// $books = Book::factory()
    //        ->count(20)
    //        ->for($author)
    //        ->create();
}
