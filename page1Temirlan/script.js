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
function openNav() {
  document.getElementById("mySidebar").style.width = "150px";
  document.getElementById("main").style.marginLeft = "150px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}


