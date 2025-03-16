<?php
header("Content-Type: application/json");
require_once '/Users/juanenriquez/Desktop/Back End Web Development Midterm Project/config.php';
require_once '/Users/juanenriquez/Desktop/Back End Web Development Midterm Project/Controllers/QuoteController.php';
require_once '/Users/juanenriquez/Desktop/Back End Web Development Midterm Project/Controllers/AuthorController.php';
require_once '/Users/juanenriquez/Desktop/Back End Web Development Midterm Project/Controllers/CategoryController.php';

$conn = getDbConnection();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_parts = explode('/', $uri);
$resource = $uri_parts[2];
$id = isset($uri_parts[3]) ? $uri_parts[3] : null;

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if ($resource === 'quotes') {
            $id ? QuoteController::getQuote($conn, $id) : QuoteController::getQuotes($conn);
        } elseif ($resource === 'authors') {
            $id ? AuthorController::getAuthor($conn, $id) : AuthorController::getAuthors($conn);
        } elseif ($resource === 'categories') {
            $id ? CategoryController::getCategory($conn, $id) : CategoryController::getCategories($conn);
        }
        break;
}