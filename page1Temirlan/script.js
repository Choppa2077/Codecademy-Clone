$(document).ready(function(){
 
  $(".header-burger").click(function (event) {
    $(".header-burger, .header-menu").toggleClass("active");
    $("body").toggleClass("lock");
  });


  });

  const currentScroll = window.pageYOffset;
  if (currentScroll > 0) {
    document.getElementsByClassName("header").style.backgroundColor = "white";
  }
  


