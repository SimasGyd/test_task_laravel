<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\View\View;

class QuestionController extends Controller
{
    public function index(int $id): View
    {
        $questions = Question::whereHas('tests', function ($query) use ($id){
            $query->where('test_id', $id);
        })->inRandomOrder('id')->simplePaginate(1);

        return view('front.questions', compact( 'questions', 'id'));
    }
}
