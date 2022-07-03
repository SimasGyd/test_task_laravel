@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="align-items-center">
            <div class="border-top my-3"></div>
            <div class="d-flex justify-content-center my-5">
                <h1>Choose your test!</h1>
            </div>
            <div class="border-top my-3"></div>
            <div class="d-flex flex-row justify-content-center">
                @foreach($tests as $test)
                    @include('partials._test-card')
                @endforeach
            </div>
        </div>

        <div class="d-flex flex-row justify-content-center">
            <div class="card text-center m-2 js-unfinished">
            </div>
        </div>
    </div>

@endsection
