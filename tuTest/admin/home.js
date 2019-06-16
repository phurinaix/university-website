document.getElementById("flag-inner1").addEventListener("click",showThai);
document.getElementById("flag-inner2").addEventListener("click",showEng);

function showThai(){
	document.getElementById("thai").style.display = 'block';
	document.getElementById("english").style.display = 'none';
}
function showEng(){
	document.getElementById("thai").style.display = 'none';
	document.getElementById("english").style.display = 'block';
}
function c(){
	var rows = document.getElementById('tableId').rows.length;;
	document.getElementById('no').innerHTML = rows;
}