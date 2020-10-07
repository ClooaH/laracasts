<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;

class PagesController extends Controller
{
    public function home(Example $example) {
        ddd($example);
    }
}
