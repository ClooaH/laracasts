<?php

namespace App\Models;

class Example {

    public function __construct($apiKey) {

        $this->apiKey = $apiKey;

    }

    public function handle() {
        
        die('it works');

    }
}