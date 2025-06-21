$(document).ready(function(){
	$('#select').click(function(){
		var request = new XMLHttpRequest();
		request.onload = function(){
		      document.getElementById("list").innerHTML = this.response;
			console.log(this.responseText);
		}
		request.open("GET", "select.php", true);
		request.send();
	});
	$('#insert').click(function(){
		const todo = prompt("Add new TO DO", "TODO...");
		if(todo){
			var request = new XMLHttpRequest();
			request.onload = function(){
				document.getElementById('list').innerHTML = this.response;
			}
			
			request.open("GET", "insert.php?q=" + todo, true);
			request.send();
		}
	});
});
