<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
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
        'isbn',
        'title',
        'publisher_id',
		'price',
		'author_id',
    ];

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $author = Author::factory()->create();
 
        $books = Book::factory()->count(3)->for($author)->create();
    }
}
