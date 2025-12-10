# 🚀 How to Run the Complete Project

This guide will help you run both the PHP application and the Java Crop Advisory module together.

## 📋 Prerequisites

Before starting, ensure you have:

1. **XAMPP** (or WAMP/MAMP) - For PHP and MySQL
   - Download from: https://www.apachefriends.org/
   - Includes Apache (web server) and MySQL (database)

2. **Java Development Kit (JDK)** - Version 8 or higher
   - Verify installation: `java -version` in terminal
   - Download from: https://www.oracle.com/java/technologies/downloads/

3. **Maven** - For building and running the Java module
   - Verify installation: `mvn --version` in terminal
   - Download from: https://maven.apache.org/download.cgi

## 🎯 Quick Start (3 Steps)

### Step 1: Start XAMPP Services

1. **Open XAMPP Control Panel**
2. **Start Apache** - Click "Start" button
   - Status should turn green ✅
3. **Start MySQL** - Click "Start" button
   - Status should turn green ✅

### Step 2: Start Java Service

Open a **new terminal/PowerShell window** and run:

```powershell
cd C:\Users\HP\Desktop\project\java_module
mvn tomcat7:run
```

Wait for the message: `[INFO] Starting service Tomcat` and `Server startup`

**Keep this terminal window open!** The Java service must keep running.

### Step 3: Access Your Application

Open your web browser and go to:

```
http://localhost/project/index.html
```

Or if your project is in a different location:

```
http://localhost/[your-project-folder]/index.html
```

## 📖 Detailed Instructions

### Part 1: Setting Up PHP Application

1. **Locate Your Project**
   - Your project should be in: `C:\Users\HP\Desktop\project`
   - If using XAMPP, you can also move it to: `C:\xampp\htdocs\project`

2. **Start XAMPP**
   - Open XAMPP Control Panel
   - Start **Apache** and **MySQL**
   - Both should show green status

3. **Verify PHP is Working**
   - Open browser: `http://localhost`
   - You should see XAMPP dashboard

### Part 2: Setting Up Java Service

1. **Open Terminal/PowerShell**
   - Press `Win + X` and select "Windows PowerShell" or "Terminal"

2. **Navigate to Java Module**
   ```powershell
   cd C:\Users\HP\Desktop\project\java_module
   ```

3. **Start the Java Service**
   ```powershell
   mvn tomcat7:run
   ```

4. **Wait for Server to Start**
   - You'll see download messages (first time only)
   - Look for: `[INFO] Starting service Tomcat`
   - Then: `[INFO] Server startup in [XXXX] milliseconds`
   - The service runs on: `http://localhost:8080`

5. **Keep Terminal Open**
   - Don't close this terminal window
   - The Java service must keep running

### Part 3: Accessing the Application

#### Main Application (PHP)
```
http://localhost/project/index.html
```

#### Crop Advisory Feature
- **From Homepage**: Click the "🌾 Crop Advisory" service card
- **Direct Access**: `http://localhost/project/crop-advisory.html`

#### Other Pages
- **Dashboard**: `http://localhost/project/main.html`
- **Weather**: `http://localhost/project/weather.html`
- **Login**: `http://localhost/project/loginsignup/index.php`

## 🔧 Troubleshooting

### Issue: "Port 8080 already in use"

**Solution:**
1. Find what's using port 8080:
   ```powershell
   netstat -ano | findstr :8080
   ```
2. Stop that application, or change Java service port in `java_module/pom.xml`

### Issue: "Apache won't start"

**Solutions:**
1. Check if port 80 is in use (common with Skype)
2. Change Apache port in XAMPP settings
3. Run XAMPP as Administrator

### Issue: "Maven command not found"

**Solutions:**
1. Install Maven: https://maven.apache.org/download.cgi
2. Add Maven to PATH environment variable
3. Restart terminal after installation

### Issue: "Java service not responding"

**Solutions:**
1. Check if Java service is running (look at terminal)
2. Verify Java is installed: `java -version`
3. Rebuild the project: `cd java_module && mvn clean package`
4. Check firewall isn't blocking port 8080

### Issue: "Crop Advisory shows connection error"

**Solutions:**
1. Ensure Java service is running (`mvn tomcat7:run`)
2. Check browser console for errors (F12)
3. Verify URL in `backend/crop_advisory.php` matches your setup
4. Try accessing Java API directly: `http://localhost:8080/crop-advisory/api?soil=Alluvial&season=Kharif`

## 🎮 Running in Development Mode

### Option 1: Two Terminal Windows (Recommended)

**Terminal 1 - Java Service:**
```powershell
cd C:\Users\HP\Desktop\project\java_module
mvn tomcat7:run
```

**Terminal 2 - For other commands:**
```powershell
cd C:\Users\HP\Desktop\project
# Use this for git, file operations, etc.
```

### Option 2: Background Process

Run Java service in background (Windows PowerShell):
```powershell
Start-Process powershell -ArgumentList "-NoExit", "-Command", "cd C:\Users\HP\Desktop\project\java_module; mvn tomcat7:run"
```

## 📱 Testing the Integration

1. **Start both services** (XAMPP + Java)
2. **Open**: `http://localhost/project/index.html`
3. **Click**: "🌾 Crop Advisory" service card
4. **Fill form**: Select soil type and season
5. **Click**: "Get Recommendation"
6. **Verify**: You see crop recommendations

## 🛑 Stopping the Services

### Stop Java Service
- In the terminal running `mvn tomcat7:run`, press `Ctrl + C`
- Wait for shutdown message

### Stop XAMPP Services
- Open XAMPP Control Panel
- Click "Stop" for Apache and MySQL

## 📝 Project Structure Summary

```
project/
├── index.html              # Main homepage
├── main.html               # Dashboard
├── crop-advisory.html      # Crop Advisory page (NEW)
├── backend/
│   ├── crop_advisory.php  # PHP wrapper for Java (NEW)
│   └── ...
├── java_module/
│   ├── pom.xml
│   └── src/...            # Java source files
└── ...
```

## 🎯 Quick Reference

| Service | Port | URL | Command to Start |
|---------|------|-----|------------------|
| Apache (PHP) | 80 | http://localhost/project | XAMPP Control Panel |
| MySQL | 3306 | - | XAMPP Control Panel |
| Java Service | 8080 | http://localhost:8080 | `mvn tomcat7:run` |

## ✅ Checklist Before Running

- [ ] XAMPP installed and running
- [ ] Apache started (green in XAMPP)
- [ ] MySQL started (green in XAMPP)
- [ ] Java JDK installed (`java -version` works)
- [ ] Maven installed (`mvn --version` works)
- [ ] Project files in correct location
- [ ] Java service terminal ready

## 🚀 You're Ready!

Once both services are running:
1. ✅ Apache (PHP) - Running
2. ✅ Java Service - Running
3. ✅ Open browser to `http://localhost/project/index.html`

Enjoy your fully integrated Kisan Seva application! 🌾

---

**Need Help?** Check `INTEGRATION_GUIDE.md` for more details on the integration.

