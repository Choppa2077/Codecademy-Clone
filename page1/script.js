$(document).ready(function(){
  $("#click").click(function(){
    $("#slide-panel").slideToggle("slow");
    $("#plus").toggleClass('transform');
    
  });




  $("#click2").click(function(){
    $("#slide-panel2").slideToggle("slow");
    $("#plus2").toggleClass('transform');
  });





});