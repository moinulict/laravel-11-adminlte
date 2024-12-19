# Laravel 11 AdminLTE Boilerplate

[![License](https://img.shields.io/github/license/moinulict/laravel-11-adminlte)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/moinulict/laravel-11-adminlte?style=social)](https://github.com/moinulict/laravel-11-adminlte/stargazers)

A **Laravel 11.31** boilerplate integrated with the **AdminLTE 3.2** free template, providing a solid foundation for building admin dashboards and backend interfaces without relying on Vite or npm for asset management.

## 🚀 **Features**

- **Laravel 11.31:** Utilizes the latest Laravel framework version, ensuring access to all recent features and improvements.
- **AdminLTE 3.2 Integration:** Seamlessly integrated with AdminLTE 3.2, a responsive and customizable admin dashboard template based on Bootstrap 4.
- **Authentication Scaffolding:** Integrated with **Laravel Breeze** for quick and secure user authentication setup.
- **Direct Asset Management:** Manages CSS, JavaScript, and image assets directly without using Vite or npm, ensuring straightforward asset handling.
- **Modular Structure:** Organized and scalable codebase, making it easy to maintain and extend.
- **Blade Layouts and Partials:** Utilizes Laravel Blade templating for clean and reusable UI components like navbar, sidebar, and footer.
- **Responsive Design:** Ensures that your admin panel looks great on all devices, from desktops to mobile phones.

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