Due to lack of time I wasn't able to test the api calls below, although I'm pretty sure they should work using postman or a similar application! Below are the required urls to run in order to update the entries in the DB.

Create Author / Book
	http://127.0.0.1:8000/api/authors/
	http://127.0.0.1:8000/api/books/


Updating Author / Book
	http://127.0.0.1:8000/api/authors/{id}				// Where id is the author id
	http://127.0.0.1:8000/api/books/{id}				// Where id is the book id


Getting all Authors / Books
	http://127.0.0.1:8000/api/authors/
	http://127.0.0.1:8000/api/books/


Get A Single Author / Book
	http://127.0.0.1:8000/authors/{id}					// Where id is the author id
	http://127.0.0.1:8000/books/{id}					// Where id is the author id


Deleting Author / Book
	http://127.0.0.1:8000/api/authors/{id}				// Where id is the author id
	http://127.0.0.1:8000/api/books/{id}				// Where id is the book id


Resources:
	Laravel 8: Create REST API in Laravel > https://magecomp.com/blog/laravel-8-create-application-programing-interface/amp/
	https://www.section.io/engineering-education/how-to-create-an-api-using-laravel/