# Basic Blog Application

**Git Repository URL:** [Link to Git Repo](https://github.com/Kcanil89/first/tree/assignment-3)

## Overview

This project is an enhanced version of a basic blog application built with Laravel. It incorporates API for the ReactJs App.

## Features

- User Authentication: Secure registration, login, and logout functionality using Laravel's authentication system.
- CRUD Operations: Full CRUD (Create, Read, Update, Delete) capabilities for blog posts and users.
- Admin Panel: A dedicated admin panel for managing users and blog posts, accessible only by users with the 'admin' role.
- Role-Based Access Control: Users are assigned roles (admin, author, user) that determine their permissions within the application.
- Responsive Design: The UI is built using Bootstrap, ensuring that the application is accessible and looks great on all devices.

## Installation

1. Clone the repository:
   *git clone https://github.com/Kcanil89/first/tree/assignment-3* <br>
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

## Authentication Setup
- A dedicated admin panel allows admins to manage users and blog posts. This panel is protected by a custom AdminMiddleware, ensuring only users with the admin role can access it.
- Admin routes are grouped together in web.php for better organization and security.

## Admin Panel
- Created a dedicated admin panel that allows admins to manage users and blog posts. This panel is protected by a custom AdminMiddleware, ensuring only users with the admin role can access it.
- Admin routes were defined with an Admin prefix and are grouped together in web.php for better organization and security.

## Role-Based Access Control
- Users are assigned roles (admin, author, user) during registration or by an admin. Role-based access control is enforced throughout the application, ensuring that only authorized users can perform specific actions.
- The admin role has full access to manage all aspects of the application, while authors can manage posts, and viewers have limited access.

## Frontend Design
- The application uses Bootstrap for styling and layout. The admin panel is based on the Bootstrap dashboard template, providing a clean and professional interface for managing content.
- Custom forms and layouts were created using Bootstrap components, ensuring a responsive design that works well on both desktop and mobile devices.



# Conclusion
This project demonstrates the implementation of advanced features in a Laravel application, including API authentication via Laravel Sanctum, user authentication, role-based access control, and an admin panel for content management. The use of Bootstrap for frontend design enhances the user experience, making the application both functional and visually appealing.

## Author: Anil Khattri
