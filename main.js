$(document).ready(function(){
	$("#stage").animate({
		scrollTop: 10000000
	}, 1000);
	return false;
});

	//IF MESSAGE EMPTY
$(document).ready(function(){
	$('#send').click(function(){
		var message = $('#message').val();
		if (message == '')
		{
			alert("Write Something!");
		}
		else
		{	
			$.ajax({
				url: "send.php",
				mehod: "POST",
				data: {message: message},
				dataType: "text",
				success: function(data)
				{
					$('#message').val('');
				}
			});	
		}
	});
});

setInterval(function(){
	$('#stage').load('display.php').fadeIn('slow');
}, 1000);
