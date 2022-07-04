<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ResultService
{
    public function saveResult(Request $request, Model $result): void
    {
        $request->validate([
            'name' => 'required'
        ]);

        $testId = $request->get('testId');
        $result->name = $request->get('name');
        $answerIds = $request->get('answerIds');

        if ($testId) {
            $test = Test::find($testId);
            $result->test()->associate($test);
        }

        $result->save();

        $result->answers()->sync($answerIds);
    }

    public function countValidAnswers(Model $result): int
    {
        return $result->answers->sum('points');
    }

    public function countPoints(int $id): int
    {
        $points = 0;
        $questions = $this->getQuestions($id);

        foreach ($questions as $question) {
            $answers = $question->answers;
            $points += $answers->sum('points');
        }

        return $points;
    }

    private function getQuestions(int $id): Collection
    {
        return Question::whereHas('tests', function ($query) use ($id){
            $query->where('test_id', $id);
        })->get();
    }

    public function percentageScore($result): float
    {
        return  round(($this->countValidAnswers($result) / $this->countPoints($result->test_id) * 100), 2);
    }

    public function getOrderedQuestions($answers): Collection
    {
        $questions = new Collection();

        foreach ($answers as $id) {
            $questions->push(Question::whereHas('answers', function ($query) use ($id){
                $query->where('answer_id', $id);
            })->with('answers')->get());
        }

        return $questions;
    }
}
