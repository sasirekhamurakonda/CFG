var sampleData;
var sampleArray=[];
$(document).ready(function(){
    getData();
    
});
function getData(){
    /*$.getJSON("http://www.7timer.info/bin/astro.php?lon=113.2&lat=23.1&ac=0&unit=metric&output=json&tzshift=0", function(result){
    $.getJSON("http://106.0.36.170:8080/just/json.php", function(result){
        sampleData=result; 
        console.log(sampleData);
    updateChartArea(); 
    });*/
    $.ajax({
        type: "GET",
        url: 'http://106.0.36.170:8080/just/json.php',
        dataType: 'json',
        success: function (obj, textstatus) {
                      if( !('error' in obj) ) {
                          sampleData = obj.result;
                          console.log(sampleData);
                      }
                      else {
                          console.log(obj.error);
                      }
                }
    });
}
function updateChartArea(){
    $.each(sampleData.dataseries,function(index,value){
        sampleArray.push(value.transparency);
      })
  drawAreaChart();
}