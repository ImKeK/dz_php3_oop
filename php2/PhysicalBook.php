<?php
class PhysicalBook extends Book {
    private $libraryAddress; // Адрес библиотеки

    public function __construct($title, $author, $publicationYear, $libraryAddress) {
        parent::__construct($title, $author, $publicationYear);
        $this->libraryAddress = $libraryAddress;
    }

    // Реализация метода получения на руки
    public function getOnHand() {
        return "Адрес библиотеки: {$this->libraryAddress}";
    }
}

?>