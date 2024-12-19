# Laravel 11 AdminLTE Boilerplate

[![License](https://img.shields.io/github/license/moinulict/laravel-11-adminlte)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/moinulict/laravel-11-adminlte?style=social)](https://github.com/moinulict/laravel-11-adminlte/stargazers)

A **Laravel 11.31** boilerplate integrated with the **AdminLTE v4.0.0-beta2** free template, providing a solid foundation for building admin dashboards and backend interfaces without relying on Vite or npm for asset management.


## 📦 **Installation**

Follow these steps to set up the Laravel 11 AdminLTE Boilerplate on your local machine:

### 1. **Clone the Repository**

```bash
git clone https://github.com/moinulict/laravel-11-adminlte.git
cd laravel-11-adminlte
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Configure Environment Variables
```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

### 4. Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

### 5. Run Database Migrations
```bash
php artisan migrate
```

### 6. Start the Development Server
```bash
php artisan serve
```

Access the application at http://localhost:8000.