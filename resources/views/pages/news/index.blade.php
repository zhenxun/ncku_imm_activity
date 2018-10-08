@extends('layout')

@section('content')

    @foreach ($news as $message)
        <div class="news-box">
            <div class="title">
                <h1>{{ $message->title }}</h1>
            </div>
            <div class="content">
                {!! $message->content !!}
            </div>
        </div>  
    @endforeach


@endsection
