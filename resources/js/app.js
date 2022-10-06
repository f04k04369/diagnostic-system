require('./bootstrap');


// --------結果表示画面総合得点グラフ-----------
//値をグラフに表示させる
Chart.plugins.register({
    afterDatasetsDraw: function (chart, easing) {
        var ctx = chart.ctx;
        chart.data.datasets.forEach(function (dataset, i) {
            var meta = chart.getDatasetMeta(i);
            if (!meta.hidden) {
                meta.data.forEach(function (element, index) {
                    // 値の表示
                    ctx.fillStyle = 'rgb(0, 0, 0,0.8)';//文字の色
                    var fontSize = 12;//フォントサイズ
                    var fontStyle = 'normal';//フォントスタイル
                    var fontFamily = 'Arial';//フォントファミリー
                    ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                    var dataString = dataset.data[index].toString();
          
                    // 値の位置
                    ctx.textAlign = 'center';//テキストを中央寄せ
                    ctx.textBaseline = 'middle';//テキストベースラインの位置を中央揃え

                    var padding = 5;//余白
                    var position = element.tooltipPosition();
                    ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
    
                });
            }
        });
    }
});
// =================================================================================


//=========== 棒グラフ（横・複数バー） ============//

$(document).ready(function(event) {//html全部読んだ後に描画
var ctx=document.getElementById("chart00");//グラフを描画したい場所のid
var chart=new Chart(ctx,{
type:'horizontalBar',//グラフのタイプ
data:{//グラフのデータ
  labels:["過去結果との比較"],//データの名前
  datasets: [
        {
          label: '診断結果',
          data: [result_data],
          backgroundColor: "rgba(219,39,91,0.5)"
        },{
          label: '過去平均',
          data: [average],
          backgroundColor: "rgba(130,201,169,0.5)"
        }
      ]

},
options:{//グラフのオプション 
  legend:{  
    display: true//グラフの説明を表示
  },
  scales:{
    xAxes:[//グラフ縦軸（X軸）設定
      {
        ticks:{
          beginAtZero:true,//0からスタート
          suggestedMax: 100,//最大が100
          suggestedMin: 0,//最小が0
          stepSize: 10,//10づつ数値が刻まれる
          callback: function(value){
            return  value +  '点'//数字＋点で表示     
        }
      }
      }
    ],
    yAxes:[//グラフ横（Y軸）設定
      {
        barPercentage:0.5,//バーの太さ
      }
    ]
  }
}
});       
});
// =================================================================================



// 各フェーズごとランク表示====================================================================
// フェーズ1
let phase1_rank = (point) => {
  if(point <= 15) {
      return {
        phase1_rank_result : 'C',
        phase1_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
      }
      

  } else if(point <= 30) {
      return {
        phase1_rank_result : 'B',
        phase1_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'

      }

    } else if(point <= 40) {
        return {
          phase1_rank_result : 'A',
          phase1_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
  
        }
  
  } else if(point <= 50) {
      return {
        phase1_rank_result : 'S',
        phase1_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'

    }

  }else{
      return {
        phase1_rank_result : 'エラー',
        phase1_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'

    }
  }
};

// フェーズ2
let phase2_rank = (point) => {
  if(point <= 20) {
    return {
      phase2_rank_result : 'C',
      phase2_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 40) {
    return {
      phase2_rank_result : 'B',
      phase2_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 60) {
    return {
      phase2_rank_result : 'A',
      phase2_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 70) {
    return {
      phase2_rank_result : 'S',
      phase2_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  }else{
    return {
      phase2_rank_result : 'エラー',
      phase2_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }
}
};

// フェーズ3
let phase3_rank = (point) => {
  if(point <= 10) {
    return {
      phase3_rank_result : 'C',
      phase3_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 20) {
    return {
      phase3_rank_result : 'B',
      phase3_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 30) {
    return {
      phase3_rank_result : 'A',
      phase3_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 40) {
    return {
      phase3_rank_result : 'S',
      phase3_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  }else{
    return {
      phase3_rank_result : 'エラー',
      phase3_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }
}
};

// フェーズ4
let phase4_rank = (point) => {
  if(point <= 20) {
    return {
      phase4_rank_result : 'C',
      phase4_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 40) {
    return {
      phase4_rank_result : 'B',
      phase4_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 60) {
    return {
      phase4_rank_result : 'A',
      phase4_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 70) {
    return {
      phase4_rank_result : 'S',
      phase4_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  }else{
    return {
      phase4_rank_result : 'エラー',
      phase4_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }
}
};

// =================================================================================


// 総合点ランク表示====================================================================

let total_rank = (point) => {
  if(point <= 50) {
    return {
      total_rank_result : 'C',
      total_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 70) {
    return {
      total_rank_result : 'B',
      total_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point <= 90) {
    return {
      total_rank_result : 'A',
      total_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  } else if(point == 100) {
    return {
      total_rank_result : 'S',
      total_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }

  }else{
    return {
      total_rank_result : 'エラー',
      total_feed : '貴社の採用サイトは〜〜〜〜で、なんとかなんとかなんとかなんとかですが<br>かと存じます！引き続き運用を続けてください！'
    }
  }
};
// =================================================================================


// 各関数の戻り値を格納 ===============================================================

const total_total = total_rank(result_data);
const {total_rank_result:total_rank_result, total_feed:total_feed} = total_total;
const phase1_total = phase1_rank(phase_1);
const {phase1_rank_result:phase1_rank_result, phase1_feed:phase1_feed} = phase1_total;
const phase2_total = phase2_rank(phase_2);
const {phase2_rank_result:phase2_rank_result, phase2_feed:phase2_feed} = phase2_total;
const phase3_total = phase3_rank(phase_3);
const {phase3_rank_result:phase3_rank_result, phase3_feed:phase3_feed} = phase3_total;
const phase4_total = phase4_rank(phase_4);
const {phase4_rank_result:phase4_rank_result, phase4_feed:phase4_feed} = phase4_total;

// =================================================================================


// 各関数の戻り値格納後、viewへの出力 ===================================================
document.querySelector('#total_rank_result').insertAdjacentHTML('beforeend',`<p class="rank__word--fontsize rank__word--color">${total_rank_result}</p>`);
document.querySelector('#total_result__feed').insertAdjacentHTML('beforeend',`<p class="total_feed--fontsize rank__word--color">${total_feed}</p>`);
document.querySelector('#phase-1_1').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase1_rank_result}</p>`);
document.querySelector('#phase-1_feed').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase1_feed}</p>`);
document.querySelector('#phase-2_1').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase2_rank_result}</p>`);
document.querySelector('#phase-2_feed').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase2_feed}</p>`);
document.querySelector('#phase-3_1').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase3_rank_result}</p>`);
document.querySelector('#phase-3_feed').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase3_feed}</p>`);
document.querySelector('#phase-4_1').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase4_rank_result}</p>`);
document.querySelector('#phase-4_feed').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase4_feed}</p>`);
document.querySelector('#phase-1_2').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase1_rank_result}</p>`);
document.querySelector('#phase-2_2').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase2_rank_result}</p>`);
document.querySelector('#phase-3_2').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase3_rank_result}</p>`);
document.querySelector('#phase-4_2').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase4_rank_result}</p>`);


// =================================================================================

// ランクに合わせてテキストの色を変える ===================================================

$(function() {
    $("p.rank__word--color:contains('S')").css("color", "yellow");
  });
  
$(function() {
  $("p.rank__word--color:contains('A')").css("color", "red");
});

$(function() {
  $("p.rank__word--color:contains('B')").css("color", "green");
});

$(function() {
  $("p.rank__word--color:contains('C')").css("color", "blue");
});

$(function() {
  $("p.phase-rank:contains('S')").css("color", "yellow");
});

$(function() {
$("p.phase-rank:contains('A')").css("color", "red");
});

$(function() {
$("p.phase-rank:contains('B')").css("color", "green");
});

$(function() {
$("p.phase-rank:contains('C')").css("color", "blue");
});

// =================================================================================
