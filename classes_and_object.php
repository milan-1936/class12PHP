<?php
    class Car {
        // Properties (variables)
        public $brand;
        public $color;
    
        // Constructor (optional)
        public function __construct($brand, $color) {
            $this->brand = $brand;
            $this->color = $color;
        }
    
        // Method (function)
        public function displayInfo() {
            return "This car is a $this->color $this->brand.";
        }
    }    
?>