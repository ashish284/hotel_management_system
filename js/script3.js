function submitform3(){
	document.getElementById("form3").onsubmit=function(){
		if(document.getElementById("pwd").value == ""){
			alert("Admin, please enter the password");
			document.getElementById("pwd").value="";
			return false;
		}
	};
}

window.onload=function(){
	submitform3();
};