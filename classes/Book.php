<?php

class Book {
    public $title;
    public $author;
    public $genre;
    public $price;
    public $isbn;
    public $editor;
    public $pages;
    public $year;

    public $discount = 0;

    public function __construct($_title, $_author, $_isbn, $_price)
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->isbn = $_isbn;
        $this->price = $_price;

        if($this->author == 'Christopher Paolini') {
            $this->discount = $this->price * 0.9;
        }
    }

    // public function getDiscount() {
    //     if($this->author == 'Christopher Paolini') {
    //         return $this->price * 0.9;
    //     }

    //     return false;
    // }

}