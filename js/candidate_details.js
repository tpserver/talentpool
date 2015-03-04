$(document).ready(function() {
$("#decision_container").animate({bottom: 0},500);
$("#shortlist_option").mouseover(function() {
if (!$(this).hasClass("selected")) {
$(this).animate({
backgroundColor: "#2ECC71",
color: "#fff"
}, 200 );
}
});
$("#shortlist_option").mouseout(function() {
if (!$(this).hasClass("selected")) {
$(this).animate({
backgroundColor: "#fff",
color: "#2ECC71"
}, 200 );
}
});
$("#decline_option").mouseover(function() {
if (!$(this).hasClass("selected")) {
$(this).animate({
backgroundColor: "#E74C3C",
color: "#fff"
}, 200 );
}
});
$("#decline_option").mouseout(function() {
if (!$(this).hasClass("selected")) {
$(this).animate({
backgroundColor: "#fff",
color: "#E74C3C"
}, 200 );
}
});
$("#shortlist_option").click(function() {
if (!$(this).hasClass("selected")) {
$(this).addClass("selected");
$("#shortlist_tick").animate({bottom: 3},500);
$(this).animate({
backgroundColor: "#2ECC71",
color: "#fff"
}, 200 );
}
else {
$(this).removeClass("selected");
$("#shortlist_tick").animate({bottom: -60},500);
$(this).animate({
backgroundColor: "#fff",
color: "#2ECC71"
}, 200 );
}
});
$("#decline_option").click(function() {
if (!$(this).hasClass("selected")) {
$(this).addClass("selected");
$("#decline_cross").animate({bottom: 3},500);
$(this).animate({
backgroundColor: "#E74C3C",
color: "#fff"
}, 200 );
}
else {
$(this).removeClass("selected");
$("#decline_cross").animate({bottom: -60},500);
$(this).animate({
backgroundColor: "#fff",
color: "#E74C3C"
}, 200 );
}
});
});