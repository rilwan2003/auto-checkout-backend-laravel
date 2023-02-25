
# Laravel Backend for Auto Checkout Functionality

This Laravel backend is used in conjunction with a React frontend to implement auto checkout functionality for an e-commerce website. The backend is responsible for managing product inventory, processing checkout requests, and sending emails to customers upon successful checkout.

## Installation

1. Clone the repository to your local machine:

git clone https://github.com/rilwan2003/auto-checkout-backend-laravel


2. Navigate to the `laravel-backend` directory:
cd auto-checkout/laravel-backend


3. Install the dependencies:

composer install


4. Copy the `.env.example` file to `.env`:

cp .env.example .env


5. Generate a new application key:

php artisan key:generate


6. Set up your database in the `.env` file:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password


7. Run the migrations to create the necessary database tables:
php artisan migrate

## Usage

To start the backend server, run the following command in the `laravel-backend` directory:

php artisan serve


The server will be available at `http://localhost:8000`. You can now make requests to the server from the React frontend to implement auto checkout functionality.

### API Endpoints

The backend provides the following API endpoints:

- `GET /api/products`: Retrieves a list of all products in the inventory.
- `POST /api/checkout`: Processes a checkout request for a specific product. Expects a JSON payload with the following fields: `name`, `email`, `phone`, `address`, and `productId`.

### Cron Jobs

The backend also includes a cron job that runs every minute to check for expired product reservations. If a reservation has expired, the product's inventory will be updated to reflect the available quantity.

## License

This Laravel backend is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


