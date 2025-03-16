<?php
class Author {
    public $id;
    public $author;

    public function __construct($id = null, $author = '') {
        $this->id = $id;
        $this->author = $author;
    }

    // Function to fetch all authors
    public static function getAllAuthors($conn) {
        $stmt = $conn->query("SELECT id, author FROM authors");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Function to fetch an author by ID
    public static function getAuthorById($conn, $id) {
        $stmt = $conn->prepare("SELECT id, author FROM authors WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}