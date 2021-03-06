<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function home() {
        Cache::remember('foo', 60, fn() => 'foobar');

        return Cache::get('foo');
    }
}
