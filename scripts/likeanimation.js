$(".likebutton svg").click(function(){
  	var likeid = $(this).attr("id");
  			var parentid=$(this).parents('.likebutton').find('.nblike');
  	  	$.ajax({
		url: './functions/likescript.php',
		type: 'GET',
		dataType: 'text',
		data: {"postliked": likeid},
	})
	.done(function(response) {
		console.log("success");

	})
	.fail(function(response) {
		console.log("error");

	})
	.always(function(response) {
		console.log("complete");
		parentid.text(" "+response);
		likeMethode(likeid);
	})
});

function likeMethode ($likee) {

if ($('#'+$likee).attr('fill') == 'white'){

	$('#'+$likee).attr({ fill: "orange" });
	$('#'+$likee).css({ fill: "orange" });
	$('#'+$likee).css({ stroke: "orange" });
	}

	else if ($('#'+$likee).attr('fill') == 'orange'){

		$('#'+$likee).attr("fill", "white" ); 
		$('#'+$likee).css({ fill: "white" });
		$('#'+$likee).css({ stroke: "orange" });

	}
};