function dajPodatke(){
	$.ajax({
			url: "http://localhost/blog/getData4",
			context: document.body
		}).done(function(result ) {
			$('#ime').text(result.name);
		});
}