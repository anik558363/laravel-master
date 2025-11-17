 Template to Blade Conversion (40%)

The provided Bootstrap template was fully converted into Laravel Blade with a clean, modular structure.

Blade Structure
resources/views/
│
├── layouts/
│   └── app.blade.php
│
├── partials/
│   ├── head.blade.php
│   └── footer.blade.php
│
└── pages/
    ├── home.blade.php
    ├── resume.blade.php
    ├── projects.blade.php
    └── contact.blade.php

Assets

All template assets are placed inside:

public/assets/

Blade features used

@extends

@yield

@section

@include

asset() helper

All unnecessary/commented-out code has been removed as required.

🗄 Database Design to Migration (40%)

Based on the provided ER diagram, all tables and relationships were recreated using Laravel migrations.

Migration Features

Correct table structure

Primary keys

Foreign keys

One-to-many / many-to-many relationships

Unique & nullable constraints

Migrations are located in:

database/migrations/

🛠 How to Run the Project
1️⃣ Clone the Repository
git clone https://github.com/anik558363/laravel-master.git
cd laravel-master

2️⃣ Install Composer Dependencies
composer install

3️⃣ Install NPM Dependencies (Optional)
npm install
npm run build

4️⃣ Create & Configure Environment File
cp .env.example .env


Then set your database credentials.

5️⃣ Run Migrations
php artisan migrate

6️⃣ Start Laravel Server
php artisan serve


Visit your project at:
 http://127.0.0.1:8000

 Project Presentation Video (3–3.5 Minutes)

 Video Link:
file:///home/anik-mondol/Downloads/Personal%20-%20Start%20Bootstrap%20Theme.mp4

(If required, upload to Google Drive/YouTube and make it “publicly viewable”)

Project Folder Structure
project/
│
├── app/
├── bootstrap/
├── config/
│
├── database/
│   └── migrations/
│
├── public/
│   └── assets/
│
├── resources/
│   ├── layouts/
│   ├── partials/
│  
│
├── routes/web.php
└── README.md

❌ Files NOT Included (Per Assignment Rules)

vendor/

node_modules/

.env

.vscode/

Cache/temp files


