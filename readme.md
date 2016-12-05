# 3dt

## Getting Started
1. Fork & Clone
2. Copy `.env.example` to `.env`, edit necessary variables
3. `composer update`
4. `php artisan key:generate`
5. `php artisan migrate`
6. `php artisan db:seed`
7. `php artisan serve` (starts the app)

## App File Architecture

### **app/Http/routes.php**
* https://laravel.com/docs/5.2/routing
* https://laravel.com/docs/5.2/controllers#restful-resource-controllers

### **app/Http/Controllers**
* https://laravel.com/docs/5.2/controllers

### **app/<ModelName>.php**
* https://laravel.com/docs/5.2/eloquent

### **database/migrations**
* https://laravel.com/docs/5.2/migrations

### **database/seeds**
* https://laravel.com/docs/5.2/seeding

### **resources/assets/sass**
Using Bootstrap, http://getbootstrap.com/

### **resources/views**
Where the html lives, https://laravel.com/docs/5.2/blade

