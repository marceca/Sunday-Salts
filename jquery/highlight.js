$('input').focusin(function(){
	$(this).css('background-color', 'yellow').css('border-width', '3px');
});

$('input').focusout(function(){
	$(this).css('background-color', 'white').css('border-width','3px');
});