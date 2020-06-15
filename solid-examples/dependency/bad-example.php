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

$readBook = new EBookReader(new PDFBook);

var_dump($readBook->read());

// Example 2

class LogToFile {

    public function execute($message)
    {
        var_dump('log the message to a file: ' . $message);
    }
}

class UsersController {

    protected $logger;

    public function __construct(LogToFile $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'JohnDoe';

        // log this information
        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToFile);

var_dump($controller->show());