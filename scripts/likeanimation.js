$(".likebutton svg").click(function(){
  	var likeid = $(this).attr("id");
	likeMethode(likeid);
});

function likeMethode ($likee) {

if ($('#'+$likee).attr('fill') == 'white'){

	$('#'+$likee).attr({ fill: "red" });
	$('#'+$likee).css({ fill: "red" });
	$('#'+$likee).css({ stroke: "red" });
	}

	else if ($('#'+$likee).attr('fill') == 'red'){

		$('#'+$likee).attr("fill", "white" ); 
		$('#'+$likee).css({ fill: "white" });
		$('#'+$likee).css({ stroke: "orange" });

	}
};