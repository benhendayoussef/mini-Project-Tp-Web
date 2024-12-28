# mini-Project-Tp-WebWelcome to the Mini Project TP Web

Overview

This project is a simple web application for managing users and items in a pet care service. Before running the site, you need to set up the required database tables. Follow the instructions below to get started.

Prerequisites

Ensure you have the following:

A local server environment (e.g., XAMPP, WAMP, or MAMP).

MySQL database setup.

Database Setup

Step 1: Create the Database

Open your MySQL client (e.g., phpMyAdmin or MySQL Workbench).

Create a new database named shoppets:

CREATE DATABASE shoppets;

Step 2: Create the users Table

Run the following SQL query to create the users table:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Unique identifier for the user
    username VARCHAR(50) NOT NULL UNIQUE, -- Unique username
    name VARCHAR(255) NOT NULL UNIQUE, -- Full name of the user
    password VARCHAR(255) NOT NULL -- Encrypted password
);

Step 3: Create the items Table

Run the following SQL query to create the items table:

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for the item
    name VARCHAR(255) NOT NULL, -- Name of the item
    price DOUBLE NOT NULL -- Price of the item
);

Running the Application

After setting up the database, you can run the site:

Start your local server environment.

Open a browser and navigate to:



http://localhost/mini-Project-Tp-Web/app/views/users/login.php
Feel free to fork this repository and submit pull requests to improve the project.

License

This project is open-source and available under the MIT License.
