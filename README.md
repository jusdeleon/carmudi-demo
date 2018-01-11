# Carmudi "Unit of Measurement" Test

## Installation

### Project dependencies

Install dependencies by running `composer install`.

### Configuring the database

1. Create a database then copy the contents of the file `.env.example` to a file named `.env`. Configure your DB settings there.
3. Run `php artisan migrate` to migrate the database.

### Serving the app

Serve the app by running `php -S localhost:8000 -t public` in the project root.

## Testing

1. Run `composer test` in the project root to run the tests.

## Optional (This will not impact in your result)

 > Consider also electric vehicles. They do not have a combustion chamber, and also consequently no engine displacement. What would you do to support electric vehicles?
 
 Make the `engine_displacement_value` and `engine_displacement_uom` fields nullable.
 
 > As very last evaluation point we have performance. Keep in mind that this is not the main goal of this application, since the users are our own employees, even if it takes 10 minutes to load the page, the business can still be successful.
 
Performance is not a problem with Lumen, since it is a micro-framework designed for fast micro-services and APIs.