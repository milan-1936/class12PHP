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
            echo "This car is a $this->color $this->brand.";
        }
    }
    
    // creating object
    $merogadi = new Car("Tesla", "Pink");
    $merogadi->displayInfo();

    $anubhavKoGadi = new Car("Remote wala", "Yellow");
    $anubhavKoGadi->displayInfo();
    // jatibela object create garxam teti kehra constructor call hunxa

   class EV extends Car{

   }


    $tesla = new EV("Hummer EV", "Black");
    $tesla->displayInfo();

    $nayaev = new EV ("hummer EV", "Black", 10);

    // OOP Features
    // 1. Inheritance   ( bau ko sampati)
    // 2. Abstraction   ( neta ko ghus)
    // 3. Encapsulation ( class ko seciton xuttako)
    // 4. Polymorphism  ( doglapanti)

?>