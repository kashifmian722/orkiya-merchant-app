$(document).ready(function(){

	$(".loading").on('click', function(){
		$("#loading_screen").css('display', 'flex');
	})
});

function showLoader(){
	$("#loading_screen").css('display', 'flex');
}


var loadFile = function(event,id) {
	var image = document.getElementById('output'+id);
	image.src = URL.createObjectURL(event.target.files[0]);
};