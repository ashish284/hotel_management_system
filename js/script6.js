function submitform6(){
	document.getElementById("form6").onsubmit=function(){
		if(document.getElementById("securitya").value == ""){
			
			alert("ANSWER NEEDED");
			
			document.getElementById("securitya").value = "";
			return false;
		}
	};
}

window.onload=function(){
	submitform6();
};