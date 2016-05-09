$('#pistachio').click(function(){
	$('#flavorDescription').html("This is the pistachio flavor description. It obviously has nothing")
	.css('position', 'float')
	.css('width', '700px')
	$('#flavorImg').html('<img id="flavorImg" src="images/pistachio.png" />');
});

$('#strawberry').click(function(){
	$('#flavorDescription').html("Now we're looking at strawberry. There is still nothing")
	.css('position', 'float')
	.css('width', '700px');
	$('#flavorImg').html('<img id="flavorImg" src="images/strawberry.jpg" />');
});

$('#blueberry').click(function(){
	$('#flavorDescription').html("This is blueberry. The best flavor of all.")
	.css('position', 'float')
	.css('width', '700px');
	$('#flavorImg').html('<img id="flavorImg" src="images/blueberry.jpg" />');
});