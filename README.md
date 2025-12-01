# 🌾 Kisan Seva - Crop Protection & Farming Assistant

**Empowering Farmers, Growing the Nation**

Welcome to **Kisan Seva**, a comprehensive web platform designed to assist farmers with modern agricultural tools. From weather forecasts and market prices to expert advice and wildlife protection, this project aims to make farming smarter, safer, and more profitable.

## 🚀 Features

*   **🌦 Weather Forecast**: Real-time and accurate weather predictions to help farmers plan their activities.
*   **📊 Market Prices (Mandi Rates)**: Live updates on crop prices to ensure farmers get the best value for their produce.
*   **👨‍🌾 Expert Advice**: Access to agricultural experts for tips on crop care, soil health, and pest control.
*   **🦁 Wildlife Protection**:
    *   **Report Sightings**: A dedicated module for farmers to report wildlife sightings (location, species, count) to track potential threats.
    *   **Protection Strategies**: Information on eco-friendly ways to deter animals and protect crops.
*   **🔐 User Authentication**: Secure Login and Signup functionality for personalized experiences.
*   **📱 Responsive Design**: Optimized for both desktop and mobile devices.

## 🛠️ Technology Stack

*   **Frontend**:
    *   HTML5
    *   Tailwind CSS (via CDN)
    *   JavaScript (Vanilla)
    *   FontAwesome & RemixIcon (for icons)
*   **Backend**:
    *   PHP
*   **Database**:
    *   MySQL

## 📂 Project Structure

```
project/
├── backend/            # Backend logic and database connection
│   ├── db.php          # Database connection & auto-setup
│   └── ...
├── image/              # Project assets and images
├── loginsignup/        # User authentication module
│   ├── index.php       # Login page
│   ├── singup.php      # Signup logic
│   └── ...
├── src/                # Additional source files
├── index.html          # Landing page
├── main.html           # Main dashboard/home page
├── weather.html        # Weather updates page
├── map.html            # Map view
├── leader.html         # Expert advice page
├── contact.html        # Contact form
├── script.js           # Main frontend logic
└── style.css           # Custom styles
```

## ⚙️ Installation & Setup

1.  **Prerequisites**:
    *   Install [XAMPP](https://www.apachefriends.org/) (or any PHP/MySQL local server environment).

2.  **Clone/Download**:
    *   Download the project files and place them in your server's root directory (e.g., `C:\xampp\htdocs\project`).

3.  **Start Server**:
    *   Open XAMPP Control Panel.
    *   Start **Apache** and **MySQL** modules.

4.  **Database Setup**:
    *   The project is designed to **automatically set up the database**.
    *   Simply accessing the application or the signup page will trigger the creation of the `crop_protection` database and necessary tables (`sighting`, `SignUP`).
    *   *Note: Ensure your MySQL root user has no password (default in XAMPP) or update `backend/db.php` and `loginsignup/singup.php` with your credentials.*

5.  **Run the Application**:
    *   Open your browser and navigate to:
        ```
        http://localhost/project/project/index.html
        ```

## 📖 Usage

1.  **Landing Page**: Start at `index.html` to see an overview.
2.  **Login/Signup**: Click "Log in" or "Get Started" to create an account or sign in.
3.  **Dashboard**: Once logged in (or via `main.html`), access the core features like Weather, Maps, and Wildlife Reporting.
4.  **Report Sighting**: Use the form in the "Animal Sighting" section to submit data about wildlife near your farm.

## 🤝 Contributing

Contributions are welcome! If you have ideas for new features or improvements, feel free to fork the repository and submit a pull request.

---
*Developed for the betterment of the Indian Agricultural Community.*
