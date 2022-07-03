@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="align-items-center">
            <div class="border-top my-3"></div>
            <div class="d-flex justify-content-center my-5">
                <h1>Results</h1>
            </div>
            <div class="border-top my-3"></div>
            <div class="d-flex flex-row justify-content-center">
                <h4>Congratulations!</h4>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <h4> {{ $result->name }} your {{ $result->test()->first()->title }} test
                    score {{ $resultService->countValidAnswers($result) }}
                    / {{ $resultService->countPoints($result->test_id) }} </h4>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <span>Check your result summary here :</span>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <a href="{{ route('result.summary', $result->id) }}" id="url">{{ $resultUrl }}</a>
            </div>
        </div>
    </div>

@endsection
