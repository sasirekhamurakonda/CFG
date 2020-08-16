var exportData;
var yearsArray=[];
var exportsArray=[];
$(document).ready(function(){
    getExportData();
    
});
function getExportData(){
    $.ajax({
        type: "GET",
        url: 'http://localhost/cfg/json.php',
        dataType: 'json',
        success: function (obj, textstatus) {
                      if( !('error' in obj) ) {
                          exportData = obj;
                          console.log(obj);
                          updateCountries();
                          updateChartArea(exportData[0].area)
                      }
                      else {
                          console.log(obj.error);
                      }
                }
    });
}
function updateCountries(){
    var countryObj={}
    $.each(exportData, function(key, value) {    
        countryObj[value.area]=1;
        });
        for(var prop in countryObj){
            
        $("<option />").val(prop).text(prop).appendTo("#ids");

        
        }
}
function updateChartArea(countryName){
    $.each(exportData,function(index,value){
    if(value.area==countryName)
        {
           
            yearsArray.push(value.year)
            exportsArray.push(parseInt(value.population))
        }
       

      })
    drawExportChart();
}
