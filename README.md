# Reservation System with Email Sending

This project is a reservation system that allows users to book rooms and send a confirmation email upon submission.

## Features
- User-friendly reservation form
- Room selection
- Email confirmation sent upon successful booking
- Backend API developed with Laravel
- Frontend developed with Angular

## Technologies Used
- **Frontend:** Angular 19, Tailwind CSS
- **Backend:** Laravel, PostgreSQL
- **Email Sending:** Laravel Mail

## Installation and Setup
### Prerequisites
Ensure you have the following installed:
- Node.js and Bun (for frontend dependencies)
- PHP and Composer (for Laravel backend)
- PostgreSQL (as the database)

### Backend Setup (Laravel)
1. Clone the repository:
   ```sh
   git clone <repository_url>
   cd backend
   ```
2. Install dependencies:
   ```sh
   composer install
   ```
3. Copy the environment file and configure it:
   ```sh
   cp .env.example .env
   ```
   Update the `.env` file with your database and mail configurations.
4. Generate the application key:
   ```sh
   php artisan key:generate
   ```
5. Run migrations:
   ```sh
   php artisan migrate
   ```
6. Start the Laravel server:
   ```sh
   php artisan serve
   ```

### Frontend Setup (Angular)
1. Navigate to the frontend directory:
   ```sh
   cd frontend
   ```
2. Install dependencies:
   ```sh
   bun install
   ```
3. Start the development server:
   ```sh
   bun run dev
   ```

## API Endpoints
- `POST /api/reservations` - Create a new reservation and send a confirmation email.

## Usage
1. Open the frontend application.
2. Fill out the reservation form.
3. Submit the form.
4. A confirmation email will be sent to the specified address.

## License
This project is open-source and available under the [MIT License](LICENSE).
