function submitform2(){
	document.getElementById("form2").onsubmit=function(){
		if( document.getElementById('username').value=="" ||
			document.getElementById('userid').value=="" || 
			document.getElementById("password").value=="" || 
			document.getElementById("security_question").value=="" || 
			document.getElementById("security_answer").value=="" || 
			document.getElementById("emailid").value=="" || 
			document.getElementById("phoneno").value==""){
				alert("ALL FIELDS ARE COMPULSORY!!");
				document.getElementById('username').value="" ;
				document.getElementById('userid').value="" ;
				document.getElementById("password").value="" ; 
				document.getElementById("security_question").value="" ; 
				document.getElementById("security_answer").value="" ;
				document.getElementById("emailid").value="" ;
				document.getElementById("phoneno").value="";
				return false;
		}
	};
}

window.onload=function(){	
	submitform2();
};