var myImage=document.getElementById("mainImage");
var imageArray=["images/double.jpg","images/hotel2.jpg","image/single.jpg"];
var imageIndex=0;
function changeImage(){
	myImage.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if(imageIndex>=imageArray.length){
		imageIndex=0;
	}
}
setInterval(changeImage,5000);