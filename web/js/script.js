$(document).ready(function() {

	$("#form").submit(function(event) {
	event.preventDefault();
	var titre = $('#form_title').val();
	var post = $('#form_post').val();
	var auteur = $('#form_auteur').val();
		$.ajax({
			url: Routing.generate('filmpost'),
			type: 'POST',
			data:{
				'titre': titre,
				'post': post,
				'auteur': auteur
			}  ,
			success: function (results){

				console.log(results);
			}
		});
  	});
});