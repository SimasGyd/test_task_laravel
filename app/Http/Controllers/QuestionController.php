<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Question;


class QuestionController extends Controller
{
    public function index(int $id)
    {
        $questions = Question::whereHas('tests', function ($query) use ($id){
            $query->where('test_id', $id);
        })->simplePaginate(1);

        $shuffledQuestions = $questions->shuffle();

        return view('front.questions', compact('shuffledQuestions', 'questions'));
    }
}
