
function getDate(){
  date = new Date().toLocaleDateString();
  document.getElementById("today").innerHTML = date;
}