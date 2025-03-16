<?php
class AuthorController {
    public static function getAuthors($conn) {
        $authors = Author::getAllAuthors($conn);
        if (empty($authors)) {
            echo json_encode(['message' => 'No Authors Found']);
        } else {
            echo json_encode($authors);
        }
    }

    public static function getAuthor($conn, $id) {
        $author = Author::getAuthorById($conn, $id);
        if (!$author) {
            echo json_encode(['message' => 'author_id Not Found']);
        } else {
            echo json_encode($author);
        }
    }
}