@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="align-items-center">
            <div class="d-flex justify-content-center my-5">
                <h1>Choose your test!</h1>
            </div>
            <div class="d-flex flex-row justify-content-center">
                @foreach($tests as $test)
                    @include('partials._test-card')
                @endforeach
            </div>
        </div>
    </div>

@endsection
