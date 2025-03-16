<?php
class QuoteController {
    public static function getQuotes($conn) {
        $quotes = Quote::getAllQuotes($conn);
        if (empty($quotes)) {
            echo json_encode(['message' => 'No Quotes Found']);
        } else {
            echo json_encode($quotes);
        }
    }

    public static function getQuote($conn, $id) {
        $quote = Quote::getQuoteById($conn, $id);
        if (!$quote) {
            echo json_encode(['message' => 'No Quotes Found']);
        } else {
            echo json_encode($quote);
        }
    }
}