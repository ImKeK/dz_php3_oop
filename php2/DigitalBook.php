<?php
class DigitalBook extends Book {
    private $downloadLink; // Ссылка на скачивание

    public function __construct($title, $author, $publicationYear, $downloadLink) {
        parent::__construct($title, $author, $publicationYear);
        $this->downloadLink = $downloadLink;
    }

    // Реализация метода получения на руки
    public function getOnHand() {
        return "Ссылка на скачивание: {$this->downloadLink}";
    }
}

?>