
function toggleFunction(){
	var x = document.getElementsById("topicbar");
	if (x.className === "topbar") {
		x.className += " responsive";
	  } else {
		x.className = "topbar";
	  }
}