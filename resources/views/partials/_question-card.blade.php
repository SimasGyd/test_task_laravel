<div class="card col-xl-5 col-lg-6 col-mg-7 col-sm-8 mb-4">
    <div class="card-header">
        <h4 class="card-text">{{ $question->title }}</h4>
    </div>
    <div class="card-body">
        @foreach($question->getAnswers() as $answer)
            <div class="form-check mx-3 my-2">
                <input class="form-check-input" value="{{ $answer->id }}" type="radio" name="answerIds[]" id="answer{{$answer->id}}">
                <label class="form-check-label" for="answer{{$answer->id}}">
                    {{ $answer->title }}
                </label>
            </div>
        @endforeach

{{--            {{ $questions->onFirstPage() ? class="isDisabled" }}--}}
    </div>
{{--    @TODO get old value from request or cookie--}}
    <div class="card-footer d-flex flex-row justify-content-center">
        <a href="{{$questions->previousPageUrl() }}" class="card-link js-previous-button">Previous</a>
        <a href="{{ $questions->nextPageUrl() }}" class="card-link js-next-button">Next</a>
    </div>

    @if($questions->onLastPage())
        <div class="row text-center m-2">
            <label for="name">Enter your name:</label>
            <input type="text" class="form-group" name="name" id="name" placeholder="Name">
        </div>
    @endif
    <div class="row text-center m-2">
        <div>
{{--            @TODO restart test form--}}
            <button class="btn btn-warning">Restart test</button>
{{--            @TODO enable button on currentPage=10--}}
            <button class="btn btn-primary">Submit Test</button>
        </div>
    </div>
</div>

