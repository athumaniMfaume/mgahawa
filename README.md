Documentation for Laravel System: Mgahawa (Restaurant System)

Introduction
The Mgahawa system is a Laravel-based application designed for restaurant management. It includes two main sections: Admin and User.

Admin Section: Allows admins to manage food items, chefs, and customer orders.

User Section: Allows users to view available food items, add items to their cart, and place orders.

Table of Contents
1.System Requirements

2.Installation

3.Admin Section

4.User Section

5.Admin Credentials

6.Seed Data

7.Routes

Additional Information

1. System Requirements
Before you start, make sure you have the following installed on your local development environment:

PHP (7.3 or higher)

Composer

MySQL or SQLite (for database)

Laravel (latest version)

2. Installation
Clone the repository:


git clone https://github.com/athumaniMfaume/mgahawa.git
cd mgahawa
Install dependencies:

composer install
Set up your .env file: Copy the .env.example file to .env and configure your database connection.

cp .env.example .env
Generate the application key:

php artisan key:generate
Run the migrations:

php artisan migrate
Seed the database: To add default data, such as the admin credentials, run:
php artisan db:seed

3. Admin Section
Admin Dashboard allows the admin to manage the restaurant system efficiently. The following features are available:

Manage Food Items: Admin can add, update, and delete food items available for users to view and order.

Manage Chefs: Admin can add chefs who will be responsible for preparing the food.

Manage Orders: Admin can view the orders placed by users, mark orders as processed, or delete any orders as necessary.

Admin Routes
GET /admin/dashboard: The main dashboard for the admin.

GET /admin/food: View all food items.

POST /admin/food: Create a new food item.

GET /admin/food/{id}/edit: Edit an existing food item.

PUT /admin/food/{id}: Update the food item.

DELETE /admin/food/{id}: Delete a food item.

GET /admin/chefs: View all chefs.

POST /admin/chef: Add a new chef.

GET /admin/orders: View all orders placed by users.

PUT /admin/order/{id}/status: Update the status of an order.

4. User Section
The User Section is focused on the user experience, allowing users to browse food items, add them to a cart, and place orders.

View Food Items: Users can browse available food items and view their details.

Add to Cart: Users can add food items to their cart.

Place Orders: Once a user is done selecting items, they can place an order.

User Routes
GET /home: The home page where users can view food items.

GET /cart: View the items added to the cart.

POST /cart/add: Add a food item to the cart.

POST /order: Place an order.

5. Admin Credentials
By default, after seeding the database, the system includes the following admin credentials for logging into the admin panel:

Email: admin@gmail.com

Password: 12345678

You can log into the admin dashboard by navigating to /admin/dashboard.

6. Seed Data
After running the migration, you can seed the system with the default data, including the admin account. To do this, simply run:

php artisan db:seed
This command will populate your database with the necessary default values, including the admin credentials.

7. Routes
Below are the routes available for the Admin and User sections:

Admin Routes:
/admin/login – Login page for admin

/admin/dashboard – Admin dashboard page

/admin/food – Manage food items

/admin/chefs – Manage chefs

/admin/orders – Manage orders

User Routes:
/home – View available food items

/cart – View cart

/order – Place order

8. Additional Information
Frontend: The system uses Blade templates for rendering views.

Admin Panel: The admin panel uses basic authentication and authorization, ensuring only the admin user can access the routes.

Notifications: When an order is placed, the system will notify the admin, and the user will get a confirmation message.

Conclusion
This documentation provides an overview of the Mgahawa Laravel restaurant system. It is a simple yet powerful tool for restaurant owners to manage food items, chefs, and orders, while allowing users to browse the menu and place orders.

