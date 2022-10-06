@extends('layouts.app')

@section('content')
    <div class="home-container">
        <div class="home-container_left">
            <h1>採用サイト診断</h1>
            <p>診断結果から採用サイトの改善点が見えてくる</p>
            <a class="submit-btn" href="/question">
                <span>診断を始める</span>
            </a>
        </div>
        <div class="home-container_right">
            <img src="{{ asset('img/result_image_1.png') }}" alt="" class="img-1">
            <img src="{{ asset('img/result_image_2.png') }}" alt="" class="img-2">
        </div>
    </div>
        
@endsection