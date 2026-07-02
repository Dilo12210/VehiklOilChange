# Vehikl Oil Change Checker

A Laravel 12 application that checks whether a vehicle is due for an oil change based on the current odometer reading and the date of the previous oil change.

## Setup

Clone the repository:

```bash
git clone https://github.com/Dilo12210/VehiklOilChange.git
cd VehiklOilChange
```

Install dependencies:

```bash
composer install
```

Copy the environment file and generate an application key:

**Windows (PowerShell)**

```powershell
copy .env.example .env
php artisan key:generate
```

**macOS / Linux**

```bash
cp .env.example .env
php artisan key:generate
```

Create the SQLite database file:

**Windows (PowerShell)**

```powershell
New-Item -ItemType File -Path .\database\database.sqlite
```

**macOS / Linux**

```bash
touch database/database.sqlite
```

Update the `.env` file:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

Run the migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

Then open:

```
http://127.0.0.1:8000
```