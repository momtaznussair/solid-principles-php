<?php

namespace Classes;

use Classes\Attack;
use Classes\Defense;
use Classes\Keep;

class MatchControl {
    private $attack;
    private $defense;
    private $keep;

    public function __construct() {
        $this->attack = new Attack();
        $this->defense = new Defense();
        $this->keep = new Keep();
    }

    public function start() {
        echo "Match Start";
    }
}