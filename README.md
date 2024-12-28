# mini-Project-Tp-Web
Mini Project TP Web - Setup Instructions

Overview

This repository contains a mini project designed for web development practice. To get the application running locally, you must create the necessary database tables and set up the project on your local server.

Prerequisites

Ensure you have a local server environment installed, such as XAMPP or WAMP.

A MySQL database server should be running.

Clone this repository to your local machine.

Database Setup

Before running the project, you need to create the required tables in your MySQL database.

Step 1: Create the shoppets Database

Run the following SQL command to create the database:

CREATE DATABASE shoppets;
USE shoppets;

Step 2: Create the users Table

Run the following SQL command to create the users table:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

Step 3: Create the items Table

Run the following SQL command to create the items table:

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DOUBLE NOT NULL
);

Running the Project

Place the project folder in your local server's web directory (e.g., htdocs for XAMPP).

Open your web browser and navigate to:

http://localhost/mini-Project-Tp-Web/app/views/users/login.php

You should now be able to access the login page and interact with the application.

Notes

Ensure that the database credentials in the project configuration match your local setup.

If you encounter any issues, check the server logs and verify that all necessary PHP extensions are enabled.

Contributing

Feel free to fork this repository and submit pull requests to improve the project.

License

This project is open-source and available under the MIT License.
