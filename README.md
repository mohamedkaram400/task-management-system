<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# Simple Task Management App (Laravel)

A basic **Task Management application** built with **Laravel**.  
This project demonstrates core Laravel concepts such as routing, controllers, validation, database queries, and Blade views.

---

## 🎯 Project Goal

Build a simple CRUD-based task manager to practice:
- Laravel MVC structure
- Form validation
- Database operations
- Blade templating
- Basic task workflows

---

## ✨ Features

- List all tasks
- Create a new task
- View task details
- Edit existing tasks
- Delete tasks
- Server-side validation
- Status & priority handling

---

## 🧱 Tech Stack

- Laravel
- PHP
- Blade Templates
- MySQL (or any supported Laravel database)
- Laravel Query Builder (`DB` facade)

---

## 📋 Task Fields

Each task includes:
- Title
- Description (optional)
- Status (`pending`, `in_progress`, `completed`)
- Priority (`low`, `medium`, `high`)
- Date (optional)

---

## 🧠 Implementation Details

- Uses **Laravel controllers** to handle business logic
- Uses **Query Builder** instead of Eloquent for database operations
- Form input is validated using Laravel’s validation system
- Views are rendered using Blade templates
- Success messages are handled using session flash data

---

## 🚀 Setup

```bash
git clone git@github.com:mohamedkaram400/task-management-system.git
cd task-management
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
---

## 👤 Author

### Mohamed Karam
Backend Developer — Laravel & Modern PHP

---

## 📄 License

This project is open-source and licensed under the MIT License.
