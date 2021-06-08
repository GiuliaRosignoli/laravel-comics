@extends('layouts.main')
@section('content')
<div class="container">
    <div class="cards flex">
        @foreach ($cards as $card)
            <div class="card">
                <img src="{{ $card['image'] }}" alt="">
                <h3>{{ $card['title']}}</h3>
            </div>
        @endforeach
    </div>
</div>
@endsection