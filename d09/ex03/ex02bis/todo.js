$(document).ready(function(){
	$("#btn").click(function(){
		let div = $('#ft_list');
		let todo = prompt("create new TODO", "TO DO...");
		if(todo != "" && todo != null){
			$('#ft_list').prepend("<p>" + todo + "</p>");
		}
	});
	$('#ft_list').on("click", 'p', function(){
		if(confirm("are you sure! wanna delete it")){
			$(this).remove();
		}
	});
});
