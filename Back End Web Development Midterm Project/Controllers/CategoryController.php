<?php
class CategoryController {
    public static function getCategories($conn) {
        $categories = Category::getAllCategories($conn);
        if (empty($categories)) {
            echo json_encode(['message' => 'No Categories Found']);
        } else {
            echo json_encode($categories);
        }
    }

    public static function getCategory($conn, $id) {
        $category = Category::getCategoryById($conn, $id);
        if (!$category) {
            echo json_encode(['message' => 'category_id Not Found']);
        } else {
            echo json_encode($category);
        }
    }
}