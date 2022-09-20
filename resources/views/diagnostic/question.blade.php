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
                <input type="radio" name="point_1" value="10">十分にできている
                <input type="radio" name="point_1" value="5">できているが十分ではない
                <input type="radio" name="point_1" value="0">できていない
            </div>

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.2</p>
                </div>
                <p class="question_word">採用ページに求める人材像の詳細まで記載できているか？
                </p>
                <input type="radio" name="point_2" value="10">十分にできている
                <input type="radio" name="point_2" value="5">できているが十分ではない
                <input type="radio" name="point_2" value="0">できていない
            </div>

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.3</p>
                </div>
                <p class="question_word">採用ページに求める人材像に近い社員紹介があるか？<br>
                ・紹介社員が入社したきっかけ<br>
                ・紹介社員からの企業の魅力への言及<br>
                ・紹介社員が仕事を通して達成したい夢・目標<br>
                ・紹介社員のプライベートの過ごし方<br>
                など
                </p>
                <input type="radio" name="point_3" value="10">十分にできている
                <input type="radio" name="point_3" value="5">できているが十分ではない
                <input type="radio" name="point_3" value="0">できていない
            </div>

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.4</p>
                </div>
                <p class="question_word">多様性への取り組みについて<br>
                ・男女雇用と活躍<br>
                ・健常者/障がい者雇用と活躍<br>
                ・バックグラウンドに関わらない活躍<br>
                が一つ以上伝わりやすく記載されているか？
                </p>
                <input type="radio" name="point_4" value="10">十分にできている
                <input type="radio" name="point_4" value="5">できているが十分ではない
                <input type="radio" name="point_4" value="0">できていない
            </div>

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.5</p>
                </div>
                <p class="question_word">コーポレートサイト、採用サイトに会社概要についての以下内容が記載されているか<br>
                ・事業の社会貢献性について<br>
                ・事業実績<br>
                </p>
                <input type="radio" name="point_5" value="10">十分にできている
                <input type="radio" name="point_5" value="5">できているが十分ではない
                <input type="radio" name="point_5" value="0">できていない
            </div>

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.6</p>
                </div>
                <p class="question_word">採用サイトに業務概要についての記載があるか？<br>
                ・職種<br>
                ・具体的な業務/プロジェクト内容<br>
                ・働き方のイメージ（１日のスケジュールなど）<br>
                </p>
                <input type="radio" name="point_6" value="10">十分にできている
                <input type="radio" name="point_6" value="5">できているが十分ではない
                <input type="radio" name="point_6" value="0">できていない
            </div>

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.7</p>
                </div>
                <p class="question_word">採用サイトに就業規則についての記載があるか？<br>
                ・給与・賞与（水準イメージ）<br>
                ・労働時間<br>
                ・福利厚生<br>
                </p>
                <input type="radio" name="point_7" value="10">十分にできている
                <input type="radio" name="point_7" value="5">できているが十分ではない
                <input type="radio" name="point_7" value="0">できていない
            </div>

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.8</p>
                </div>
                <p class="question_word">採用サイトに職場環境の記載はあるか？<br>
                ・オフィス紹介（写真・動画）<br>
                ・働く環境の具体的説明<br>
                </p>
                <input type="radio" name="point_8" value="10">十分にできている
                <input type="radio" name="point_8" value="5">できているが十分ではない
                <input type="radio" name="point_8" value="0">できていない
            </div>

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.9</p>
                </div>
                <p class="question_word">採用サイトに入社後のキャリアについての記載はあるか？<br>
                ・入社後のキャリアパスモデル<br>
                ・研修制度の紹介<br>
                </p>
                <input type="radio" name="point_9" value="10">十分にできている
                <input type="radio" name="point_9" value="5">できているが十分ではない
                <input type="radio" name="point_9" value="0">できていない
            </div>

            <div class="question-box">
                <div class="question_wrapper">
                    <p>Q.10</p>
                </div>
                <p class="question_word">採用情報やお知らせを月2回以上更新しているか？<br>
                ・インターンシップの案内<br>
                ・会社説明会の案内<br>
                ・採用イベントの案内<br>
                ・採用ブログ、その他
                </p>
                <input type="radio" name="point_10" value="10">十分にできている
                <input type="radio" name="point_10" value="5">できているが十分ではない
                <input type="radio" name="point_10" value="0">できていない
            </div>


            <input class="submit-btn" type="submit" value="診断結果を見る" >
        </form>
    </div>
@endsection