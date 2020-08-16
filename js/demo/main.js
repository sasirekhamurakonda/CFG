var exportData;
var yearsArray=[];
var exportsArray=[];
$(document).ready(function(){
    getExportData();
    
});
function getExportData(){
    /*$.getJSON("http://www.7timer.info/bin/astro.php?lon=113.2&lat=23.1&ac=0&unit=metric&output=json&tzshift=0", function(result){
    $.getJSON("http://106.0.36.170:8080/just/json.php", function(result){
        sampleData=result; 
        console.log(sampleData);
    updateChartArea(); 
    });*/
    $.ajax({
        type: "GET",
        url: 'http://localhost/cfg/json.php',
        dataType: 'json',
        success: function (obj, textstatus) {
                      if( !('error' in obj) ) {
                          exportData = obj;
                          console.log(obj);
                          updateChartArea("India")
                      }
                      else {
                          console.log(obj.error);
                      }
                }
    });
}
function updateChartArea(countryName){
    console.log(exportData)
    $.each(exportData,function(index,value){
    if(value.area=="India")
        {
           
            yearsArray.push(value.year)
            exportsArray.push(parseInt(value.population))
        }
       

      })
      console.log(yearsArray)
    console.log(exportsArray)
    drawExportChart();
}