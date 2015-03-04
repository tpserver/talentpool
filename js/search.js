$(function() {
    $( "#search_tabs" ).tabs();
  });


$(document).ready(function() {

$(".level_1_container").hide();
$(".level_2_container").hide();
$(".level_3_container").hide();

$(".more_button").click(function() {

$(this).toggleClass("triangle_up").toggleClass("triangle_down");

$(this).parent().next().slideToggle();

});

$('.personal input, .education input, .extra-curricular input, .work_experience').on('ifChecked', function(event){
  $(this).parent().parent().parent().addClass("selected");
   $(this).parent().parent().parent().children(".more_button").removeClass("triangle_down").addClass("triangle_up").show();
$(this).parent().parent().parent().children(".weighting_slider").show();
});


$('.personal input, .education input, .extra-curricular input, .work_experience').on('ifUnchecked', function(event){
  $(this).parent().parent().parent().removeClass("selected").addClass("unchecked");
  $(this).parent().parent().parent().next().slideUp();
  $(this).parent().parent().parent().children(".more_button").removeClass("triangle_down").addClass("triangle_up").hide();
  $(this).parent().parent().parent().children(".weighting_slider").hide();
});


$( ".slider" ).slider({
           animate: true,
               range: "min",
               value: 3,
               min: 1,
               max: 5,
               step: 1,
                 
               //this updates the hidden form field so we can submit the data using a form
               change: function(event, ui) {
               $(this).parent().children(".slider_labels").children(".slider_value").attr('value', ui.value);
               }
            
               });

$("#topbar_logo").click(function() {

$('input:checkbox').each(function () {
       var sThisVal = (this.checked ? $(this).val() : "");
       alert(sThisVal);
  });

});


});