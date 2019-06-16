document.getElementById("about-click").addEventListener("click", aboutShow);
document.getElementById("course-click").addEventListener("click", courseShow);
document.getElementById("recruitment-click").addEventListener("click", recruitmentShow);

function courseShow(){
	document.getElementById("head-detail").style.display = 'none';
	document.getElementById("course").style.display = 'block';
	document.getElementById("recruitment").style.display = 'none';
}
function aboutShow(){
	document.getElementById("head-detail").style.display = 'block';
	document.getElementById("course").style.display = 'none';
	document.getElementById("recruitment").style.display = 'none';
}
function recruitmentShow(){
	document.getElementById("recruitment").style.display = 'block';
	document.getElementById("course").style.display = 'none';
	document.getElementById("head-detail").style.display = 'none';
}