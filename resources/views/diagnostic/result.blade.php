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
                    <p class="rank__title--fontsize">総合評価</p>
                    <div class="rank__word" id="total_rank_result">
                    </div>
                    <div class="rank__point">
                        <p class="rank__point--fontsize"><span class="total_point--fontsize">{{ $total_point }}</span>/100点</p>
                    </div>
                </div>
                <div class="total-result__graph">
                    <canvas id="chart00"></canvas>
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
                        <div id="phase-1"></div>
                    </div>
                    <div class="result__container">
                        <p>エントリーや本選考<br>
                        応募をするかどうか<br>
                        判断するとき
                        </p>
                        <div id="phase-2"></div>
                    </div>

                    <div class="result__container">
                        <p>エントリーシート<br>
                        作成時や応募前<br>
                        </p>
                        <div id="phase-3"></div>
                    </div>

                    <div class="result__container">
                        <p>内定承諾や辞退を<br>
                        判断する際<br>
                        </p>
                        <div id="phase-4"></div>
                    </div>

                </div>
            </div>

            <h2>設問ごとの回答比較</h2>

            <div class="result-comparison">
                
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
                    <p id="q1">あなたの回答は...</p>
                    <div class="graph">
                        <canvas id="chart01"></canvas>
                    </div>
                </div>

            </div>

            <div class="result-comparison">
                
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.2</p>
                    </div>
                    <div class="question-word">
                        <p>採用ページに求める人材像の詳細まで記載できているか？
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
                    <p>あなたの回答は...<span id="q2"></span></p>
                    <div class="graph">
                        <canvas id="chart02"></canvas>
                    </div>
                </div>

            </div>

            <div class="result-comparison">
                
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.3</p>
                    </div>
                    <div class="question-word">
                        <p>採用ページに求める人材像に近い社員紹介があるか？<br>
                            ・紹介社員が入社したきっかけ<br>
                            ・紹介社員からの企業の魅力への言及<br>
                            ・紹介社員が仕事を通して達成したい夢・目標<br>
                            ・紹介社員のプライベートの過ごし方<br>
                            など
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
                    <p>あなたの回答は...<span id="q3"></span></p>
                    <div class="graph">
                        <canvas id="chart03"></canvas>
                    </div>
                </div>

            </div>

            <div class="result-comparison">
                
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.4</p>
                    </div>
                    <div class="question-word">
                        <p>多様性への取り組みについて<br>
                            ・男女雇用と活躍<br>
                            ・健常者/障がい者雇用と活躍<br>
                            ・バックグラウンドに関わらない活躍<br>
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
                    <p>あなたの回答は...<span id="q4"></span></p>
                    <div class="graph">
                        <canvas id="chart04"></canvas>
                    </div>
                </div>

            </div>

            <div class="result-comparison">
                
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.5</p>
                    </div>
                    <div class="question-word">
                        <p>コーポレートサイト、採用サイトに会社概要についての以下内容が記載されているか<br>
                            ・事業の社会貢献性について<br>
                            ・事業実績<br>
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
                    <p>あなたの回答は...<span id="q5"></span></p>
                    <div class="graph">
                        <canvas id="chart05"></canvas>
                    </div>
                </div>

            </div>

            <div class="result-comparison">
                
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.6</p>
                    </div>
                    <div class="question-word">
                        <p>採用サイトに業務概要についての記載があるか？<br>
                            ・職種<br>
                            ・具体的な業務/プロジェクト内容<br>
                            ・働き方のイメージ（１日のスケジュールなど）<br>
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
                    <p>あなたの回答は...<span id="q6"></span></p>
                    <div class="graph">
                        <canvas id="chart06"></canvas>
                    </div>
                </div>

            </div>

            <div class="result-comparison">
                
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.7</p>
                    </div>
                    <div class="question-word">
                        <p>採用サイトに就業規則についての記載があるか？<br>
                            ・給与・賞与（水準イメージ）<br>
                            ・労働時間<br>
                            ・福利厚生<br>
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
                    <p>あなたの回答は...<span id="q7"></span></p>
                    <div class="graph">
                        <canvas id="chart07"></canvas>
                    </div>
                </div>

            </div>

            <div class="result-comparison">
                
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.8</p>
                    </div>
                    <div class="question-word">
                        <p>採用サイトに職場環境の記載はあるか？<br>
                            ・オフィス紹介（写真・動画）<br>
                            ・働く環境の具体的説明<br>
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
                    <p>あなたの回答は...<span id="q8"></span></p>
                    <div class="graph">
                        <canvas id="chart08"></canvas>
                    </div>
                </div>

            </div>

            <div class="result-comparison">
                
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.9</p>
                    </div>
                    <div class="question-word">
                        <p>採用サイトに入社後のキャリアについての記載はあるか？<br>
                            ・入社後のキャリアパスモデル<br>
                            ・研修制度の紹介<br>
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
                    <p>あなたの回答は...<span id="q9"></span></p>
                    <div class="graph">
                        <canvas id="chart09"></canvas>
                    </div>
                </div>

            </div>

            <div class="result-comparison">
                
                <div class="quesition-container">
                    <div class="question-number">
                        <p>Q.10</p>
                    </div>
                    <div class="question-word">
                        <p>採用情報やお知らせを月2回以上更新しているか？<br>
                            ・インターンシップの案内<br>
                            ・会社説明会の案内<br>
                            ・採用イベントの案内<br>
                            ・採用ブログ、その他
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
                    <p>あなたの回答は...<span id="q10"></span></p>
                    <div class="graph">
                        <canvas id="chart10"></canvas>
                    </div>
                </div>

            </div>

            <div id="outputBtn" class="submit-btn">
                画像表示
            </div>
            <a id="getImage" href="" style="display: none"></a>

            <div class="private-meeting">
                <h2>〜個別相談について〜</h2>
                <p>レポートに対してのフィードバックが欲しい場合は<br>
                    下記入力フォームよりお申し込みください。
                </p>
                <div class="form-container">
                    <form method="post" action="/thanks">
                        {{ csrf_field() }}
                        <table class="formTable">
                        <tr>
                            <th>会社名<span>必須</span></th>
                            <td><input size="20" type="text" class="txt-area" name="company_name" /></td>
                        </tr>
                        <tr>
                            <th>お名前<span>必須</span></th>
                            <td><input size="20" type="text" class="txt-area" name="name" /></td>
                        </tr>
                        <tr>
                            <th>Mail（半角）</th>
                            <td><input size="30" type="text" class="txt-area" name="email" /></td>
                        </tr>
                        </table>
                        <div class="con_pri">
                            <div class="box_pri">
                                <div class="box_tori">
                                    <h4>プライバシー</h4>
                                    <p class="txt">以下のチェックボタン及び送信ボタンをクリックすると、お客様が要求した情報を提供する目的で、株式会社BottoKが上記から送信された個人情報を保管・処理することに同意したものとみなされます。<br>
                                    弊社個人情報保護方針については<a href="https://bottok.net/corporate/privacy">「個人情報保護方針」</a>をご参照ください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="box_check">
                            <label>
                                <input type="checkbox" name="acceptance-714" value="1" aria-invalid="false" class="agree"><span class="check">プライバシーポリシーに同意する</span>
                            </label>
                        </div>
                        <input type="hidden" name="point_1" value="{{ $point_1 }}">
                        <input type="hidden" name="point_2" value="{{ $point_2 }}">
                        <input type="hidden" name="point_3" value="{{ $point_3 }}">
                        <input type="hidden" name="point_4" value="{{ $point_4 }}">
                        <input type="hidden" name="point_5" value="{{ $point_5 }}">
                        <input type="hidden" name="point_6" value="{{ $point_6 }}">
                        <input type="hidden" name="point_7" value="{{ $point_7 }}">
                        <input type="hidden" name="point_8" value="{{ $point_8 }}">
                        <input type="hidden" name="point_9" value="{{ $point_9 }}">
                        <input type="hidden" name="point_10" value="{{ $point_10 }}">
                        <input type="hidden" name="total_point" value="{{ $total_point }}">

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

    <script>
        const result_data = @json($total_point);
        const point_1 = @json($point_1);
        const point_2 = @json($point_2);
        const point_3 = @json($point_3);
        const point_4 = @json($point_4);
        const point_5 = @json($point_5);
        const point_6 = @json($point_6);
        const point_7 = @json($point_7);
        const point_8 = @json($point_8);
        const point_9 = @json($point_9);
        const point_10 = @json($point_10);
        const phase_1 = @json($phase_1);
        const phase_2 = @json($phase_2);
        const phase_3 = @json($phase_3);
        const phase_4 = @json($phase_4);

// ============ 設問1 ===============
        const previous_q1_point_1 = @json($previous_q1_point_1); 
        const previous_q1_point_2 = @json($previous_q1_point_2); 
        const previous_q1_point_3 = @json($previous_q1_point_3); 

        const previous_q2_point_1 = @json($previous_q2_point_1); 
        const previous_q2_point_2 = @json($previous_q2_point_2); 
        const previous_q2_point_3 = @json($previous_q2_point_3); 

        const previous_q3_point_1 = @json($previous_q3_point_1); 
        const previous_q3_point_2 = @json($previous_q3_point_2); 
        const previous_q3_point_3 = @json($previous_q3_point_3); 

        const previous_q4_point_1 = @json($previous_q4_point_1); 
        const previous_q4_point_2 = @json($previous_q4_point_2); 
        const previous_q4_point_3 = @json($previous_q4_point_3); 

        const previous_q5_point_1 = @json($previous_q5_point_1); 
        const previous_q5_point_2 = @json($previous_q5_point_2); 
        const previous_q5_point_3 = @json($previous_q5_point_3); 

        const previous_q6_point_1 = @json($previous_q6_point_1); 
        const previous_q6_point_2 = @json($previous_q6_point_2); 
        const previous_q6_point_3 = @json($previous_q6_point_3); 

        const previous_q7_point_1 = @json($previous_q7_point_1); 
        const previous_q7_point_2 = @json($previous_q7_point_2); 
        const previous_q7_point_3 = @json($previous_q7_point_3); 

        const previous_q8_point_1 = @json($previous_q8_point_1); 
        const previous_q8_point_2 = @json($previous_q8_point_2); 
        const previous_q8_point_3 = @json($previous_q8_point_3); 

        const previous_q9_point_1 = @json($previous_q9_point_1); 
        const previous_q9_point_2 = @json($previous_q9_point_2); 
        const previous_q9_point_3 = @json($previous_q9_point_3); 

        const previous_q10_point_1 = @json($previous_q10_point_1); 
        const previous_q10_point_2 = @json($previous_q10_point_2); 
        const previous_q10_point_3 = @json($previous_q10_point_3); 

        const average = @json($average); 

    </script>

    
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
    {{-- chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    {{-- jQuery.inview --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
    {{-- html2canvas --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    {{-- 自作js --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- スクリーンショット撮影機能 --}}
    <script>
        //ロードされた際の処理として実施：
        // window.onload = function(){
    
        //   //HTML内に画像を表示
        //   html2canvas(document.getElementById("content"),{
        //     onrendered: function(canvas){
        //       //imgタグのsrcの中に、html2canvasがレンダリングした画像を指定する。
        //       var imgData = canvas.toDataURL();
        //       document.getElementById("result").src = imgData;
        //     }
        //   });    
        // }

        const outputBtn = document.getElementById("outputBtn");  //ボタン
        const element = document.getElementById("content");  //画像化したい要素
        const getImage = document.getElementById("getImage");  //ダウンロード用隠しリンク

        outputBtn.addEventListener('click', function() {
        html2canvas(element).then(canvas => {
            getImage.setAttribute("href", canvas.toDataURL());
            getImage.setAttribute("download", "sample.png");
            getImage.click();
        });			
        })
    </script>

</body>
</html>