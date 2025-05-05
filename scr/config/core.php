<?php
// Gérer CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Content-Type: application/json');


// Gérer les requêtes OPTIONS (prévols CORS)
if ($_SERVER["REQUEST_METHOD"] === 'OPTIONS') {
  http_response_code(200);
  exit;
}
