window.onscroll = function() {myFunction_1()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction_1() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }