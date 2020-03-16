<!-- @include('partials._header') -->

@extends('layouts.app')

    @section('header')
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>
    @endsection
    @section('content')
       <div class="cds-container">
        @foreach($data as $cd)
        <div class="cd">
            <img src="{{$cd['poster']}}" alt="img">
            <h3>{{$cd['title']}}</h3>
            <small>{{$cd['author']}}</small>
            <strong>{{$cd['year']}}</strong>
        </div>
        @endforeach
    </div>>
    @endsection

@include('partials._footer')