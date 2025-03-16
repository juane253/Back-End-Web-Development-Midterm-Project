<?php
class Category {
    public $id;
    public $category;

    public function __construct($id = null, $category = '') {
        $this->id = $id;
        $this->category = $category;
    }

    // Function to fetch all categories
    public static function getAllCategories($conn) {
        $stmt = $conn->query("SELECT id, category FROM categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Function to fetch a category by ID
    public static function getCategoryById($conn, $id) {
        $stmt = $conn->prepare("SELECT id, category FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}