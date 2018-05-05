function submitform5(){
	document.getElementById("form5").onsubmit=function(){
		if(document.getElementById("cid").value == "" || 
		   document.getElementById("cod").value == ""){
			
			alert("CHECKIN AND CHECKOUT DATE NEEDED");
			document.getElementById("cid").value = "";
			document.getElementById("cod").value = "";
			return false;
		}
	};
}

window.onload=function(){
	submitform5();
};