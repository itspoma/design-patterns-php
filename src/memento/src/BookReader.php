<?php
namespace Memento;

class BookReader {
    function __construct($title, $page) {
        $this->setPage($page);
        $this->setTitle($title);
    }

    public function getPage() {
        return $this->page;
    }

    public function setPage($page) {
        $this->page = $page;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
}