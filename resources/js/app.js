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
  labels:["診断結果と過去平均"],//データの名前
  datasets: [
        {
          label: '診断結果',
          data: [result_data],
          backgroundColor: "rgba(219,39,91,0.5)"
        },{
          label: '過去平均',
          data: [55.3],
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



// ---------結果表示画面設問グラフ-------------
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


//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.1 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var answer = []; //DBから渡ってきた値を％に変換する
    answer[0] = [100, 200, 50]; // 質問に対する各回答の数
    var answer_count = []; // 全体の回答数
    answer_count[0] = answer[0][0] + answer[0][1] + answer[0][2];
    var top_point= [];  // 十分できている数
    var middle_point = []; // できているが十分ではない数
    var row_point = []; // できていない数
    
    // 割合の計算
    top_point = answer[0][0] / answer_count[0];
    middle_point = answer[0][1] / answer_count[0];
    row_point = answer[0][2] / answer_count[0];
    
    // パーセンテージ標記への変換
    top_point_par = parseInt(top_point * 10000) / 100 ;
    middle_point_par = parseInt(middle_point * 10000) / 100 ;
    row_point_par = parseInt(row_point * 10000) / 100 ;

  var ctx=document.getElementById("chart01");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [top_point_par],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [middle_point_par],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [row_point_par],
            backgroundColor: "orange"
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
            stacked: true,
            ticks:{
                beginAtZero:true,//0からスタート
                Max: 100,//最大が100
                Min: 0,//最小が0
                stepSize: 10,//10づつ数値が刻まれる
                callback: function(value){
                return  value +  '%'//数字＋点で表示     
            }
            }
          }
      ],
      yAxes:[//グラフ横（Y軸）設定
          {
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
});

//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.02 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var ctx=document.getElementById("chart02");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [62],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [18],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [20],
            backgroundColor: "orange"
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
            stacked: true,
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
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
  });
//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.03 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var ctx=document.getElementById("chart03");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [62],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [18],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [20],
            backgroundColor: "orange"
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
            stacked: true,
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
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
  });
//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.04 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var ctx=document.getElementById("chart04");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [62],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [18],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [20],
            backgroundColor: "orange"
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
            stacked: true,
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
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
  });
//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.05 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var ctx=document.getElementById("chart05");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [62],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [18],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [20],
            backgroundColor: "orange"
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
            stacked: true,
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
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
  });
//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.06 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var ctx=document.getElementById("chart06");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [62],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [18],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [20],
            backgroundColor: "orange"
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
            stacked: true,
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
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
  });
//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.07 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var ctx=document.getElementById("chart07");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [62],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [18],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [20],
            backgroundColor: "orange"
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
            stacked: true,
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
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
  });
//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.08 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var ctx=document.getElementById("chart08");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [62],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [18],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [20],
            backgroundColor: "orange"
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
            stacked: true,
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
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
  });
//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.09 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var ctx=document.getElementById("chart09");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [62],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [18],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [20],
            backgroundColor: "orange"
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
            stacked: true,
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
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
  });
//=========== 棒グラフ（横・複数バー） （表示先指定のスクリプト）chart.10 ============//

$(document).ready(function(event) {//html全部読んだ後に発火

  var ctx=document.getElementById("chart10");//グラフを描画したい場所のid
  var chart=new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["他社回答"],//データの名前
    datasets: [
          {
            label: '十分にできている',
            data: [62],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'できているが十分ではない',
            data: [18],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'できていない',
            data: [20],
            backgroundColor: "orange"
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
            stacked: true,
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
            stacked: true,
            barPercentage:0.5,//バーの太さ
          }
      ]
      }
  }
  });       
  });
                  

  

// 回答内容の表示===================================================================
// 1
let question1 = (point) => {
  if(point == 0) {
    const question1_result = 'できていない';
    return question1_result;

  } else if(point == 5) {
    const question1_result ='できているが十分ではない';
    return question1_result;

  } else if(point == 10) {
    const question1_result = 'できている';
    return question1_result;

  }else{
    const question1_result = 'エラー';
    return question1_result
  }
};

// 2
let question2 = (point) => {
  if(point == 0) {
    const question2_result = 'できていない';
    return question2_result;

  } else if(point == 5) {
    const question2_result ='できているが十分ではない';
    return question2_result;

  } else if(point == 10) {
    const question2_result = 'できている';
    return question2_result;

  }else{
    const question2_result = 'エラー';
    return question2_result
  }
};

// 3
let question3 = (point) => {
  if(point == 0) {
    const question3_result = 'できていない';
    return question3_result;

  } else if(point == 5) {
    const question3_result ='できているが十分ではない';
    return question3_result;

  } else if(point == 10) {
    const question3_result = 'できている';
    return question3_result;

  }else{
    const question3_result = 'エラー';
    return question3_result
  }
};


// 4
let question4 = (point) => {
  if(point == 0) {
    const question4_result = 'できていない';
    return question4_result;
    
  } else if(point == 5) {
    const question4_result ='できているが十分ではない';
    return question4_result;
    
  } else if(point == 10) {
    const question4_result = 'できている';
    return question4_result;

  }else{
    const question4_result = 'エラー';
    return question4_result
  }
};

// 5
let question5 = (point) => {
  if(point == 0) {
    const question5_result = 'できていない';
    return question5_result;
    
  } else if(point == 5) {
    const question5_result ='できているが十分ではない';
    return question5_result;
    
  } else if(point == 10) {
    const question5_result = 'できている';
    return question5_result;

  }else{
    const question5_result = 'エラー';
    return question5_result
  }
};

// 6
let question6 = (point) => {
  if(point == 0) {
    const question6_result = 'できていない';
    return question6_result;
    
  } else if(point == 5) {
    const question6_result ='できているが十分ではない';
    return question6_result;
    
  } else if(point == 10) {
    const question6_result = 'できている';
    return question6_result;
    
  }else{
    const question6_result = 'エラー';
    return question6_result
  }
};

// 7
let question7 = (point) => {
  if(point == 0) {
    const question7_result = 'できていない';
    return question7_result;
    
  } else if(point == 5) {
    const question7_result ='できているが十分ではない';
    return question7_result;
    
  } else if(point == 10) {
    const question7_result = 'できている';
    return question7_result;
    
  }else{
    const question7_result = 'エラー';
    return question7_result
  }
};

// 8
let question8 = (point) => {
  if(point == 0) {
    const question8_result = 'できていない';
    return question8_result;

  } else if(point == 5) {
    const question8_result ='できているが十分ではない';
    return question8_result;
    
  } else if(point == 10) {
    const question8_result = 'できている';
    return question8_result;
    
  }else{
    const question8_result = 'エラー';
    return question8_result
  }
};

// 9
let question9 = (point) => {
  if(point == 0) {
    const question9_result = 'できていない';
    return question9_result;
    
  } else if(point == 5) {
    const question9_result ='できているが十分ではない';
    return question9_result;

  } else if(point == 10) {
    const question9_result = 'できている';
    return question9_result;

  }else{
    const question9_result = 'エラー';
    return question9_result
  }
};

// 10
let question10 = (point) => {
  if(point == 0) {
    const question10_result = 'できていない';
    return question10_result;

  } else if(point == 5) {
    const question10_result ='できているが十分ではない';
    return question10_result;

  } else if(point == 10) {
    const question10_result = 'できている';
    return question10_result;

  }else{
    const question10_result = 'エラー';
    return question10_result
  }
};
// =================================================================================

// 各フェーズごとランク表示====================================================================
// フェーズ1
let phase1_rank = (point) => {
  if(point <= 0) {
    const phase1_rank_result = 'C';
    return phase1_rank_result;

  } else if(point <= 10) {
    const phase1_rank_result ='B';
    return phase1_rank_result;

  } else if(point <= 20) {
    const phase1_rank_result = 'A';
    return phase1_rank_result;

  } else if(point == 30) {
    const phase1_rank_result = 'S';
    return phase1_rank_result;

  }else{
    const phase1_rank_result = 'エラー';
    return phase1_rank_result;
  }
};

// フェーズ2
let phase2_rank = (point) => {
  if(point <= 0) {
    const phase2_rank_result = 'C';
    return phase2_rank_result;

  } else if(point <= 10) {
    const phase2_rank_result ='B';
    return phase2_rank_result;

  } else if(point <= 20) {
    const phase2_rank_result = 'A';
    return phase2_rank_result;

  } else if(point == 30) {
    const phase2_rank_result = 'S';
    return phase2_rank_result;

  }else{
    const phase2_rank_result = 'エラー';
    return phase2_rank_result;
  }
};

// フェーズ3
let phase3_rank = (point) => {
  if(point <= 0) {
    const phase3_rank_result = 'C';
    return phase3_rank_result;

  } else if(point <= 10) {
    const phase3_rank_result ='B';
    return phase3_rank_result;

  } else if(point <= 20) {
    const phase3_rank_result = 'A';
    return phase3_rank_result;

  } else if(point == 30) {
    const phase3_rank_result = 'S';
    return phase3_rank_result;

  }else{
    const phase3_rank_result = 'エラー';
    return phase3_rank_result;
  }
};

// フェーズ4
let phase4_rank = (point) => {
  if(point <= 10) {
    const phase4_rank_result = 'C';
    return phase4_rank_result;

  } else if(point <= 20) {
    const phase4_rank_result ='B';
    return phase4_rank_result;

  } else if(point <= 30) {
    const phase4_rank_result = 'A';
    return phase4_rank_result;

  } else if(point == 40) {
    const phase4_rank_result = 'S';
    return phase4_rank_result;

  }else{
    const phase4_rank_result = 'エラー';
    return phase4_rank_result;
  }
};

// =================================================================================


// 総合点ランク表示====================================================================

let total_rank = (point) => {
  if(point <= 50) {
    const total_rank_result = 'C';
    return total_rank_result;

  } else if(point <= 70) {
    const total_rank_result ='B';
    return total_rank_result;

  } else if(point <= 90) {
    const total_rank_result = 'A';
    return total_rank_result;

  } else if(point == 100) {
    const total_rank_result = 'S';
    return total_rank_result;

  }else{
    const total_rank_result = 'エラー';
    return total_rank_result;
  }
};
// =================================================================================


// 各関数の戻り値を格納 ===============================================================

const quesitoin1_result = question1(point_1);
const quesitoin2_result = question2(point_2);
const quesitoin3_result = question3(point_3);
const quesitoin4_result = question4(point_4);
const quesitoin5_result = question5(point_5);
const quesitoin6_result = question6(point_6);
const quesitoin7_result = question7(point_7);
const quesitoin8_result = question8(point_8);
const quesitoin9_result = question9(point_9);
const quesitoin10_result = question10(point_10);
const total_rank_result = total_rank(result_data);
const phase1_rank_result = phase1_rank(phase_1);
const phase2_rank_result = phase2_rank(phase_2);
const phase3_rank_result = phase3_rank(phase_3);
const phase4_rank_result = phase4_rank(phase_4);
// =================================================================================


// 各関数の戻り値格納後、viewへの出力 ===================================================
document.querySelector('#q1').insertAdjacentHTML('beforeend',`<span>${quesitoin1_result}</span>`);
document.querySelector('#q2').insertAdjacentHTML('beforeend',`<span>${quesitoin2_result}</span>`);
document.querySelector('#q3').insertAdjacentHTML('beforeend',`<span>${quesitoin3_result}</span>`);
document.querySelector('#q4').insertAdjacentHTML('beforeend',`<span>${quesitoin4_result}</span>`);
document.querySelector('#q5').insertAdjacentHTML('beforeend',`<span>${quesitoin5_result}</span>`);
document.querySelector('#q6').insertAdjacentHTML('beforeend',`<span>${quesitoin6_result}</span>`);
document.querySelector('#q7').insertAdjacentHTML('beforeend',`<span>${quesitoin7_result}</span>`);
document.querySelector('#q8').insertAdjacentHTML('beforeend',`<span>${quesitoin8_result}</span>`);
document.querySelector('#q9').insertAdjacentHTML('beforeend',`<span>${quesitoin9_result}</span>`);
document.querySelector('#q10').insertAdjacentHTML('beforeend',`<span>${quesitoin10_result}</span>`);
document.querySelector('#total_rank_result').insertAdjacentHTML('beforeend',`<p class="rank__word--fontsize">${total_rank_result}</p>`);
document.querySelector('#phase-1').insertAdjacentHTML('beforeend',`<p class="phase-rank">${phase1_rank_result}</p>`);
document.querySelector('#phase-2').insertAdjacentHTML('beforeend',`<p>${phase2_rank_result}</p>`);
document.querySelector('#phase-3').insertAdjacentHTML('beforeend',`<p>${phase3_rank_result}</p>`);
document.querySelector('#phase-4').insertAdjacentHTML('beforeend',`<p>${phase4_rank_result}</p>`);
// =================================================================================


console.log(quesitoin1_result);
console.log(quesitoin2_result);
console.log(quesitoin3_result);
console.log(quesitoin4_result);
console.log(quesitoin5_result);
console.log(quesitoin6_result);
console.log(quesitoin7_result);
console.log(quesitoin8_result);
console.log(quesitoin9_result);
console.log(quesitoin10_result);
console.log(total_rank_result);

