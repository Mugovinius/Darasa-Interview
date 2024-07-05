<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Customer Support Query Application

This Laravel application allows users to submit customer support queries and handles these queries using the Gemini API to generate appropriate responses.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Environment Variables](#environment-variables)
- [Running the Project Locally](#running-the-project-locally)
- [Usage](#usage)
- [Livewire Components](#livewire-components)
- [License](#license)

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP 8.0 or higher
- Composer
- Node.js and npm (for compiling front-end assets)
- SQLite (for the database)

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/your-repo-name.git
   cd your-repo-name
2. **Install PHP dependencies:
    composer install
3. **Install Node.js dependencies:
    npm install
    npm run dev
4.  **Environment Variables
    Create a .env file:
    cp .env.example .env
 5. Set up your environment variables:
    Open the .env file in a text editor and configure the following variables:
        APP_NAME="Laravel Customer Support"
        APP_ENV=local
        APP_KEY=base64:YOUR_APP_KEY_HERE
        APP_DEBUG=true
        APP_URL=http://localhost
        
        LOG_CHANNEL=stack
        
        DB_CONNECTION=sqlite
        DB_DATABASE=/path/to/your/database/database.sqlite
        
        BROADCAST_DRIVER=log
        CACHE_DRIVER=file
        FILESYSTEM_DRIVER=local
        QUEUE_CONNECTION=sync
        SESSION_DRIVER=file
        SESSION_LIFETIME=120
        
        MEMCACHED_HOST=127.0.0.1
        
        REDIS_HOST=127.0.0.1
        REDIS_PASSWORD=null
        REDIS_PORT=6379
        
        MAIL_MAILER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=null
        MAIL_PASSWORD=null
        MAIL_ENCRYPTION=null
        MAIL_FROM_ADDRESS=null
        MAIL_FROM_NAME="${APP_NAME}"
        
        AWS_ACCESS_KEY_ID=
        AWS_SECRET_ACCESS_KEY=
        AWS_DEFAULT_REGION=us-east-1
        AWS_BUCKET=
        
        PUSHER_APP_ID=
        PUSHER_APP_KEY=
        PUSHER_APP_SECRET=
        PUSHER_APP_CLUSTER=mt1
        
        MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
        MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
        
        GEMINI_API_URL=https://api.gemini.com/v1/endpoint
        GEMINI_API_KEY=your_gemini_api_key
        GEMINI_API_SECRET=your_gemini_api_secret
6. **Running the Project Locally
   ***Generate an application key:
       php artisan key:generate
   ***Run database migrations:
       php artisan migrate
   *** Start the development server:
       php artisan serve

7. **Usage
    Access the Application:
    
    Open your browser and navigate to http://localhost:8000.
    
    Submit a Query:
    
    Fill out the customer support query form and submit it. The application will process the query using the Gemini API and generate an appropriate response.
       The application will be available at http://localhost:8000.


This formatted `README.md` file includes sections with instructions for setting up and running your Laravel project locally, as well as how to configure environment variables and use Livewire components.

