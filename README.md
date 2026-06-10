# Faculty Consultation System with Tailwind CSS

A modern faculty consultation system built with CodeIgniter 4 and Tailwind CSS.

## Features

- ✅ User Registration and Login
- ✅ Password Hashing and Security
- ✅ Session Management
- ✅ Modern UI with Tailwind CSS
- ✅ Responsive Design
- ✅ Form Validation
- ✅ Dashboard with User Information
- ✅ Beautiful Gradient Backgrounds

## Installation

### 1. Clone or Download
```bash
git clone <repository-url>
cd codeigniter
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies for Tailwind CSS
npm install
```

### 3. Build Tailwind CSS
```bash
# Build for production (minified)
npm run build

# Or for development (with watch mode)
npm run dev
```

### 4. Database Setup
1. Create a MySQL database
2. Copy `env` to `.env` and configure your database settings:
```env
database.default.hostname = localhost
database.default.database = your_database_name
database.default.username = your_username
database.default.password = your_password
database.default.DBDriver = MySQLi
```

3. Run migrations:
```bash
php spark migrate
```

### 5. Start the Development Server
```bash
php spark serve
```

## Usage

### Access the Application
- **Login Page:** `http://localhost:8080/auth/login`
- **Register Page:** `http://localhost:8080/auth/register`
- **Dashboard:** `http://localhost:8080/dashboard` (after login)

### Default Routes
- `/` - Home page
- `/auth/login` - Login page
- `/auth/register` - Registration page
- `/auth/logout` - Logout
- `/dashboard` - User dashboard

## File Structure

```
app/
├── Controllers/
│   └── Auth.php              # Authentication controller
├── Models/
│   └── UserModel.php         # User model with authentication
├── Views/
│   └── auth/
│       ├── login.php         # Login page
│       ├── register.php      # Registration page
│       └── dashboard.php     # User dashboard
└── Database/
    └── Migrations/
        └── CreateUsersTable.php  # Users table migration

public/
└── css/
    ├── app.css              # Tailwind source file
    └── tailwind.css         # Compiled Tailwind CSS

tailwind.config.js           # Tailwind configuration
package.json                 # Node.js dependencies
```

## Features

### Authentication System
- Secure password hashing using PHP's `password_hash()`
- Session-based authentication
- Form validation with error handling
- CSRF protection
- User-friendly error messages

### UI/UX Features
- Modern gradient backgrounds
- Glassmorphism design elements
- Responsive layout
- Smooth animations and transitions
- Font Awesome icons
- Inter font family

### Security Features
- Password validation (minimum 6 characters)
- Email validation
- Username/email uniqueness
- CSRF token protection
- Session management
- Input sanitization

## Customization

### Styling
- Edit `public/css/app.css` to modify Tailwind components
- Update `tailwind.config.js` for theme customization
- Modify view files in `app/Views/auth/` for layout changes

### Functionality
- Extend `UserModel.php` for additional user features
- Modify `Auth.php` controller for custom authentication logic
- Add new routes in `app/Config/Routes.php`

## Development

### Tailwind CSS Development
```bash
# Watch for changes during development
npm run dev

# Build for production
npm run build
```

### CodeIgniter Development
```bash
# Run tests
./vendor/bin/phpunit

# Clear cache
php spark cache:clear

# Check configuration
php spark config:check App
```

## Requirements

- PHP 8.1 or higher
- MySQL 5.7 or higher
- Node.js 14 or higher
- Composer
- XAMPP/WAMP/MAMP (for local development)

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## Support

For support and questions, please refer to the CodeIgniter 4 documentation or create an issue in the repository.
