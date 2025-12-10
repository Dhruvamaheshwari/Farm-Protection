<?php
/**
 * PHP Wrapper for Crop Advisory Java Service
 * This file acts as a bridge between the PHP application and the Java servlet
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Configuration - Update this if your Java service runs on a different port
$javaServiceUrl = "http://localhost:8080/crop-advisory/api";

// Get parameters
$soil = $_GET['soil'] ?? $_POST['soil'] ?? '';
$season = $_GET['season'] ?? $_POST['season'] ?? '';

// Validate input
if (empty($soil) || empty($season)) {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "error" => "Both soil and season parameters are required"
    ]);
    exit;
}

// Build the request URL
$url = $javaServiceUrl . "?soil=" . urlencode($soil) . "&season=" . urlencode($season);

// Initialize cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

// Execute request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// Handle errors
if ($curlError) {
    http_response_code(503);
    echo json_encode([
        "success" => false,
        "error" => "Unable to connect to crop advisory service. Please ensure the Java service is running on port 8080.",
        "details" => $curlError
    ]);
    exit;
}

if ($httpCode !== 200) {
    http_response_code($httpCode);
    echo json_encode([
        "success" => false,
        "error" => "Service returned error code: " . $httpCode
    ]);
    exit;
}

// Return the response from Java service
echo $response;
?>

