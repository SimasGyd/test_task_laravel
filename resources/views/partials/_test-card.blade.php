<div class="card text-center m-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $test->title }}</h5>
        <p class="card-text">Test with 10 questions.</p>
        <p class="card-text">Total points {{ $resultService->countPoints($test->id) }}</p>
        <a href="{{ route('test.index', $test->id) }}" class="btn btn-primary js-restart-session">Choose</a>
    </div>
</div>
