function CloseMe() {
	window.close();
}

var temp = setTimeout(CloseMe, 60000); //60000

document.addEventListener("mousemove", function() {
	clearTimeout(temp);
	temp = setTimeout(CloseMe, 60000);
})