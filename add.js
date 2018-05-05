function eventHandler(){
		document.getElementById("addform").onsubmit=function(){
			var newText1=document.getElementById("t1");
			var newText2=document.getElementById("t2");
			var newText3=document.getElementById("t3");
			var newText4=document.getElementById("t4");
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