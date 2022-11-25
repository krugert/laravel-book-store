<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // use App\Models\Author;
    // use App\Models\Book;
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'abbreviation',
        'first_name',
        'last_name',
		'date_of_birth',
		'date_of_death',
		'area_of_interest',
		'nom_standard',
    ];

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run() {
        $author = Author::factory()->has(Book::factory()->count(5), 'authors')->create();
    }
}
