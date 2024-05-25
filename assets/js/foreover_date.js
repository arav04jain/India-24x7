
var x = setInterval(function () {
    

    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
  
   
    
    document.getElementById('countdown').innerHTML=(day.toString()+"/"+month.toString()+"/"+year.toString()+"  " +hours.toString()+" Hours "+minutes.toString()+" Minutes "+seconds.toString()+" Seconds "); 
}, 1);