@echo off
echo ========================================
echo   Starting Kisan Seva Project
echo ========================================
echo.
echo Step 1: Starting Java Service...
echo.
cd java_module
start "Java Crop Advisory Service" cmd /k "mvn tomcat7:run"
echo.
echo Java service is starting in a new window...
echo Please wait for "Server startup" message.
echo.
echo ========================================
echo   Next Steps:
echo ========================================
echo.
echo 1. Start XAMPP Control Panel
echo 2. Start Apache and MySQL services
echo 3. Open browser: http://localhost/project/index.html
echo.
echo ========================================
echo.
echo Press any key to exit this window...
echo (The Java service will keep running in its own window)
pause >nul

