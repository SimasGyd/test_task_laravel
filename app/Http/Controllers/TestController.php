<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();

        return view('front.index', compact('tests'));
    }
}
