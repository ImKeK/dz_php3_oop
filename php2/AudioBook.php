<?php
class AudioBook extends Book {
    private $duration; // Длительность аудиокниги

    public function __construct($title, $author, $publicationYear, $duration) {
        parent::__construct($title, $author, $publicationYear);
        $this->duration = $duration;
    }

    public function getOnHand() {
        return "Длительность: {$this->duration} минут.";
    }
}

?>
