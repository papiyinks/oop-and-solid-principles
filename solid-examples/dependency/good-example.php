<?php

interface EBook {
    public function read();
}
 
class EBookReader {
 
    private $book;
 
    function __construct(EBook $book) {
        $this->book = $book;
    }
 
    function read() {
        return $this->book->read();
    }
 
}
 
class PDFBook implements EBook {
 
    function read() {
        return "reading a pdf book.";
    }
}
 
class MobiBook implements EBook {
 
    function read() {
        return "reading a mobi book.";
    }
}

$readBook = new EBookReader(new MobiBook);

var_dump($readBook->read());

// Example 2

interface Logger {
    public function execute($message);
}

class LogToFile implements Logger {

    public function execute($message)
    {
        var_dump('log the message to a file: ' . $message);
    }
}

class LogToDatabase implements Logger {

    public function execute($message)
    {
        var_dump('log the message to a database: ' . $message);
    }
}

//...

class UsersController {

    protected $logger;

    public function __construct(Logger $logger)
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

$controller = new UsersController(new LogToDatabase);

var_dump($controller->show());