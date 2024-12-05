<?php
abstract class Book {
    protected $title;          // Название книги
    protected $author;         // Автор книги
    protected $publicationYear; // Год публикации
    protected $readCount;      // Количество прочтений

    public function __construct($title, $author, $publicationYear) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->readCount = 0;
    }

    // Метод для получения на руки
    abstract public function getOnHand();

    // Метод для увеличения счетчика прочтений
    public function incrementReadCount() {
        $this->readCount++;
    }

    // Метод для получения информации о книге
    public function getInfo() {
        return "Название: {$this->title}, Автор: {$this->author}, Год: {$this->publicationYear}, Прочтений: {$this->readCount}";
    }
}

?>