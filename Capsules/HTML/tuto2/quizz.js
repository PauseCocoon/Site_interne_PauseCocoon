$(document).ready(function()
{	
	var i=1;
	var score=0;
	
	function calculerScore()
	{
		if( $('input[name=q'+i+']:checked').val() == $('input[name=h'+i+']').val() )
			score++;
	}
	
	function attribuerScore()
	{
		$("#score").text("vous avez eu "+score+" point(s)");
		if(score<=3 && score >0)
			$("#commentaire").text("Mieux vaut revoir le cours");
		else if(score<=5 && score >3)
			$("#commentaire").text("Pas trop mal, mais mieux vaut réviser un peu");
		else if(score<=7 && score >5)
			$("#commentaire").text("Pas mal...");
		else if(score<=9 && score >7)
			$("#commentaire").text("Pas mal du tout !");
		else if(score==10)
			$("#commentaire").text("Un sans faute... bravo !");
		else if(score==0)
			$("#commentaire").text("...");
		
	}

	$(".valider").click(function(event)
	{
		if(i>=10)
		{
			calculerScore();
			$("#"+i).addClass("cache");
			$("#end").removeClass("cache");
			attribuerScore();
		}	
		else
		{
			calculerScore();
			$("#"+i).addClass("cache");
			i++;
			$("#"+i).removeClass("cache");		
		}
		
	});
});