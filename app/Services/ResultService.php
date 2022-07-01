<?php
declare(strict_types=1);

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ResultService
{
    public function saveResult(Request $request, Model $result): void
    {
        $request->validate([
            'name' => 'required'
        ]);

        $result->name = $request->get('name');
        $answerIds = $request->get('answerIds');

        $result->save();

        $result->answers()->sync($answerIds);

    }
}
