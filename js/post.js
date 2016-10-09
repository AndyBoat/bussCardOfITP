function post(blob){
	var post_data = new FormData();
	post_data.append("image", blob);
	$.ajax({
		url: "server/server.php",
		type: 'POST',
		data: post_data,
		processData: false,
		contentType: false,
		success: function(responseStr) {
			console.log(responseStr);
		},
		error: function(responseStr) {
			// alert(responseStr);
			console.log(responseStr);
		}
	});
}