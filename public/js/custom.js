$(document).ready(function(){
	flow_footer();
});

$( window ).resize(function(){
	flow_footer();
});

function flow_footer(){

	var alto_footer = $("#footer").height();
    $("#footer_flow").css('margin-top', alto_footer+'px');

}
