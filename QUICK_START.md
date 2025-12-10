# 🚀 Quick Start Guide

## Running Your Project Right Now

### Option 1: Use the Batch File (Easiest)

1. **Double-click** `START_PROJECT.bat` in your project folder
2. A new window will open with the Java service starting
3. **Start XAMPP** and click "Start" for Apache and MySQL
4. **Open browser**: `http://localhost/project/index.html`

### Option 2: Manual Start

#### Step 1: Start Java Service

Open PowerShell/Terminal and run:

```powershell
cd C:\Users\HP\Desktop\project\java_module
mvn tomcat7:run
```

**Wait for**: `[INFO] Server startup in [XXXX] milliseconds`

**Keep this window open!**

#### Step 2: Start XAMPP

1. Open **XAMPP Control Panel**
2. Click **"Start"** for **Apache** (should turn green ✅)
3. Click **"Start"** for **MySQL** (should turn green ✅)

#### Step 3: Open Your Application

Open your web browser and go to:

```
http://localhost/project/index.html
```

## ✅ Verify Everything is Running

### Check Java Service:
- Open: `http://localhost:8080/crop-advisory/api?soil=Alluvial&season=Kharif`
- Should see JSON response with recommendation

### Check PHP Application:
- Open: `http://localhost/project/index.html`
- Should see the homepage

### Test Crop Advisory:
- Click "🌾 Crop Advisory" on homepage
- Or go to: `http://localhost/project/crop-advisory.html`
- Fill the form and get recommendations!

## 🛑 To Stop

1. **Stop Java**: Press `Ctrl + C` in the Java service terminal
2. **Stop XAMPP**: Click "Stop" in XAMPP Control Panel

---

**That's it! Your project is running!** 🎉

