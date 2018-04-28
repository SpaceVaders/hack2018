$('document').ready(function()
{
  var clickedPlanet;

  $(".mp_planet").hover(
  	function(){
  		$(this).css(
  		{
  			'transition': '0.5s linear',
  			'border': '4px solid #61D44A',
  			'cursor': 'pointer',
  			'width': '70px',
  			'height': '70px',
  		});
  	},
  	function(){
  		$(this).css(
  		{
  			'transition': '1s linear',
  			'border': 'none',
  			'width': '50px',
  			'height': '50px',
  		});
  	}
  	);


   $(".orbit").click(function()
   {
    clickedPlanet = $(this).attr('class');
    console.log(clickedPlanet);
    var test = '';
    $("#universe").fadeOut(3000);
    $("#pre_battle_section").show(2000);

    if(clickedPlanet == "orbit orbit_neptune"){
        $(".planet_neptune").show(5000);
    }
    if(clickedPlanet == "orbit orbit_mercury"){
        $(".planet_mercury").show(5000);
    }
    if(clickedPlanet == "orbit orbit_earth"){
        $(".planet_earth").show(5000);
    }
    if(clickedPlanet == "orbit orbit_jupiter"){
        $(".planet_jupiter").show(5000);
    }
    if(clickedPlanet == "orbit orbit_mars"){
        $(".planet_mars").show(5000);
    }
    if(clickedPlanet == "orbit orbit_saturn"){
        $(".planet_saturn").show(5000);
    }
    if(clickedPlanet == "orbit orbit_uranus"){
        $(".planet_uranus").show(5000);
    }
    if(clickedPlanet == "orbit orbit_venus"){
        $(".planet_venus").show(5000);
    }
    
   });
});