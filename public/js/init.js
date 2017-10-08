$(document).ready(function(){
	$('.generate_url').click(function(){
		var max = 100000000;
		var min = 100;
		var generate_number = Math.floor(Math.random() * (max - min)*100000000) ;
		console.log(generate_number);
		$('.generate_url').attr('data-url', generate_number);
	})

	$('.send').click(function(){
		var name = $('.name').val();
		var last_name = $('.last_name').val(); 
		var url_part = $('.generate_url').attr('data-url');
		$.ajax({
			type: 'PUT',
			url: '/members',
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
			data: {
				name: name,
				last_name: last_name,
				url_part: url_part,

			},
			success: function(response){
				console.log(response);
			}
		})
	})
})