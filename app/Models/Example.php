<?php

namespace App\Models;

class Example {

    protected $collaborator;

    protected $foo;

    public function __construct(Collaborator $collaborator, $foo) {
        
        $this->collaborator = $collaborator;
        $this->foo = $foo;

    }
}