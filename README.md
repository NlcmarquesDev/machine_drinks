# Beverage Machine App

This project is a beverage vending machine simulator built using the MVC (Model-View-Controller) design pattern. The app allows users to select beverages, simulate coin insertion, and receive a confirmation message once the transaction is complete. Additionally, there's an admin panel for viewing orders and beverages dispensed, accessible only through a secure login.

## Table of Contents

- Features
- Images
- Technologies
- Setup
- Usage
- MVC Structure
- License

## Features

#### User Interface:

Select beverages, insert coins, and get a confirmation message.

#### Admin Panel:

View orders and dispensed beverages with login authentication.

#### MVC Pattern:

Separation of concerns with Model, View, and Controller layers.

#### MySQL Integration:

Data persistence for orders and beverages.

## Images

![drink_app](https://github.com/NlcmarquesDev/machine_drinks/assets/111293493/fc136b00-89c8-4e6f-8fbc-2926bd370625)

![dashboard](https://github.com/NlcmarquesDev/machine_drinks/assets/111293493/73acae36-1090-41ab-9ff9-3f2fbf3cb551)
![orders](https://github.com/NlcmarquesDev/machine_drinks/assets/111293493/9d7e2085-b194-46bf-878b-c9fe22b4696f)

## Technologies

- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL
- Framework: None (Plain PHP for MVC implementation)

## Setup

Clone the Repository:

```bash
## Copy code
git clone https://github.com/NlcmarquesDev/machine_drinks.git
cd machine_drinks_app
```

## Set Up the Database:

Create a MySQL database.
Import the database.sql file provided in the repository to set up the required tables.
Configure Database Connection:

#### Edit the config/database.php file with your MySQL database credentials.

```php
# Copy code
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_database_name');
```

Run the Application:

Ensure your web server (Apache, Nginx, etc.) is running and pointing to the project directory.

Access the app via http://localhost/beverage-machine-app.

## Usage

### User Interface

#### Select Beverage:

Choose a beverage from the list.

#### Insert Coins:

Click on the buttons to simulate coin insertion.

#### Get Confirmation:

Once the required amount is inserted, receive a message indicating that the beverage can be retrieved.

### Admin Panel

#### Login:

Navigate to the admin login page (http://localhost/beverage-machine-app/admin).

#### View Orders:

After logging in, view the list of orders and beverages dispensed.

## MVC Structure

#### Model:

Handles database interactions.

#### View:

Displays data to the user and collects user input.

#### Controller:

Manages application logic and user input .

## License

This project is licensed under the MIT License.
