<?php

    /*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres 
    l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin 
    respectivament l'àrea de la forma area().

    Important

    Si, és el mateix exercici que a POO1, però aquí necessitem que ho resolguis aplicant algun dels 
    conceptes del tema POO2. */

    abstract class Shape {
        protected $base;
        protected $altura;
        public function __construct(int $base, int $altura) {
            $this->base = $base;
            $this->altura = $altura;
        }

        public function areaCalculate() {

        }
    }

    class triangle extends Shape {

        public function areaCalculate() {
            return ($this->base * $this->altura) / 2 . "\n";
        }
    }

    class rectangle extends Shape {
        
        public function areaCalculate() {
            return ($this->base * $this->altura) . "\n";
        }
    }

    $triangle1 = new triangle(10, 5);
    echo $triangle1->areaCalculate();
    
    $rectangle1 = new rectangle(10, 5);
    echo $rectangle1->areaCalculate();
?>