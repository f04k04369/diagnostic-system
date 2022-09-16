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


//=========== 棒グラフ（横・複数バー） ============//

$(document).ready(function(event) {//html全部読んだ後に描画

var ctx=document.getElementById("chart02");//グラフを描画したい場所のid
var chart=new Chart(ctx,{
type:'horizontalBar',//グラフのタイプ
data:{//グラフのデータ
  labels:["診断結果","過去平均"],//データの名前
  datasets: [
        {
          label: '診断結果',
          data: [62.5],
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


//=========== 棒グラフ（横・複数バー） ============//

$(document).ready(function(event) {//html全部読んだ後に発火

var ctx=document.getElementById("chart01");//グラフを描画したい場所のid
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