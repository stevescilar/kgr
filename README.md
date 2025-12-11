# Laravel Jetstream Application

A modern Laravel application built with Jetstream, providing a robust foundation for web applications with authentication, team management, API tokens, and reactive components.

## Features

This application includes the following features out of the box:

- **Authentication**: Complete user authentication system with login, registration, password reset, and email verification
- **Team Management**: Create and manage teams with multiple users
- **API Tokens**: Generate and manage personal access tokens for API authentication
- **Two-Factor Authentication**: Enhanced security with 2FA support
- **Profile Management**: Update profile information and manage browser sessions
- **Reactive Components**: Built with Livewire for dynamic, reactive user interfaces
- **Modern UI**: Styled with Tailwind CSS for a clean, responsive design
- **API Support**: RESTful API endpoints with Sanctum authentication

## Requirements

- PHP ^8.2
- Composer
- Node.js & NPM
- Database (MySQL, PostgreSQL, SQLite, or SQL Server)

## Installation

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd <project-directory>
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies:**
   ```bash
   npm install
   ```

4. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Configuration:**
   - Update your `.env` file with database credentials
   - Run migrations:
     ```bash
     php artisan migrate
     ```

6. **Build Assets:**
   ```bash
   npm run build
   ```

## Usage

### Development Server

To start the development server with hot reloading:

```bash
composer run dev
```

This command will start:
- Laravel development server on `http://localhost:8000`
- Queue worker for background jobs
- Vite dev server for asset compilation

### Production Build

For production deployment:

```bash
npm run build
php artisan serve
```

### Available Commands

- `composer run setup`: Complete project setup (install dependencies, generate key, migrate database, build assets)
- `composer run test`: Run the test suite
- `npm run dev`: Start Vite development server
- `npm run build`: Build assets for production

## Testing

Run the test suite using Pest:

```bash
composer run test
```

Or directly:

```bash
php artisan test
```

## Project Structure

```
├── app/                    # Application code
│   ├── Actions/           # Custom actions (Fortify, Jetstream)
│   ├── Http/Controllers/  # HTTP controllers
│   ├── Models/           # Eloquent models
│   └── Providers/        # Service providers
├── database/             # Database migrations and seeders
├── public/               # Public assets
├── resources/            # Views, CSS, JS
│   ├── css/
│   ├── js/
│   └── views/            # Blade templates
├── routes/               # Route definitions
├── storage/              # File storage
├── tests/                # Test files
└── config/               # Configuration files
```

## API Documentation

The application provides RESTful API endpoints. Use Sanctum for API authentication:

- Generate a token in the API section of your dashboard
- Include the token in the `Authorization` header: `Bearer {token}`

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
