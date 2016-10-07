$(document).ready(function(){
	$('#reader').html5_qrcode(function(data){
		var data = data;
		console.log(data + "test");

		},
		function(error){
			$('#read_error').html(error);
		}, function(videoError){
			$('#vid_error').html(videoError);
		}
	);
});
