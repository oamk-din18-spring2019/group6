

//form sign in
function openFormSignIn() {
  document.getElementById("signin").style.display = "block";
}
function closeFormSignIn() {
  document.getElementById("signin").style.display = "none";
}
// forn sign up
function openFormSignUp() {
  document.getElementById("signup").style.display = "block";
  document.getElementById("signin").style.display = "none";
}
function closeFormSignUp() {
  document.getElementById("signup").style.display = "none";
}
// function alert()
// {
//   document.querySelector("#signup").style.display = "none";
//   //alert("Congragulation ...!!!");
  
// }
// Get the modal
var modal1 = document.getElementById('signin');
var modal2 = document.getElementById('signup');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2) {
        modal1.style.display = "none";
        modal2.style.display = "none";
    }
}