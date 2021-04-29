!function(o){"use strict";o(function(){if(o("#bar").length){var e=o("#bar").get(0).getContext("2d");new Chart(e,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],datasets:[{label:"Revenue",backgroundColor:"#2a76f4",borderColor:"transparent",borderWidth:2,categoryPercentage:.5,hoverBackgroundColor:"#211E3B",hoverBorderColor:"transparent",data:[30,39,20,31,41,25,20,39,20,31,41,25]}]},options:{responsive:!0,maintainAspectRatio:!0,legend:{display:!1,labels:{fontColor:"#50649c"}},tooltips:{enabled:!0,callbacks:{label:function(e,o){return o.datasets[e.datasetIndex].label+" $ "+e.yLabel+"k"}}},scales:{xAxes:[{barPercentage:.35,categoryPercentage:.4,display:!0,gridLines:{color:"transparent",borderDash:[0],zeroLineColor:"transparent",zeroLineBorderDash:[2],zeroLineBorderDashOffset:[2]},ticks:{fontColor:"#a4abc5",beginAtZero:!0,padding:12}}],yAxes:[{gridLines:{color:"#8997bd29",borderDash:[3],drawBorder:!1,drawTicks:!1,zeroLineColor:"#8997bd29",zeroLineBorderDash:[2],zeroLineBorderDashOffset:[2]},ticks:{fontColor:"#a4abc5",beginAtZero:!0,padding:12,callback:function(e){if(!(e%10))return"$"+e+"k"}}}]}}})}})}(jQuery);var options={chart:{height:350,type:"line",stacked:!0,toolbar:{show:!1,autoSelected:"zoom"},dropShadow:{enabled:!0,top:12,left:0,bottom:0,right:0,blur:2,color:"#45404a2e",opacity:.35}},colors:["#2a77f4","#1ccab8","#f02fc2"],dataLabels:{enabled:!1},stroke:{curve:"smooth",width:[4,4],dashArray:[0,3]},grid:{borderColor:"#45404a2e",padding:{left:0,right:0},strokeDashArray:4},markers:{size:0,hover:{size:0}},series:[{name:"Revenue",data:[0,60,20,90,45,110,55,130,44,110,75,200]},{name:"New Orders",data:[0,45,10,75,35,94,40,115,30,105,65,190]}],xaxis:{type:"datetime",categories:["2020-09-19T00:00:00","2020-09-19T01:30:00","2020-09-19T02:30:00","2020-09-19T03:30:00","2020-09-19T04:30:00","2020-09-19T05:30:00","2020-09-19T06:30:00","2020-09-19T07:30:00","2020-09-19T08:30:00","2020-09-19T09:30:00","2020-09-19T10:30:00","2020-09-19T11:30:00"],axisBorder:{show:!0,color:"#45404a2e"},axisTicks:{show:!0,color:"#45404a2e"}},fill:{type:"gradient",gradient:{gradientToColors:["#F55555","#B5AC49","#6094ea"]}},tooltip:{x:{format:"dd/MM/yy HH:mm"}},legend:{show:!1,position:"top",horizontalAlign:"right"}};(chart=new ApexCharts(document.querySelector("#eco_dash"),options)).render();options={series:[{name:"Revenue",data:[31,40,28,51,42,109,100]}],chart:{height:350,type:"area",toolbar:{show:!1}},dataLabels:{enabled:!1},stroke:{curve:"smooth",width:2},colors:["#1eca87"],xaxis:{type:"day",categories:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},yaxis:{labels:{formatter:function(e){return"$"+e+"k"}}},legend:{show:!1},grid:{borderColor:"#45404a2e",padding:{left:0,right:0},strokeDashArray:4},tooltip:{x:{format:"dd/MM/yy HH:mm"}}};(chart=new ApexCharts(document.querySelector("#Top_Week"),options)).render();var chart;options={chart:{height:235,type:"donut",dropShadow:{enabled:!0,top:10,left:0,bottom:0,right:0,blur:2,color:"#45404a2e",opacity:.15}},plotOptions:{pie:{donut:{size:"85%"}}},dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:["transparent"]},series:[10,65,25],legend:{show:!1,position:"bottom",horizontalAlign:"center",verticalAlign:"middle",floating:!1,fontSize:"14px",offsetX:0,offsetY:5},labels:["Footwear","Electronic","Clothes"],colors:["#1ccab8","#211E3B","#fd3c97"],responsive:[{breakpoint:600,options:{plotOptions:{donut:{customScale:.2}},chart:{height:240},legend:{show:!1}}}],tooltip:{y:{formatter:function(e){return e+" %"}}}};(chart=new ApexCharts(document.querySelector("#eco_categories"),options)).render(),$("#usa").vectorMap({map:"us_aea_en",backgroundColor:"transparent",borderColor:"#818181",regionStyle:{initial:{fill:"#211E3B24"}},series:{regions:[{values:{"US-VA":"#211E3B52","US-PA":"#211E3B52","US-TN":"#211E3B52","US-WY":"#211E3B52","US-WA":"#211E3B52","US-TX":"#211E3B52"},attribute:"fill"}]}});