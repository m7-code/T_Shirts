# 👕 T-Shirts Store (Laravel)

A modern **T-Shirts showcase & ordering website** built with **Laravel**.  
Users can browse T-shirts, view prices, and order directly via **WhatsApp**.  
Guest users can access the site without login.

---

## 🚀 Features

- Laravel MVC architecture
- Dark modern UI
- Fully responsive (Mobile & Desktop)
- Product listing with image & price
- WhatsApp order integration
- User authentication (Login / Register / Logout)
- Guest browsing supported
- Secure password hashing
- Easy product management

---

## 🧰 Tech Stack

- **Backend:** Laravel
- **Frontend:** Blade + CSS
- **Database:** MySQL
- **Auth:** Laravel Authentication
- **Deployment:** InfinityFree
- **Version Control:** Git & GitHub

---

## 📁 Folder Structure

app/
└── Http/
└── Controllers/
├── AuthController.php
└── PageController.php

resources/
└── views/
├── tshirts.blade.php
└── auth/
├── login.blade.php
└── register.blade.php

public/
└── products/
├── black-shirt.jpeg
├── white-shirt.jpeg
└── red-shirt.jpeg

routes/
└── web.php

database/
└── migrations/
└── create_products_table.php


---

## ⚙️ Installation

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
🛒 Adding Products
Images path only save hota hai database me.

INSERT INTO products (name, price, image, created_at, updated_at)
VALUES ('Black T-Shirt', 1999, 'products/black-shirt.jpeg', NOW(), NOW());
Image location:

public/products/
📲 WhatsApp Ordering
Each product includes a Buy on WhatsApp button with auto-filled message.

🔐 Authentication
Login & Register system

Logout clears session

Guests can browse products

🌍 Deployment (InfinityFree)
Upload all files to htdocs

Create MySQL database from InfinityFree panel

Update .env with live database credentials

Point domain to public folder

Set correct file permissions

📜 License
This project is open-source and licensed under the MIT License.

👨‍💻 Author
Your Name
Laravel Developer
GitHub: https://github.com/your-username

