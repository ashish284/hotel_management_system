function submitform4(){
	document.getElementById("form4").onsubmit=function(){
		if(document.getElementById("userid").value == ""){
			alert("USERID NEEDED");
			document.getElementById("userid").value="";
			return false;
		}
	};
}

window.onload=function(){
	submitform4();
};