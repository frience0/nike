🏬 Nike-Inspired E-Commerce Platform

A modern, scalable e-commerce platform inspired by Nike's sleek and minimalist design. Built with Laravel, Vue.js, Inertia.js, and Tailwind CSS, this project delivers a seamless shopping experience with robust features like product browsing, cart management, checkout, and a powerful admin panel for managing store operations.

✨ Features

Dynamic Homepage: Engaging hero banners, product carousels, and featured items.
Shop with Filters: Browse products by categories (e.g., Men, Women, Shoes) with pagination, sorting, and filtering.
Product Details: Rich product pages with related items and "Add to Cart" functionality.
Cart & Checkout: Intuitive cart management and secure checkout process.
User Authentication: Secure login/register functionality using Laravel Breeze with Inertia.
Admin Panel: Comprehensive CRUD operations for products, categories, brands, orders, and users.
Responsive Design: Mobile-first UI powered by Tailwind CSS for a seamless experience across devices.

🚀 Nice-to-Have Features

Image Uploads: Manage product images with Laravel Media Library.
Full-Text Search: Fast search with Laravel Scout (Algolia/Meilisearch).
Payment Integration: Support for PayMongo or Stripe gateways.
SEO Optimized: Structured data and meta tags for better search visibility.

🛠️ Tech Stack

Component
Technology

Backend
Laravel (APIs, routing, logic)

Frontend
Vue.js 3 (components, UI)

Glue
Inertia.js (SPA-like experience)

Styling
Tailwind CSS (minimalist design)

Database
MySQL

📋 Project Structure
Database Models

Products: Product details (name, price, description, etc.).
Categories: Product organization (e.g., Men, Women, Shoes).
Brands: Brand information for products.
Users: Customer and admin accounts.
Orders: Customer order tracking.
Cart Items: Items in a user's cart.
Sliders: Homepage banner content.

Pages
Public Pages

🏠 Home: Hero banners and featured products.
🛍️ Shop: Filterable product listings (Men, Women, Shoes, etc.).
📄 Product Detail: Detailed product view with add-to-cart.
🛒 Cart: Manage cart items.
💳 Checkout: Address and payment form.
🔑 Login/Register: User authentication.
ℹ️ About/Contact: Informational pages.

Admin Pages

📊 Dashboard: Store performance overview.
🛠️ Product/Category/Brand CRUD: Inventory management.
📦 Orders Management: View and update orders.
👥 User Management: Manage customer accounts.

⚙️ Setup Instructions
Prerequisites

PHP >= 8.1
Composer
Node.js >= 16.x
MySQL
Git

Installation

Clone the Repository:
git clone https://github.com/your-username/nike-ecommerce.git
cd nike-ecommerce

Install PHP Dependencies:
composer install

Install JavaScript Dependencies:
npm install

Configure Environment:
cp .env.example .env

Update .env with your database credentials and other settings.

Generate Application Key:
php artisan key:generate

Run Migrations:
php artisan migrate

Build Frontend Assets:
npm run build

Start the Development Server:
php artisan serve

Access the Application:

Public site: http://localhost:8000
Admin panel: http://localhost:8000/admin (requires login)

🎮 Usage

Browse Products: Use the Shop page to filter products by category or sort by price.
Manage Cart: Add items to the cart and proceed to checkout.
Admin Operations: Log in as an admin to manage products, categories, brands, orders, and users.
Responsive Experience: Enjoy a seamless experience on mobile, tablet, or desktop.

🤝 Contributing
We welcome contributions to enhance this project! Follow these steps:

Fork the repository.
Create a feature branch:git checkout -b feature/your-feature

Commit your changes:git commit -m "Add your feature"

Push to the branch:git push origin feature/your-feature

Open a Pull Request.

Please ensure your code follows the project's coding standards and includes relevant tests.

📜 License
This project is licensed under the MIT License.

📬 Contact
For questions or feedback, reach out via GitHub Issues or email at your-email@example.com.

⭐ Star this repository if you find it useful! Let's build an awesome e-commerce platform together! 🚀
