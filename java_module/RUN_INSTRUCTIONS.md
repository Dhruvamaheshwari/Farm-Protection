# 🚀 How to Run the Java Module

This guide explains different ways to run the Crop Advisory web application.

## Method 1: Using Maven Tomcat Plugin (Recommended - Easiest)

This is the simplest way to run the application during development.

### Steps:

1. **Navigate to the java_module directory:**
   ```powershell
   cd java_module
   ```

2. **Run the application:**
   ```powershell
   mvn tomcat7:run
   ```

3. **Access the application:**
   - Open your web browser
   - Go to: `http://localhost:8080`
   - You'll see the Crop Advisory homepage
   - Click "Get Crop Recommendation" or go directly to: `http://localhost:8080/crop-advisory`

4. **Stop the server:**
   - Press `Ctrl + C` in the terminal

---

## Method 2: Deploy WAR File to Apache Tomcat

If you have Apache Tomcat installed on your system:

### Steps:

1. **Copy the WAR file:**
   - Copy `target/crop-advisory.war` to your Tomcat's `webapps` directory
   - Example: `C:\Program Files\Apache Software Foundation\Tomcat 9.0\webapps\`

2. **Start Tomcat:**
   - Run `startup.bat` (Windows) from Tomcat's `bin` directory
   - Or use the Tomcat service if installed

3. **Access the application:**
   - Open: `http://localhost:8080/crop-advisory/`
   - (Note: The context path will be `/crop-advisory` when deployed this way)

4. **Stop Tomcat:**
   - Run `shutdown.bat` from Tomcat's `bin` directory

---

## Method 3: Using Jetty Plugin (Alternative)

If you prefer Jetty over Tomcat:

### Steps:

1. **Add Jetty plugin to pom.xml** (already configured if added)

2. **Run:**
   ```powershell
   mvn jetty:run
   ```

3. **Access:** `http://localhost:8080`

---

## Method 4: Run as Standalone Java Application

If you want to run the original command-line version:

### Steps:

1. **Navigate to java_module:**
   ```powershell
   cd java_module
   ```

2. **Compile:**
   ```powershell
   javac CropAdvisory.java
   ```

3. **Run:**
   ```powershell
   java CropAdvisory
   ```

---

## Quick Start (Recommended)

For the fastest way to test the web application:

```powershell
cd java_module
mvn tomcat7:run
```

Then open `http://localhost:8080` in your browser.

---

## Troubleshooting

### Port 8080 already in use?
- Change the port in `pom.xml` under the tomcat7-maven-plugin configuration
- Or stop the application using port 8080

### Maven not found?
- Make sure Maven is installed and added to your PATH
- Verify with: `mvn --version`

### Java version issues?
- Ensure Java 8 or higher is installed
- Check with: `java -version`

---

## Application URLs

- **Homepage:** `http://localhost:8080/`
- **Crop Advisory Form:** `http://localhost:8080/crop-advisory`
- **Direct Query:** `http://localhost:8080/crop-advisory?soil=Alluvial&season=Kharif`

