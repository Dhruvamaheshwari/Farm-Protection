# 🌾 Kisan Seva - Crop Protection & Farming Assistant

**Empowering Farmers, Growing the Nation**

Welcome to **Kisan Seva**, a comprehensive web platform designed to assist farmers with modern agricultural tools. From weather forecasts and market prices to expert advice and wildlife protection, this project aims to make farming smarter, safer, and more profitable.

## 🚀 Features

*   **🌦 Weather Forecast**: Real-time and accurate weather predictions to help farmers plan their activities.
*   **📊 Market Prices (Mandi Rates)**: Live updates on crop prices to ensure farmers get the best value for their produce.
*   **👨‍🌾 Expert Advice**: Access to agricultural experts for tips on crop care, soil health, and pest control.
*   **🌾 Crop Advisory**: Get personalized crop recommendations based on soil type and season (Java-powered).
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
    *   Java (Servlet-based REST API for Crop Advisory)
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
├── crop-advisory.html  # Crop Advisory page (Java integration)
├── java_module/        # Java Crop Advisory module
│   ├── src/            # Java source files
│   └── pom.xml         # Maven configuration
├── backend/
│   ├── crop_advisory.php # PHP wrapper for Java service
│   └── ...
├── script.js           # Main frontend logic
└── style.css           # Custom styles
```

## ⚙️ Installation & Setup

### Quick Start

**For detailed instructions, see [HOW_TO_RUN.md](HOW_TO_RUN.md)**

1.  **Prerequisites**:
    *   Install [XAMPP](https://www.apachefriends.org/) (or any PHP/MySQL local server environment).
    *   Install [Java JDK](https://www.oracle.com/java/technologies/downloads/) (Version 8+)
    *   Install [Maven](https://maven.apache.org/download.cgi)

2.  **Start Services**:
    *   **XAMPP**: Start Apache and MySQL from XAMPP Control Panel
    *   **Java Service**: Open terminal and run:
      ```powershell
      cd java_module
      mvn tomcat7:run
      ```

3.  **Access Application**:
    *   Open browser: `http://localhost/project/index.html`
    *   The Crop Advisory feature requires both PHP and Java services running

4.  **Database Setup**:
    *   The project automatically sets up the database.
    *   Accessing the application or signup page creates the `crop_protection` database and tables.
    *   *Note: Ensure MySQL root user has no password (XAMPP default) or update credentials in `backend/db.php` and `loginsignup/singup.php`.*

## 📖 Usage

1.  **Landing Page**: Start at `index.html` to see an overview.
2.  **Login/Signup**: Click "Log in" or "Get Started" to create an account or sign in.
3.  **Dashboard**: Once logged in (or via `main.html`), access the core features like Weather, Maps, and Wildlife Reporting.
4.  **Report Sighting**: Use the form in the "Animal Sighting" section to submit data about wildlife near your farm.

## 🤝 Contributing

Contributions are welcome! If you have ideas for new features or improvements, feel free to fork the repository and submit a pull request.

---
*Developed for the betterment of the Indian Agricultural Community.*
