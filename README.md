
# Zap Shop - E-Commerce Website

**Complete E-commerce website in Laravel 10**

## Features:

### **Front-End:**
- **Responsive Layout**: Optimized for mobile and desktop devices.
- **Shopping Cart, Wishlist, Product Reviews**: Customers can add products to the cart, save them to a wishlist, and leave product reviews.
- **Coupons & Discounts**: Implement coupon codes for discounts.
- **Product Attributes**: Cost price, promotion price, stock, size, and other essential product details.
- **Blog**: Includes categories, tags, content, and web pages.
- **Modules/Extensions**: Shipping, payment, and discount modules.
- **Upload Manager**: Manage banners and images.
- **SEO Support**: Friendly URLs for customers.
- **Newsletter Management**: Integration for newsletter subscriptions.
- **Real-Time Notification**: Contact forms with real-time notification using Laravel Pusher.
- **Related Products**: Recommendations based on user preferences and categories.
- **Product Search**: Advanced search functionality for products.
- **Social Login**: Facebook, Google, and Twitter authentication via Laravel Socialite.
- **Product Share and Follow**: Share products across multiple social media platforms.
- **Payment Integration**: PayPal payment gateway integration.
- **Order Tracking System**: Track orders in real-time.
- **Multi-level Comment System**: A robust system for customer interactions and feedback.

### **Admin:**
- **Admin Roles & Permissions**: Role-based access control for managing users and features.
- **Product Management**: Easily manage products.
- **Media Management**: Manage files and media using Unisharp Laravel File Manager.
- **Banner Management**: Handle website banners.
- **Order Management**: Admin can manage customer orders.
- **Category & Brand Management**: Organize products by categories and brands.
- **Shipping Management**: Manage shipping options and logistics.
- **Review Management**: Admin can manage product reviews.
- **Blog Management**: Admin can create and manage blog posts, categories, and tags.
- **User Management**: Admin can manage customer accounts.
- **Coupon Management**: Create and manage discount coupons.
- **System Configurations**: Email settings, shop information, and maintenance mode configuration.
- **Charts**: Display charts like Line and Pie for data visualization.
- **Generate Order PDFs**: Admin can generate PDF reports for orders.
- **Real-time Messages & Notifications**: Receive and send notifications in real-time.
- **Profile Settings**: Admin can update their profile and preferences.

### **User Dashboard:**
- **Order Management**: Track and manage orders.
- **Review & Comment Management**: Manage product reviews and comments.
- **Profile Settings**: Users can update their personal information and preferences.

---

## Setup Instructions


2. **Install Composer Dependencies:**
  
   composer install


3. **Environment Configuration:**
   - Rename or copy `.env.example` to `.env`.
   - Generate a new application key:
    
     php artisan key:generate
   
5. **Install Node.js Dependencies:**
   
   npm install
   npm run watch
   

6.Storage Link:
   ```bash
   php artisan storage:link
   ```

7. **Remove APP_URL in .env File.**

8. **Serve the Application:**
   ```bash
   php artisan serve
   ```

9. **Accessing Admin Panel:**
   - Visit `localhost:8000` in your browser.
   - For the admin panel: `localhost:8000/admin`
   - Admin login credentials: `admin@gmail.com` / `1111`
   - User login credentials: `user@gmail.com` / `1111`

---

## Project Documentation

### **Overview:**
Zap Shop is a fully-featured eCommerce platform built with Laravel 10. It includes advanced functionalities such as a responsive layout, social media integration, payment processing via PayPal, order tracking, and much more. The platform is designed to provide an intuitive user experience and a powerful admin dashboard.

### **Database Migrations:**
Ensure that you run all the migrations after setting up the project:
```bash
php artisan migrate
```



