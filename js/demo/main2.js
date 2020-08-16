var exportData2;
var yearsArray2=[];
var exportsArray2=[];
$(document).ready(function(){
    getExportData2();
    
});
function getExportData2(){
    $.ajax({
        type: "GET",
        url: 'http://localhost/cfg/json2.php',
        dataType: 'json',
        success: function (obj, textstatus) {
                      if( !('error' in obj) ) {
                          exportData2 = obj;
                          console.log(obj);
                          updateCountries2();
                          updateChartArea2(exportData2[0].area)
                      }
                      else {
                          console.log(obj.error);
                      }
                }
    });
}
function updateCountries2(){
    var countryObj={}
    $.each(exportData2, function(key, value) {    
        countryObj[value.area]=1;
        });
        for(var prop in countryObj){
            
        $("<option />").val(prop).text(prop).appendTo("#id2");

        
        }
}
function updateChartArea2(countryName){
    $.each(exportData2,function(index,value){
    if(value.area==countryName)
        {
           
            yearsArray2.push(value.yearcode)
            exportsArray2.push(parseInt(value.value))
        }
       

      })
    drawExportChart2();
}
