@extends('layouts.app')
@section('title')
    Front Page
@endsection

{{--
Frontpage is voor guests--}}
@section('content')
    @if (!Auth::guest())
        <h1>Welcome User!</h1>
    @else
        <h1>Welcome Guest!</h1>
    @endif

    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Cart</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
@endsection

