<?php
class Quote {
    public $id;
    public $quote;
    public $author_id;
    public $category_id;

    public function __construct($id = null, $quote = '', $author_id = 0, $category_id = 0) {
        $this->id = $id;
        $this->quote = $quote;
        $this->author_id = $author_id;
        $this->category_id = $category_id;
    }

    // Function to fetch all quotes
    public static function getAllQuotes($conn) {
        $stmt = $conn->query("SELECT q.id, q.quote, a.author, c.category FROM quotes q
                              JOIN authors a ON q.author_id = a.id
                              JOIN categories c ON q.category_id = c.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Function to fetch a quote by ID
    public static function getQuoteById($conn, $id) {
        $stmt = $conn->prepare("SELECT q.id, q.quote, a.author, c.category FROM quotes q
                               JOIN authors a ON q.author_id = a.id
                               JOIN categories c ON q.category_id = c.id WHERE q.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}