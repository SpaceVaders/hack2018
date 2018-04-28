$('document').ready(function()
{
  var clickedPlanet;
   $(".orbit").click(function(){
    clickedPlanet = $(this);
    $("#universe").fadeOut(3000,func);
   });
    var func = function showPlanet(){
      
    };
});