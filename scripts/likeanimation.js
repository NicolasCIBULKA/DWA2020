$(".likebutton svg").click(function(){
  	var likeid = $(this).attr("id");
	likeMethode(likeid);
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