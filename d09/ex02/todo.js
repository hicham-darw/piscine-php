/***************  create new li in my div *****************/

function	createNew(){
	let task = prompt("new TO DO!", "TO DO");
	if(task != ""){
		const newLi = document.createElement('li');
		const div = document.getElementById('ft_list');
		newLi.innerHTML = task;
		newLi.setAttribute("onclick", "remove(id)");
		div.insertBefore(newLi, div.children[0]);
		let len = div.children.length;
		let i = 0;
		while(i < len){
			div.children[i].setAttribute('id', i);
			i++;
		}
	}
}

/*****************  remove element by id   **********************/
function	remove(id){

	if(confirm("are you sure! you want to delete this TO DO?")){
		const li = document.getElementById(id);
		li.remove();
	}
}
