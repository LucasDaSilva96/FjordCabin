# FjordCabin🛖

![Home Page](/public/FjordCabin.jpg 'Preview Of The Home Page')

## Overview

FjordCabin is a web-based application for booking cottages. It provides a user-friendly interface for guests to book cottages and for administrators to manage bookings.

## Features

- **User Authentication**: Secure login and registration for guests.
- **Cottage Listings**: Browse and view details of available cottages.
- **Booking System**: Book cottages with specified start and end dates.
- **Dashboard**: Admin dashboard to manage bookings and view statistics.
- **Responsive Design**: Optimized for both desktop and mobile devices.

## Installation

1. **Clone the repository**:

    ```bash
    git clone https://github.com/yourusername/FjordCabin.git
    cd FjordCabin
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install
    ```

3. **Set up environment variables**:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure the database**:
   Update the `.env` file with your database credentials.

5. **Run migrations**:

    ```bash
    php artisan migrate
    ```

6. **Seed the database** (optional):

    ```bash
    php artisan db:seed
    ```

7. **Build assets**:

    ```bash
    npm run dev
    ```

8. **Start the development server**:
    ```bash
    php artisan serve
    ```

## Usage

- **Guest**:

    - Register or log in to your account.
    - Browse available cottages and view details.
    - Book a cottage by selecting start and end dates.
    - View your booking history.

- **Admin**:
    - Log in to the admin dashboard.
    - View total, pending, confirmed, cancelled, and completed bookings.
    - Manage bookings and update their status.

## Technologies Used

- **Backend**: Laravel
- **Frontend**: Blade, Tailwind CSS
- **Database**: MySQL
- **Authentication**: Laravel Breeze

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request
