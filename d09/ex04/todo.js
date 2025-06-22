$(document).ready(function(){
	$('#select').click(function(){
		var request = new XMLHttpRequest();
		request.onload = function(){
		      document.getElementById("list").innerHTML = this.response;
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
			
			request.open("POST", "insert.php?q=" + todo, true);
			request.send();
		}
	});
	$('#delete').click(function(){
		let id = prompt("choose what you need delete", "id");
		if(  id  ){
			var request = new XMLHttpRequest();
			request.onload = function(){
				document.getElementById('list').innerHTML = this.response;
			}
			request.open("POST", "delete.php?q=" + id, true);
			request.send();
		}
	});
});
