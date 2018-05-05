function eventHandler(){
		document.getElementById("addform2").onsubmit=function(){
			var newText1=document.getElementById("tt1");
			var newText2=document.getElementById("tt2");
			var newText3=document.getElementById("tt3");
			var newText4=document.getElementById("tt4");
			if(newText1.value==""||newText2.value==""||newText3.value==""||newText4.value==""){
				alert("All the fields are compulsory!");
				newText1.value="";
				newText2.value="";
				newText3.value="";
				newText4.value="";
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