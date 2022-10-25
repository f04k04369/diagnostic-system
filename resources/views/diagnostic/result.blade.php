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

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;900&display=swap" rel="stylesheet">

    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/f0396e78d1.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <img src="{{ asset('img/bottok_logo_white.png') }}" alt="BottoKのロゴ">
        </div>
    </header>

    
    <div id="content">
        <div class="result-container">
            <div class="comment">
                <p>貴社採用ページの<br>
                候補者への魅力の伝わり方は...
            </p>
        </div>
            <div class="total-result">
                <div class="total_result__container">
                    <div class="total-result__rank">
                        <p class="rank__title--fontsize">総合評価</p>
                        <div class="rank__word" id="total_rank_result">
                        </div>
                        <div class="rank__point">
                            <p class="rank__point--fontsize"><span class="total_point--fontsize">{{ $total_point }}</span>/100点</p>
                        </div>
                        <div id="total_result__feed"></div>
                        <img src="{{ asset('img/check_man_02_color.png') }}" alt="指を差す女性">
                    </div>
                    <div class="total-result__graph">
                        <canvas id="chart00"></canvas>
                    </div>
                </div>
            </div>
            <div class="category-results">
                <h2 class="sub-title">採用フェーズごとの診断結果</h2>
                <div class="category-results__container">
                    <div class="result__container">
                        <p class="title">〜会社説明会応募まで
                        </p>
                        <div id="phase-1_1"></div>
                    </div>
                    <div class="result__container">
                        <p class="title">会社説明会から<br>
                        本選考応募時
                        </p>
                        <div id="phase-2_1"></div>
                    </div>

                    <div class="result__container">
                        <p class="title">選考プロセス時<br>
                        （一次選考前〜<br>
                        最終選考まで）
                        </p>
                        <div id="phase-3_1"></div>
                    </div>

                    <div class="result__container">
                        <p class="title">内定通知から<br>
                        入社まで<br>
                        </p>
                        <div id="phase-4_1"></div>
                    </div>

                    <div class="triangle"><img src="{{ asset('img/triangle.png')}}" alt="フロー"></div>
                    <div class="triangle_sp"><img src="{{ asset('img/triangle_sp.png')}}" alt="フロー"></div>

                </div>
            </div>
            
            <div class="result-phase">
                <h2 class="sub-title">各フェーズの詳細評価</h2>
                
                <div class="phase-container">
                    <div class="contaier">
                        <div class="phase-rank__container">
                            <div class="phase-number">
                                <p>フェーズ１</p>
                            </div>
                            <div class="phase-word">
                                <h3>〜会社説明会応募まで</h3>
                            </div>
                            <div id="phase-1_2"></div>
                            
                        </div>
                        <div class="question-tags">
                            <p class="question-tags__title">求職者が重要視する情報
                            </p>
                            <div class="question-tags__container">
                                <div class="question-tag">
                                    <p>ビジョン・代表メッセージ（Q1）</p>
                                </div>

                                
                                <div class="question-tag">
                                    <p>事業内容・実績（Q5）</p>
                                </div>
                                
                                <div class="question-tag">
                                    <p>日常の業務について（Q6）</p>
                                </div>
                                
                                <div class="question-tag">
                                    <p>待遇・ワークライフバランス（Q7）</p>
                                </div>

                                <div class="question-tag">
                                    <p>採用情報について（Q10）</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div id="phase-1_feed" class="phase_feed"></div>
                </div>

                <div class="phase-container">
                    <div class="contaier">
                        <div class="phase-rank__container">
                            <div class="phase-number">
                                <p>フェーズ2</p>
                            </div>
                            <div class="phase-word">
                                <h3>会社説明会から<br>
                                本選考応募時
                                </h3>
                            </div>
                            <div id="phase-2_2"></div>
                            
                        </div>
                        <div class="question-tags">
                            <p class="question-tags__title">求職者が重要視する情報
                            </p>
                            <div class="question-tags__container">
                                <div class="question-tag">
                                    <p>ビジョン・代表メッセージ（Q1）</p>
                                </div>

                                <div class="question-tag">
                                    <p>採用コンセプト・求める人物像（Q2）</p>
                                </div>

                                <div class="question-tag">
                                    <p>社員紹介について（Q3）</p>
                                </div>
                                
                                <div class="question-tag">
                                    <p>事業内容・実績（Q5）</p>
                                </div>
                                
                                <div class="question-tag">
                                    <p>日常の業務について（Q6）</p>
                                </div>
                                
                                <div class="question-tag">
                                    <p>待遇・ワークライフバランス（Q7）</p>
                                </div>

                                <div class="question-tag">
                                    <p>キャリアパス・研修制度（Q9）</p>
                                </div>

                                <div class="question-tag">
                                    <p>採用情報について（Q10）</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="phase-2_feed" class="phase_feed"></div>
                </div>

                <div class="phase-container">
                    <div class="contaier">
                        <div class="phase-rank__container">
                            <div class="phase-word">
                                <div class="phase-number">
                                    <p>フェーズ3</p>
                                </div>    
                                <h3>選考プロセス時<br>
                                （一次選考前〜最終選考まで）
                                </h3>
                            </div>
                            <div id="phase-3_2"></div>
                            
                        </div>
                        <div class="question-tags">
                            <p class="question-tags__title">求職者が重要視する情報
                            </p>
                            <div class="question-tags__container">
                                <div class="question-tag">
                                    <p>ビジョン・代表メッセージ（Q1）</p>
                                </div>
    
                                <div class="question-tag">
                                    <p>採用コンセプト・求める人物像（Q2）</p>
                                </div>
    
                                <div class="question-tag">
                                    <p>事業内容・実績（Q5）</p>
                                </div>
                                                            
                                <div class="question-tag">
                                    <p>待遇・ワークライフバランス（Q7）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="phase-3_feed" class="phase_feed"></div>
                </div>

                <div class="phase-container">
                    <div class="contaier">
                        <div class="phase-rank__container">
                            <div class="phase-number">
                                <p>フェーズ4</p>
                            </div>
                            <div class="phase-word">
                                <h3>内定通知から                                入社まで
                                </h3>
                            </div>
                            <div id="phase-4_2"></div>
                            
                        </div>
                        <div class="question-tags">
                            <p class="question-tags__title">求職者が重要視する情報
                            </p>
                            <div class="question-tags__container">
                                <div class="question-tag">
                                    <p>女性活用・多様性への配慮（Q2）</p>
                                </div>

                                <div class="question-tag">
                                    <p>社員紹介について（Q3）</p>
                                </div>
                                
                                <div class="question-tag">
                                    <p>事業内容・実績（Q5）</p>
                                </div>
                                
                                <div class="question-tag">
                                    <p>日常の業務について（Q6）</p>
                                </div>
                                
                                <div class="question-tag">
                                    <p>待遇・ワークライフバランス（Q7）</p>
                                </div>

                                <div class="question-tag">
                                    <p>オフィス紹介・働く環境（Q8）</p>
                                </div>

                                <div class="question-tag">
                                    <p>キャリアパス・研修制度（Q9）</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div id="phase-4_feed" class="phase_feed"></div>
                </div>


            </div>

            <div class="download">
                
                <div id="outputBtn" class="submit-btn">
                    診断結果のダウンロードはこちら
                    <i class="fa-solid fa-download"></i>
                </div>
                <a id="getImage" href="" style="display: none"></a>
                <div class="container">
                    <img src="{{ asset('img/download-man.png') }}" alt="ダウンロードはこちら" class="download-word">                
                </div>
            </div>

            <div class="private-meeting">
                <h2 class="sub-title">個別相談について</h2>
                <div class="private-meeting__img">
                    <img src="{{ asset('img/whiteboad-man.png') }}" alt="">
                </div>
                <div class="form-container">
                    <form method="post" action="/thanks">
                        {{ csrf_field() }}
                        <table class="formTable">
                            <h2 class="sub-title">個別相談申し込みフォーム</h2>

                            <tr>
                                <th>会社名<span>必須</span></th>
                                <td><input size="20" type="text" class="txt-area" name="company_name" /></td>
                            </tr>
                            <tr>
                                <th>担当者名<span>必須</span></th>
                                <td><input size="20" type="text" class="txt-area" name="name" /></td>
                            </tr>
                            <tr>
                                <th>部署名</th>
                                <td><input size="30" type="text" class="txt-area" name="department_name" /></td>
                            </tr>
                            <tr>
                                <th>役職名</th>
                                <td><input size="30" type="text" class="txt-area" name="job_title" /></td>
                            </tr>
                            <tr>
                                <th>Mail（半角）</th>
                                <td><input size="30" type="text" class="txt-area" name="email" /></td>
                            </tr>
                            <tr>
                                <th>携帯電話番号</th>
                                <td><input size="30" type="text" class="txt-area" name="phone_number" /></td>
                            </tr>
                            <tr>
                                <th>採用サイトへのリンク</th>
                                <td><input size="30" type="text" class="txt-area" name="company_url" /></td>
                            </tr>
                        </table>
                        <div class="con_pri">
                            <div class="box_pri">
                                <div class="box_tori">
                                    <h4>個人情報について</h4>
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
                            <input type="submit" value="個別相談を申し込む" />
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