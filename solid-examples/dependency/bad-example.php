<?php

class EBookReader {
 
    private $book;
 
    function __construct(PDFBook $book) {
        $this->book = $book;
    }
 
    function read() {
        return $this->book->read();
    }
 
}
 
class PDFBook {
 
    function read() {
        return "reading a pdf book.";
    }
}

class MobiBook {
 
    function read() {
        return "reading a mobi book.";
    }
}

// Example 2