

$(document).ready(function(){
  
 


   
  $('#stick1 #click1').click(function(){
    $(this).next().slideToggle('slow');
    $("#d-arrow1").toggleClass('transform');
   })
   $('#stick2 #click2').click(function(){
    $(this).next().slideToggle('slow');
    $("#d-arrow2").toggleClass('transform');
   })
   $('#stick3 #click3').click(function(){
    $(this).next().slideToggle('slow');
    $("#d-arrow3").toggleClass('transform');
   })
   $('#stick4 #click4').click(function(){
    $(this).next().slideToggle('slow');
    $("#d-arrow4").toggleClass('transform');
   })
   $('#stick5 #click5').click(function(){
    $(this).next().slideToggle('slow');
    $("#d-arrow5").toggleClass('transform');
   })
   $('#stick6 #click6').click(function(){
    $(this).next().slideToggle('slow');
    $("#d-arrow6").toggleClass('transform');
   })

   $("#plan1 #planclick1").click(function(){
    $(this).next().slideToggle(1000);
    $("#planarr1").toggleClass('transform');
   });
   $("#plan2 #planclick2").click(function(){
    $(this).next().slideToggle(1000);
    $("#planarr2").toggleClass('transform');
   });
   $("#plan3 #planclick3").click(function(){
    $(this).next().slideToggle(1000);
    $("#planarr3").toggleClass('transform');
   });
   $("#plan4 #planclick4").click(function(){
    $(this).next().slideToggle(1000);
    $("#planarr4").toggleClass('transform');
   });

   
  });

  

  

  
  
