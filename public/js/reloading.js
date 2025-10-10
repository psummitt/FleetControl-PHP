var myVar;
function timeout() {
  myVar = setTimeout(showPage, 3000);
}
function showPage() {
  document.getElementById("loading").style.display = "none";
  document.getElementById("homepage").style.display = "block";
}