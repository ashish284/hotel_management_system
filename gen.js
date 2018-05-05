function eventHandler(){
		document.getElementById("genid").onsubmit=function(){
			var newText1=document.getElementById("gentext");
			if(newText1.value==""){
				alert("Enter Room No!");
				newText1.value="";
			return false;
			}
			else{
				return true;
			}
		};
}

window.onload=function(){
	eventHandler();
};