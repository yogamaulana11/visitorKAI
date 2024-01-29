<?php

namespace App\Http\Controllers;

class Antrian extends Controller
{
    private $counterArray = [];

    public function __construct($iterable = null) {
        if ($iterable) {
            $this->update($iterable);
        }
    }

    public function update($iterable) {
        foreach ($iterable as $item) {
            $this->counterArray[$item] = isset($this->counterArray[$item]) ? $this->counterArray[$item] + 1 : 1;
        }
    }

    public function mostCommon($n = null) {
        arsort($this->counterArray);
        // @dd($this->counterArray);
        $mostCommon = array_slice($this->counterArray, 0, $n);
        // @dd($mostCommon);
        return $this->counterArray;
    }
}
