@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="align-items-center">
            <div class="border-top my-3"></div>
            <div class="d-flex justify-content-center my-5">
                <h1>Result summary</h1>
            </div>
            <div class="border-top my-3"></div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Name</th>
                <th scope="col">Test</th>
                <th scope="col">Points</th>
                <th scope="col">Max Points</th>
                <th scope="col">Percentage</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{ $result->created_at}}</th>
                <td>{{ $result->name }}</td>
                <td>{{ $result->test()->first()->title }}</td>
                <td>{{ $resultService->countValidAnswers($result) }}</td>
                <td>{{ $resultService->countPoints($result->test_id) }}</td>
                <td>{{ $resultService->percentageScore($result) }} %</td>
            </tr>
            </tbody>
        </table>
        <div class="border-top my-3"></div>
        <div>
            <h1 class="d-flex flex-row justify-content-center">Answers</h1>
        </div>
        <div class="border-top my-3"></div>
        <table class="table table-striped">
            <thead>
            @foreach($orderedQuestions as $question)
                <tr>
                    <th class="col-10">{{ $question->first()->title }}</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <table class="table table-nostriped table-answers">
                        @foreach($question->first()->answers as $answer)
                            <tr>
                                <td class="col-10">{{ $answer->title }}</td>
                                <td class="col-1 js-points" data-id="{{ $answer->points }}">{{ $answer->points }}</td>
                                <td class="col-1 js-correct"
                                    data-id="{{ in_array($answer->id, $answers) ? 1 : 0 }}">{{ in_array($answer->id, $answers) ? 'V' : '' }}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>



@endsection
