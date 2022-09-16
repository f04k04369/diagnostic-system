<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app,name', 'Laravel')}}</title>

    {{-- resset.css --}}
    <link rel="stylesheet" href="{{ asset('css/resset.css') }}">

    
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <div class="container">
            <img src="{{ asset('img/bottok_logo_white.png') }}" alt="BottoKのロゴ">
        </div>
    </header>

    <div id="content">
        <div class="result-container">
            <div class="total-result">
                <div class="total-result__rank">
                    <p>総合評価</p>
                    <div class="rank__word">
                        <p>A</p>
                    </div>
                    <div class="rank__point">
                        <p>70/100</p>
                    </div>
                </div>
                <div class="total-result__graph">
                    <canvas id="chart02"></canvas>
                </div>
            </div>
            <div class="category-results">
                <h2>採用フェーズごとの診断結果</h2>
                <div class="category-results__container">
                    <div class="result__container">
                        <p>インターンシップや<br>
                        説明会への<br>
                        応募・参加時
                        </p>
                        <p>A</p>
                    </div>
                    <div class="result__container">
                        <p>エントリーや本選考<br>
                        応募をするかどうか<br>
                        判断するとき
                        </p>
                        <p>B</p>
                    </div>

                    <div class="result__container">
                        <p>エントリーシート<br>
                        作成時や応募前<br>
                        </p>
                        <p>C</p>
                    </div>

                    <div class="result__container">
                        <p>内定承諾や辞退を<br>
                        判断する際<br>
                        </p>
                        <p>S</p>
                    </div>

                </div>
            </div>
            <div class="result-comparison">
                <h2>設問ごとの回答比較</h2>
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.1</p>
                    </div>
                    <div class="question-word">
                        <p>採用ページに候補者向けに<br>
                            ・経営者メッセージ<br>
                            ・企業理念<br>
                            ・企業の将来像<br>
                            が一つ以上伝わりやすく記載されているか？
                        </p>
                    </div>
                    <div class="question-tags">
                        <p>この設問の<br>
                            効果のあるフェーズ
                        </p>
                        <div class="question-tags__container">
                            <div class="question-tag">
                                <p>インターンシップへの<br>
                                    応募・参加時
                                </p>
                            </div>

                            <div class="question-tag">
                                <p>エントリーシート<br>
                                    作成時や応募前
                                </p>
                            </div>

                            <div class="question-tag">
                                <p>エントリーや選考応募を<br>
                                    するかどうか判断するとき
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="comparison-graph">
                    <p>あなたの回答は...<span>十分にできている</span></p>
                    <div class="graph">
                        <canvas id="chart01"></canvas>
                    </div>
                </div>

                <img src="" id="result" />
            </div>
            <div class="private-meeting">
                <h2>〜個別相談について〜</h2>
                <p>レポートに対してのフィードバックが欲しい場合は<br>
                    下記入力フォームよりお申し込みください。
                </p>
                <div class="form-container">
                    <form method="post" action="https://bottok.net/Thanks">
                        {{ csrf_field() }}
                        <table class="formTable">
                        <tr>
                            <th><em>確認</em></th>
                            <td>
                                <div class="box_br">
                                    <label>
                                        <input type="radio" name="gender" value="テキスト1">
                                        テキスト1
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="radio" name="gender" value="テキスト2">
                                        テキスト2
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>ご用件</th>
                            <td><select name="ご用件">
                                <option value="">選択してください</option>
                                <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                                <option value="リンクについて">リンクについて</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th>お名前<span>必須</span></th>
                            <td><input size="20" type="text" class="wide" name="お名前" /></td>
                        </tr>
                        <tr>
                            <th>電話番号（半角）<span>必須</span></th>
                            <td><input size="30" type="text" class="wide" name="電話番号" /></td>
                        </tr>
                        <tr>
                            <th>Mail（半角）</th>
                            <td><input size="30" type="text" class="wide" name="Email" /></td>
                        </tr>
                        <tr>
                            <th>お問い合わせ内容<br /></th>
                            <td><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea></td>
                        </tr>
                        </table>
                        <div class="con_pri">
                            <div class="box_pri">
                                <div class="box_tori">
                                    <h4>プライバシー</h4>
                                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                                </div>
                                <div class="box_num">
                                    <h4>プライバシー</h4>
                                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                                </div>
                                <div class="box_num">
                                    <h4>プライバシー</h4>
                                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                                </div>
                                <div class="box_num">
                                    <h4>プライバシー</h4>
                                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                                </div>
                            </div>
                        </div>
                        <div class="box_check">
                            <label>
                                <input type="checkbox" name="acceptance-714" value="1" aria-invalid="false" class="agree"><span class="check">プライバシーポリシーに同意する</span>
                            </label>
                        </div>
                        <p class="submit-btn">
                            <span><input type="submit" value="　 確認 　" /></span>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="left">
                <p>株式会社 BottoK</p>
                <p>福岡県福岡市博多区祇園町8-13 1F The Company 内</p>
                <p>Tel: 050-8881-6590</p>
            </div>
            <div class="right">
                <a href="">サービス</a>
                <a href="">会社概要</a>
                <a href="">お問合せ</a>
            </div>
        </div>
        <p>©️ 2022 BottoK.inc</p>
    </footer>
    
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
    {{-- chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    {{-- jQuery.inview --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
    {{-- html2canvas --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    {{-- 自作js --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- スクリーンショット撮影機能 --}}
    <script>
        //ロードされた際の処理として実施：
        window.onload = function(){
    
          //HTML内に画像を表示
          html2canvas(document.getElementById("content"),{
            onrendered: function(canvas){
              //imgタグのsrcの中に、html2canvasがレンダリングした画像を指定する。
              var imgData = canvas.toDataURL();
              document.getElementById("result").src = imgData;
            }
          });    
        }
      </script>

</body>
</html>