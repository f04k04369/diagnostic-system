@extends('layouts.app')

@section('content')
    <div class="home-container">
        <div class="home-container_left">
            <h1>診断サイト診断</h1>
            <p>診断結果から採用サイトの改善点が見えてくる</p>
            <form action="/question" method="post" class="top-form">
                {{ csrf_field() }}
                <label for="company_name">会社名</label>
                <input type="text" name="company_name" id="company-name">
                <input class="submit-btn" type="submit" value="診断を始める" >
            </form>
        </div>
        <div class="home-conrainer_right">
            <img src="{{ asset('img/result_image_1.png') }}" alt="">
        </div>
    </div>
        
@endsection