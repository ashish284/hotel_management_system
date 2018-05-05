function eventHandler(){
		document.getElementById("delform").onsubmit=function(){
			var newText1=document.getElementById("deltext");
			if(newText1.value==""){
				alert("Enter eid!");
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