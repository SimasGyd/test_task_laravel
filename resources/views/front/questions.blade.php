@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="align-items-center row">

            <form method="POST" id="resultForm"
                  action="{{ route('result.store') }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-row justify-content-center my-5">
                    @foreach($shuffledQuestions as $question)
                        @include('partials._question-card')
                    @endforeach
                </div>
            </form>
        </div>
    </div>

@endsection
