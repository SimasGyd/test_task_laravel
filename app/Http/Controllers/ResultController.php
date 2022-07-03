<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Result;
use App\Services\ResultService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResultController extends Controller
{
    private ResultService $resultService;

    public function __construct(ResultService $resultService)
    {
        $this->resultService = $resultService;
    }

    public function index(int $id): View
    {
        $result = Result::find($id);

        $resultUrl = url("/result/summary/{$id}");
        $resultService = $this->resultService;

        return view('front.results',
            compact('result', 'resultService', 'resultUrl'));
    }

    public function store(Request $request): RedirectResponse
    {
        $result = new Result();

        $this->resultService->saveResult($request, $result);

        return redirect()->route('result.index', $result->id);
    }
}
