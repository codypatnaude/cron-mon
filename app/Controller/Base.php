<?php

namespace Controller;

class Base {

    protected $f3;

    public function __construct(){
        $this->f3 = \Base::instance();
    }

    public function beforeroute(){
        echo "BEFORE ROUTE<br/>";
    }

    public function get(){
        echo "GET<br/>";
    }

    public function afterroute(){
        echo "AFTER ROUTE<br/>";
    }
}