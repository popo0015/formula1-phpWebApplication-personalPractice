# F1JOY 🏎️🏁

F1JOY is a web application built with Laravel, focusing on the exciting world of Formula 1. It provides users with a live calendar, detailed information about the Grand Prix (GPs), drivers, and teams. Whether you're a hardcore F1 fan or just looking for race schedules and team info, F1JOY has got you covered.

###### _This page is still in development. It's main purpose is to help me practice using PHP, work with Laravel, understand better CRUD and MVC, and databases and their relationships._

## Features 🚀 _(planned to be implemented)_

- **Live Calendar**: Stay updated with the upcoming F1 events and races. 📅
- **Grand Prix Information**: Explore details on each Grand Prix, including circuits and race dates. 🌍
- **Drivers**: Get to know your favorite F1 drivers, their stats, and more. 👨‍🚀
- **Teams**: Dive into details about F1 teams, their history, and achievements. 🏆
<br>
- **GP Results**: View statistics about each GP.
- **Live Championship Standings**: Follow along the standings for the F1 World Title.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP >= 7.3
- Composer
- Laravel >= 8
- A supported database: MySQL, PostgreSQL, SQLite, etc.
- A web server (XAMPP, Apache, etc.)

### Installation

1. Open the folder you want to save the project to in an IDE - PHPStorm, VSCode, etc. Clone the repository by typing this command in the terminal:
   ```sh
   git clone https://github.com/popo0015/formula1-phpWebApplication-personalPractice.git

2. Navigate into the project directory:
   ```sh
   cd formula1-phpWebApplication-personalPractice

3. Install dependencies:
   ```sh
   composer install

4. Copy the .env.example file to .env and configure your database settings:
   ```sh
   cp .env.example .env

5. Generate an application key (or the direct key generating button on the browser when you open localhost):
   ```sh
   php artisan key:generate

6. Run the migrations (in order to create the needed tables with their specific structures):
   ```sh
   php artisan migrate

7. Run the seeders (in order to fill in the data in the database):
   ```sh
   php artisan db:seed

8. Start the Laravel development server:
   ```sh
   php artisan serve

9. Open http://localhost in your web browser to view the application.
