$(document).ready(function(){
	$("#btn").click(function(){
		let div = $('#ft_list');
		let todo = prompt("create new TODO", "TO DO...");
		if(todo != "" && todo != null){
			$('#ft_list').prepend("<p>" + todo + "</p>");
		}
		let childs = div.children('p');
		var i = 0;
		while(i < childs.length){
			childs[i].setAttribute("id", i);
			i++;
		}
	});
});
