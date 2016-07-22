@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>Hotels Added</h3>

        @foreach($article as $article)
            <article>

                <h3>{{ $article ->nameOfProperrty }}</h3>

                <div class="body">{{ $article->description }}</div>
            </article>
        @endforeach

    </div>

@endsection