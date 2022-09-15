@extends('layouts.app')

@section('content')
    
    <div class="question-container">
        <h1>診断スタート</h1>
        <p>（約5分）</p>
        <p>当てはまるものを一つ選択してください</p>

        <form action="/result" method="post" class="form-container">
            {{ csrf_field() }}

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.1</p>
                </div>
                <p class="question_word">採用ページに候補者向けに<br>
                ・経営者メッセージ<br>
                ・企業理念<br>
                ・企業の将来像<br>
                が一つ以上伝わりやすく記載されているか？
                </p>
                <input type="radio" name="1" value="10">十分にできている
                <input type="radio" name="2" value="5">できているが十分ではない
                <input type="radio" name="3" value="0">できていない
            </div>

            <input class="submit-btn" type="submit" value="診断結果を見る" >
        </form>
    </div>
@endsection