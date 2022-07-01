<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Result;
use App\Services\ResultService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function store(Request $request, ResultService $resultService): RedirectResponse
    {
        $result = new Result();

        $resultService->saveResult($request, $result);

        return redirect()->route('front.index');
    }
}
