<div class="card col-xl-5 col-lg-6 col-mg-7 col-sm-8 mb-4">
    <div class="card-header">
        <h4 class="card-text">{{ $question->title }}</h4>
    </div>
    <div class="card-body">

        @foreach($question->getAnswers() as $answer)
            <div class="form-check mx-3 my-2">
                <input class="form-check-input js-answer-id" data-id="{{ $questions->currentPage() }}" value="{{ $answer->id }}" type="radio" name="answerId" id="answer{{$answer->id}}">
                <label class="form-check-label" for="answer{{$answer->id}}">
                    {{ $answer->title }}
                </label>
            </div>
        @endforeach

    </div>
    <div class="card-footer d-flex flex-row justify-content-center">
        <a href="{{$questions->previousPageUrl() }}" class="card-link js-previous-button">Previous</a>
        <a href="{{ $questions->nextPageUrl() }}" class="card-link js-next-button"> {{ $questions->onLastPage() ? 'Submit' : 'Next' }}</a>
    </div>

    @if($questions->onLastPage())
        <div class="row text-center m-2">
            <label for="name">Enter your name:</label>
            <input type="text" class="form-group" required name="name" id="name" placeholder="Name">
        </div>
    @endif

    <li class="js-answers" hidden></li>
    <input type="hidden" class="js-test-id" name="testId" value="{{ $id }}">

    <div class="row text-center m-2">
        <div>
            <a href="{{$questions->url(1) }}" class="btn btn-warning js-restart-session">Restart test</a>
            <button class="btn btn-primary js-submit-form" disabled>Submit Test</button>
        </div>
    </div>
</div>

