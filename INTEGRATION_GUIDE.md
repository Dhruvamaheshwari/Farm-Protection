# 🔗 Java Module Integration Guide

This guide explains how the Java Crop Advisory module is integrated with your main PHP project.

## 📋 Overview

The Java module has been successfully integrated into your Kisan Seva project. It provides crop recommendations through a REST API that can be accessed from your PHP application.

## 🏗️ Architecture

```
┌─────────────────┐
│  PHP Frontend   │
│ crop-advisory   │
│    .html        │
└────────┬────────┘
         │
         │ HTTP Request
         ▼
┌─────────────────┐
│  PHP Wrapper    │
│ crop_advisory   │
│     .php        │
└────────┬────────┘
         │
         │ cURL Request
         ▼
┌─────────────────┐
│  Java Servlet   │
│ CropAdvisoryAPI │
│   (Port 8080)   │
└─────────────────┘
```

## 📁 Files Created

### 1. **Java Module Files**
- `java_module/src/main/java/com/kisanseva/CropAdvisoryAPIServlet.java`
  - REST API endpoint at `/crop-advisory/api`
  - Returns JSON responses
  - Handles CORS for cross-origin requests

### 2. **PHP Integration Files**
- `backend/crop_advisory.php`
  - PHP wrapper that calls the Java service
  - Handles errors gracefully
  - Falls back if Java service is unavailable

### 3. **Frontend Files**
- `crop-advisory.html`
  - User-friendly interface for crop advisory
  - Connects to PHP wrapper or directly to Java service
  - Responsive design matching your project theme

### 4. **Updated Files**
- `index.html`
  - Added Crop Advisory service card in services section

## 🚀 How to Use

### Step 1: Start the Java Service

The Java service must be running for the integration to work:

```powershell
cd java_module
mvn tomcat7:run
```

The service will start on `http://localhost:8080`

### Step 2: Start Your PHP Server

Start your Apache server (XAMPP, WAMP, etc.) to serve the PHP application.

### Step 3: Access the Crop Advisory

1. **From Homepage**: 
   - Go to `http://localhost/project/index.html`
   - Click on the "🌾 Crop Advisory" service card

2. **Direct Access**:
   - Navigate to `http://localhost/project/crop-advisory.html`

3. **API Endpoint** (for developers):
   - Java API: `http://localhost:8080/crop-advisory/api?soil=Alluvial&season=Kharif`
   - PHP Wrapper: `http://localhost/project/backend/crop_advisory.php?soil=Alluvial&season=Kharif`

## 🔧 How It Works

### Option 1: Through PHP Wrapper (Recommended)

1. User fills form in `crop-advisory.html`
2. JavaScript sends request to `backend/crop_advisory.php`
3. PHP wrapper uses cURL to call Java service
4. Java service processes and returns JSON
5. PHP wrapper returns response to frontend
6. Frontend displays recommendation

**Advantages:**
- Single point of access
- Better error handling
- Can add caching/logging in PHP
- Works even if Java service is on different server

### Option 2: Direct to Java Service

1. User fills form in `crop-advisory.html`
2. JavaScript directly calls Java API
3. Java service returns JSON
4. Frontend displays recommendation

**Advantages:**
- Faster (no PHP middleman)
- Simpler architecture

## 📡 API Endpoints

### Java API Endpoint

**URL:** `http://localhost:8080/crop-advisory/api`

**Method:** GET or POST

**Parameters:**
- `soil` (required): Soil type (Alluvial, Black, Red, Clay)
- `season` (required): Season (Kharif, Rabi, Zaid)

**Example Request:**
```
GET http://localhost:8080/crop-advisory/api?soil=Alluvial&season=Kharif
```

**Success Response:**
```json
{
  "success": true,
  "soil": "Alluvial",
  "season": "Kharif",
  "recommendation": "Rice, Maize, Sugarcane"
}
```

**Error Response:**
```json
{
  "error": "Both soil and season parameters are required"
}
```

### PHP Wrapper Endpoint

**URL:** `http://localhost/project/backend/crop_advisory.php`

**Method:** GET or POST

**Parameters:** Same as Java API

**Response:** Same format as Java API

## 🛠️ Configuration

### Changing Java Service Port

If you need to change the Java service port:

1. **In `pom.xml`** (java_module):
   ```xml
   <configuration>
       <port>8080</port>  <!-- Change this -->
   </configuration>
   ```

2. **In `backend/crop_advisory.php`**:
   ```php
   $javaServiceUrl = "http://localhost:8080/crop-advisory/api";  // Update port
   ```

3. **In `crop-advisory.html`**:
   ```javascript
   response = await fetch(`http://localhost:8080/crop-advisory/api?...`);  // Update port
   ```

## 🐛 Troubleshooting

### Issue: "Unable to connect to crop advisory service"

**Solution:**
1. Ensure Java service is running: `cd java_module && mvn tomcat7:run`
2. Check if port 8080 is available
3. Verify the URL in `backend/crop_advisory.php`

### Issue: CORS Errors

**Solution:**
- The Java API servlet already includes CORS headers
- If issues persist, check browser console for specific errors

### Issue: PHP cURL not working

**Solution:**
1. Ensure cURL extension is enabled in PHP
2. Check `php.ini` for `extension=curl`
3. Restart Apache server

## 📝 Adding to Other Pages

To add crop advisory functionality to other pages:

### Using JavaScript Fetch:

```javascript
async function getCropRecommendation(soil, season) {
    try {
        const response = await fetch(
            `./backend/crop_advisory.php?soil=${encodeURIComponent(soil)}&season=${encodeURIComponent(season)}`
        );
        const data = await response.json();
        
        if (data.success) {
            console.log('Recommendation:', data.recommendation);
            return data.recommendation;
        }
    } catch (error) {
        console.error('Error:', error);
    }
}
```

### Using PHP (Server-side):

```php
<?php
$soil = $_GET['soil'] ?? '';
$season = $_GET['season'] ?? '';

if ($soil && $season) {
    $url = "http://localhost:8080/crop-advisory/api?soil=" . urlencode($soil) . "&season=" . urlencode($season);
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    
    if ($data['success']) {
        echo $data['recommendation'];
    }
}
?>
```

## 🎯 Next Steps

1. **Start Java Service**: Run `mvn tomcat7:run` in `java_module` directory
2. **Test Integration**: Visit `crop-advisory.html` and try getting a recommendation
3. **Customize**: Modify the UI or add more features as needed
4. **Deploy**: When ready, deploy both PHP and Java services to production

## 📚 Additional Resources

- Java Module README: `java_module/README.md`
- Run Instructions: `java_module/RUN_INSTRUCTIONS.md`
- Main Project README: `README.md`

---

**Integration Complete!** 🎉

Your Java module is now fully integrated with your PHP project. Users can access crop advisory recommendations seamlessly through your web application.

