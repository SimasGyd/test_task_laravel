<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Result;
use App\Services\ResultService;
use Illuminate\View\View;

class ResultSummaryController extends Controller
{
    public function index(int $id, ResultService $resultService): View
    {
        $result = Result::find($id);
        $answers = $result->answers()->allRelatedIds()->toArray();

        return view('front.summary',
            compact('result' , 'answers', 'resultService'));
    }
}
