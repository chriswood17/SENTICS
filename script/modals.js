/* MODAL Prelude
------------------------------------*/
//								var modalPrelude = document.getElementById("modalPrelude");
//
//								$(window).on('load',function(){
//									modalPrelude.style.display = "block";
//								});

							



/* MODAL Strokes
------------------------------------*/
// Get the modal
var modalS = document.getElementById("modalS");

// Get the button that opens the modal
var btnS = document.getElementById("btnS");

// Get the <span> element that closes the modal
var spanS = document.getElementsByClassName("closeS")[0];

// When the user clicks on the button, open the modal
btnS.onclick = function() {
  modalS.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanS.onclick = function() {
  modalS.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalS) {
    modalS.style.display = "none";
  }
}

							
							