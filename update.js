function eventHandler(){
		document.getElementById("formid").onsubmit=function(){
			var newText=document.getElementById("eidid");
			if(newText.value==""){
				alert("Enter an eid");
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