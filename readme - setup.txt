01. Clone repository [repository_url].
02. Open PhpMyAdmin, MySQL Workbench or DBeaver.
03. Run the Create Database Script.sql located in the book-store root.
04. If you haven't already navigate to the book-store directory root.
05. Run 'npm install' from the command line from within the book-store root directory.
07. Setup your Database in Laravel using the .env or config/database.php file. You should only need to change the DB_PASSWORD field.
08. Run the migrations using the command 'php artisan migrate' or seperately by running the commands below:
	php artisan migrate --path=/database/migrations/2022_11_22_154314_create_authors_table.php
	php artisan migrate --path=/database/migrations/2022_11_22_153300_create_books_table.php
09. php artisan db:seed --class=AuthorSeeder
10. php artisan db:seed --class=BookSeeder
11. Then run the following command in the command prompt to auto load dependencies 'composer dump-autoload'.
12. Run the following command in the command prompt 'php artisan tinker'
13. Author::factory()->count(50)->create();
14. Book::factory()->count(20)->create();


Notes:
	I have to admit I really enjoyed this Challenge, as in the past I had quite a few issues when it came to migrations in a previous version of Laravel and rather took the route of creating my own database script that created the db, tables, constraints, etc. seperately, so it was nice getting back into using Laravel migrations using the CLI!


Resources:
	https://www.folkstalk.com/tech/laravel-migration-integer-with-code-examples/
	https://www.tutsmake.com/laravel-9-factory-generate-dummy-data-tutorial/
	https://www.youtube.com/watch?app=desktop&v=W8X2D0VjMAs
	https://laracasts.com/discuss/channels/laravel/seeding-with-foreign-keys
	https://stackoverflow.com/questions/67829812/how-to-seed-a-table-with-a-foreign-key-constraint-laravel