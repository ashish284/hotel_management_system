function prepareEventHandlers() {
	document.getElementById("form1").onsubmit = function() {
		if (document.getElementById("userid").value == ""|| document.getElementById("pwd").value == "" ) {
			alert("ENTER VALID USERID AND PASSWORD");
			document.getElementById("userid").value = "";
			document.getElementById("pwd").value = "" 
			return false;
		} 
	};
}
var myImage=document.getElementById("mainImage");
var imageArray=["images/atlantis2.jpg","images/atlantis3.jpg","images/atlantis4.jpg","images/atlantis5.jpg","images/atlantis6.jpg"];
var imageIndex=0;
function changeImage(){
	myImage.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if(imageIndex>=imageArray.length){
		imageIndex=0;
	}
}
setInterval(changeImage,3000);
window.onload =  function() {
	prepareEventHandlers();

};