# CarDealership Project

## IMPORTANT:

This project has major security vulnerabilities that are temporarily disabled to launch the MVP application. To run this project, you must install an extension to disable CORS.

This is a MOCK ReadME file that was generated using ChatGPT, it is not meant to serve as accurate instructions for configuring the project.

This project is a Laravel and Vue.js application for managing car dealership data.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- **Web Server**: You'll need a web server (e.g., Apache, Nginx) to serve your Laravel application.
- **PHP**: Make sure you have PHP installed (Laravel 8.x requires PHP 7.3+).
- **Composer**: You should have [Composer](https://getcomposer.org/) installed.
- **Database**: Set up a PostgreSQL database and update your `.env` file with the appropriate database credentials.

## Installation

## 1. Clone the repository:

```bash
git clone https://github.com/your-username/CarDealership.git
```
Navigate to the project directory:
```bash
cd CarDealership
```
## 2.Install PHP dependencies using Composer:

```bash
composer install
```
## 3.
Copy the .env.example file to .env and configure your environment variables, including the PostgreSQL database settings:

```bash
cp .env.example .env
```
## 4. Generate an application key:


```bash
php artisan key:generate
```
## 5. Run database migrations:
```bash
php artisan migrate
```
(Optional) Seed the database with initial data:
```bash
php artisan db:seed
```
## 6. Install JavaScript dependencies using NPM:
```bash
npm install
```
## 7. Build assets:

```bash
npm run production
```
Serve your application:
```bash
php artisan serve
```
Your CarDealership application should now be running at http://localhost:8000.

## Usage


Testing
To run tests, use the following command:

```bash
php artisan test
```