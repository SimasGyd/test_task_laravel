<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Test;
use App\Services\ResultService;
use Illuminate\View\View;

class TestController extends Controller
{
    public function index(ResultService $resultService): View
    {
        $tests = Test::all();

        return view('front.index', compact('tests', 'resultService'));
    }
}
