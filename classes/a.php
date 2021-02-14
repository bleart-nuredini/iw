<?php
    class A {

        public $var = 1;

        function __construct($var) {
            $this->var = $var;
        }

        function foo(){
            echo "A::foo()";
        }
    }

    class B extends A {

        function __construct() {
            $this->var = 69;
        }

        function fooB() {
            echo "ok";
        }
    }

    $b = new B();
    $b->fooB();
    echo $b->var;
?>