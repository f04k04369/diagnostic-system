@extends('layouts.app')

@section('content')
    <div class="home-container">
        <div class="home-container_left">
            <h1>診断サイト診断</h1>
            <p>診断結果から採用サイトの改善点が見えてくる</p>
            <form action="/question" method="post" class="form-container">
                {{ csrf_field() }}
                <label for="company-name">会社名<span>※必須</span></label>
                <input type="text" name="company_name" id="company-name" class="txt-area">
                <input class="submit-btn" type="submit" value="診断を始める" >
            </form>
        </div>
        <div class="home-container_right">
            <img src="{{ asset('img/result_image_1.png') }}" alt="" class="img-1">
            <img src="{{ asset('img/result_image_2.png') }}" alt="" class="img-2">
        </div>
    </div>
        
@endsection