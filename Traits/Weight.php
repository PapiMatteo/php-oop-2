<?php

trait Weightable {
    private $weight = 0;

    public function setWeight($_weight) {
        if($_weight > 0) {
            $this->weight = $_weight;
        } else {
            throw new Exeption('Il peso deve essere un numero positivo');
        }
    }

    public function getWeight() {
        return $this->weight . 'kg';
    }
}