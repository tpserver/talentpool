$(document).ready(function() {

$(".opportunity_tab").click(function() {

var opportunityId = $(this).attr("id");

switch (opportunityId) {

case "opportunity_1":
$("#opportunity_option_1").fadeIn();
$("#opportunity_option_2").fadeOut();
$("#opportunity_option_3").fadeOut();
break;

case "opportunity_2":
$("#opportunity_option_1").fadeOut();
$("#opportunity_option_2").fadeIn();
$("#opportunity_option_3").fadeOut();
break;

case "opportunity_3":
$("#opportunity_option_1").fadeOut();
$("#opportunity_option_2").fadeOut();
$("#opportunity_option_3").fadeIn();
break;
	
}

$(".opportunity_tab").removeClass("opportunity_selected");
$(this).addClass("opportunity_selected");

});

$(function(){
        $("#opportunity_event_location_input").geocomplete({
          types: ["geocode", "establishment"],
          map: "#opportunity_event_location_map"
        }).bind("geocode:result", function(event, result){
            google.maps.event.trigger(map, 'resize');
          });
      });

});