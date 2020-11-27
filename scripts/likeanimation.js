/*parametre 1 : class du bouton
pour l'instant marche avec des id, arrive pas a generaliser
*/
$(".likes svg").click(function(){
  var likeid = $(this).attr("id");

 likeMethode(likeid);
});

//parametre :id du svg
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