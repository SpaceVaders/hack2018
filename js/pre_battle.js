$('document').ready(function()
{
  var clickedPlanet;
  var planetId;
  /* PLANETS HOVER */
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

    /* SHOWING HIDDEN DIV PRE BATTLE */
   $(".orbit").click(function()
   {
    clickedPlanet = $(this).attr('class');
    console.log(clickedPlanet);
    var test = '';
    $("#universe").fadeOut(3000);
    $("#pre_battle_section").show(2000);

    if(clickedPlanet == "orbit orbit_neptune"){
        $(".planet_neptune").show(5000);
        planetId = 5;
    }
    if(clickedPlanet == "orbit orbit_mercury"){
        $(".planet_mercury").show(5000);
        planetId = 4;
    }
    if(clickedPlanet == "orbit orbit_jupiter"){
        $(".planet_jupiter").show(5000);
        planetId = 2;
    }
    if(clickedPlanet == "orbit orbit_mars"){
        $(".planet_mars").show(5000);
        planetId = 3;
    }
    if(clickedPlanet == "orbit orbit_saturn"){
        $(".planet_saturn").show(5000);
         planetId = 7;
    }
    if(clickedPlanet == "orbit orbit_uranus"){
        $(".planet_uranus").show(5000);
         planetId = 6;
    }
    if(clickedPlanet == "orbit orbit_venus"){
        $(".planet_venus").show(5000);
        planetId = 8;
    }
    
   });
   /* CHOOSING CARDS FOR BATTLE */
   var numberCards = 0;
   var firstCard = [];
   var i = 0;
   $('.human_card').click(function(){
          let color = $(this).css('border-color');
          /* STARTING SELECTING CARDS ___START____*/
          if(numberCards<3)
          {      
            $('#max_cards').fadeOut(2000);
            if(color==='rgba(0, 0, 0, 0)')
            {
               $(this).css({
                  'border-color': 'green',
                  'border-image': 'none',
                  'width':'320px',
                  'height':'310px',
               });
               numberCards++;
               firstCard[i] = $(this).find('span').html();
               
               i++;
            }
            else{
             
             $(this).css({
                  'border': '4px solid transparent',
                  'border-image': 'linear-gradient(to right,rgb(139,69,19) 0%, #F9A644 100%)',
                  'border-image-slice': '1%',
                  'width':'300px',
                  'height':'300px',
               });
              numberCards--;
              i--;
            }
          }
          else{
            $('#max_cards').fadeIn(2000);
          }
          if(numberCards===3)
          {
            if(color!=='rgba(0, 0, 0, 0)'){
             $(this).css({
                  'border': '4px solid transparent',
                  'border-image': 'linear-gradient(to right,rgb(139,69,19) 0%, #F9A644 100%)',
                  'border-image-slice': '1%',
                  'width':'300px',
                  'height':'300px',
               });
              numberCards--;
              i--;
              $('#max_cards').fadeOut(2000);
            }
          }
          /*firstCard
          planetId*/
          
          /* STARTING SELECTING CARDS ___END____*/

          /* GOING TO OTHER PAGE */

          $('.battle_redirect').click(function(){
              if(numberCards==3){
              window.location.href="battle.php?planetId="+planetId+"&playerCards[]="+firstCard;
            }
          });

   });
  
});