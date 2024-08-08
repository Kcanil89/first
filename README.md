# Basic Blog Application

**Git Repository URL:** [Link to Git Repo](https://github.com/Kcanil89/first)

## Overview

This project is a simple blog application built with Laravel. It demonstrates the implementation of CRUD (Create, Read, Update, Delete) operations on blog posts, along with authentication features as described in the lecture.

## Features

- User Authentication
- Create, Read, Update, and Delete blog posts
- User-friendly UI with Bootstrap integration
- Input validation and error handling
- Responsive design

## Installation

1. Clone the repository:
   *git clone https://github.com/Kcanil89/first* <br>
   *cd first*

## Install the dependencies:

*composer install* <br>
*npm install*

## Copy the .env file and configure the database:

*cp .env.example .env*


## Run the migrations:

*php artisan migrate*

## Start the development server:

*php artisan serve*

# Implementation Details

## Laravel Authentication

Laravel's built-in authentication features were implemented to manage user registration, login, and logout functionalities. This was achieved by using the php artisan make:auth command, which scaffolds all necessary views, routes, and controllers.

# CRUD Operations
## Create Post:

A form was created using Blade templating to accept the post title and content.
The form data is validated and then saved to the database.

## Read Post:

Posts are retrieved from the database and displayed in a list format.
Individual post details can be viewed on a separate page.

## Update Post:

An edit form pre-filled with the existing post data allows users to update the title and content.
The updated data is validated and saved back to the database.

## Delete Post:

Users can delete a post, which removes the record from the database.

## Frontend Design
Bootstrap is integrated to enhance the UI and provide a responsive layout. Key components used include:



# Challenges Faced
## Authentication Setup:

Implementing authentication required careful configuration to ensure all routes were protected and users could only manage their own posts.

## Form Validation:

Properly validating form inputs and displaying error messages was crucial for a good user experience.

## Bootstrap Integration:

Ensuring all elements were responsive and styled correctly with Bootstrap involved tweaking the default classes and layout.

## Error Handling:

Implementing comprehensive error handling to manage scenarios like invalid inputs and database issues.

# Conclusion
This project served as a practical implementation of Laravel's core features, combined with a CRUD application for blog posts. It highlights the simplicity and power of Laravel in building web applications with authentication and basic content management functionalities.

## Author: Anil Khattri
