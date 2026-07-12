# 📚 SIFRA – Library & Café Management System

A modern, enterprise-style Library and Café Management System built with **Laravel 12**, **Blade**, **Tailwind CSS**, and **Alpine.js**.

---

# Project Overview

SIFRA is a complete management system that integrates:

- 📖 Library Management
- ☕ Café Management
- 👥 Staff Management
- 📊 Reports & Analytics
- ⚙️ System Administration

The goal is to build a production-quality management system with a modern UI and scalable architecture.

---

# Current Development Status

## ✅ Completed

### Core

- Laravel 12 Installed
- Authentication
- Database Connected
- GitHub Repository
- Project Structure

### Library

- Staff Module
- Book Categories
- Authors
- Publishers

### UI Framework

- Professional Sidebar
- Professional Navbar
- Dashboard Layout
- Reusable UI Components
- Responsive Design

---

# Modules Under Development

## Library

- Books
- Members
- Borrowing
- Returns
- Reservations

## Café

- Products
- Categories
- Inventory
- Suppliers
- Purchases
- Point of Sale (POS)
- Sales

## Reports

- Library Reports
- Café Reports
- Financial Reports
- Inventory Reports

## Settings

- Users
- Roles
- Permissions
- Appearance
- Notifications
- Backup

---

# Technologies Used

- Laravel 12
- PHP 8.2+
- Blade
- Tailwind CSS
- Alpine.js
- MySQL / SQLite
- Vite
- Composer
- Git

---

# Clone the Repository

```bash
git clone <YOUR_GITHUB_REPOSITORY_URL>
```

Example

```bash
git clone https://github.com/username/sifra.git
```

---

# Open the Project

```bash
cd sifra
```

---

# Install PHP Dependencies

```bash
composer install
```

---

# Install JavaScript Dependencies

```bash
npm install
```

---

# Copy Environment File

If `.env` does not exist:

```bash
cp .env.example .env
```

Windows (PowerShell):

```powershell
copy .env.example .env
```

---

# Generate Application Key

```bash
php artisan key:generate
```

---

# Configure Database

Open

```
.env
```

Configure database credentials.

Example for SQLite

```
DB_CONNECTION=sql<img width="1366" height="726" alt="dashbord2" src="https://github.com/user-attachments/assets/92418e74-404b-4062-aa8c-8a07e3959c8b" />

```

Example for MySQL

```
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=sifra

DB_USERNAME=root

DB_PASSWORD=
```

---

# Run Database Migrations

```bash
php artisan migrate
```

If demo data is added later:

```bash
php artisan migrate:fresh --seed
```

---

# Start Development Server

Terminal 1

```bash
php artisan serve
```

---

Terminal 2

```bash
npm run dev
```

---

Open

```
http://127.0.0.1:8000
```

---

# Login

Register a new account if none exists.

Or use seeded credentials (when available).

---

# Folder Structure

```
views/
│
├── layouts/
│   ├── app.blade.php
│   ├── guest.blade.php
│   ├── auth.blade.php
│   └── error.blade.php
│
├── components/
│   ├── sidebar.blade.php
│   ├── navbar.blade.php
│   ├── footer.blade.php
│   ├── breadcrumbs.blade.php
│   │
│   └── ui/
│       ├── alert.blade.php
│       ├── badge.blade.php
│       ├── button.blade.php
│       ├── card.blade.php
│       ├── dropdown.blade.php
│       ├── empty-state.blade.php
│       ├── input.blade.php
│       ├── modal.blade.php
│       ├── page-header.blade.php
│       ├── pagination.blade.php
│       ├── search.blade.php
│       ├── select.blade.php
│       ├── stat-card.blade.php
│       ├── table.blade.php
│       ├── tabs.blade.php
│       ├── textarea.blade.php
│       └── timeline.blade.php
│
├── dashboard/
│   └── index.blade.php
│
├── auth/
├── profile/
├── reports/
├── settings/
│
├── library/
├── cafe/
```

---

# Important Components

## Layout

```
resources/views/layouts/app.blade.php
```

Main application layout.

Contains:

- Sidebar
- Navbar
- Footer
- Main Content

---

## Sidebar

```
resources/views/components/sidebar.blade.php
```

Controls navigation.

---

## Navbar

```
resources/views/components/navbar.blade.php
```

Contains

- Search
- Notifications
- User Menu
- Quick Actions

---

## Dashboard

```
resources/views/dashboard/index.blade.php
```

Landing page after login.

---

# UI Components

Located in

```
resources/views/components/ui/
```

Reusable components include

- Button
- Card
- Badge
- Alert
- Modal
- Input
- Select
- Table
- Stat Card
- Page Header
- Empty State

---

# How to Continue Development

Each module should follow this structure:

Example

```
library/

books/

index.blade.php

create.blade.php

edit.blade.php

show.blade.php

partials/

stats.blade.php

toolbar.blade.php

filters.blade.php

table.blade.php

form.blade.php
```

The same pattern should be used for:

- Members
- Borrowing
- Returns
- Products
- Inventory
- Sales

---

# Git Workflow

Before starting work

```bash
git pull origin main
```

Create a new branch

```bash
git checkout -b feature/books
```

After finishing

```bash
git add .

git commit -m "Complete Books Module"

git push origin feature/books
```

Create a Pull Request into `main`.

---

# Coding Standards

- Use Blade Components where possible.
- Use named routes.
- Keep views clean.
- Avoid duplicated code.
- Follow Laravel conventions.
- Build reusable UI.
- Keep responsive design.
- Maintain enterprise-level styling.

---

# Current Goal

Build a production-quality Library & Café Management System suitable for deployment in a real organization.

---

# Contributors

- Mensur Mohammed
- Yishak

---

# License

Intrenship<img width="1366" height="733" alt="dashbord1" src="https://github.com/user-attachments/assets/69ee4541-f32d-4722-a751-eb229c90f86a" />
 Project
Addis Ababa University
Information Science Department
