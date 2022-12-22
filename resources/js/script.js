window.onload = function () { feedBack() };

function feedBack() {
  let popup = document.getElementById("ufive-feedback");
  if (popup.classList.contains("ufive-feedback-hide")) {
    setTimeout(() => popup.classList.add("ufive-feedback"), 50000)
    //setTimeout(() => popup.classList.add("ufive-feedback-show"), 1000)
    // setTimeout(() => document.getElementsByClassName('ufive-feedback').style = "visibility: visible;   opacity: 1", 1000);
    setTimeout(() => console.log("aaaa!!!!!!!!!!"), 1000);
  }
};



function feedBackClose() {
  let popup = document.getElementById("ufive-feedback");
  if (popup.classList.contains("ufive-feedback")) {
    let NAME = document.getElementById("ufive-feedback")

    NAME.className = "ufive-feedback-hide"
    console.log("close");

  }

};



function feedBackOpen() {
  let popup = document.getElementById("ufive-feedback");
  if (popup.classList.contains("ufive-feedback-hide")) {
    let NAME = document.getElementById("ufive-feedback")

    NAME.className = "ufive-feedback"
    console.log("open");
  }
};
function cartOpen() {
  let popup = document.getElementById("cart-popup");
  if (popup.classList.contains("cart-popup-hide")) {
    popup.className = "cart-popup"
    console.log("open");
  }
};
function cartClose() {
  let popup = document.getElementById("cart-popup");
  if (popup.classList.contains("cart-popup")) {
    popup.className = "cart-popup-hide"
    console.log("open");
  }
};


window.onscroll = function () { myFunction() };

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// $("message").blur(function () {
//   $("#feedback message").each(function () {
//     $this = $(this);
//     if (this.value != "") {
//       $this.addClass("focused");
//       $("message + label + span").css({ opacity: 1 });
//     } else {
//       $this.removeClass("focused");
//       $("message + label + span").css({ opacity: 0 });
//     }
//   });
// });

// $("#feedback .field:first-child input").blur(function () {
//   $("#feedback .field:first-child input").each(function () {
//     $this = $(this);
//     if (this.value != "") {
//       $this.addClass("focused");
//       $(".field:first-child input + label + span").css({ opacity: 1 });
//     } else {
//       $this.removeClass("focused");
//       $(".field:first-child input + label + span").css({ opacity: 0 });
//     }
//   });
// });

// $("#feedback .field:nth-child(2) input").blur(function () {
//   $("#feedback .field:nth-child(2) input").each(function () {
//     $this = $(this);
//     if (this.value != "") {
//       $this.addClass("focused");
//       $(".field:nth-child(2) input + label + span").css({ opacity: 1 });
//     } else {
//       $this.removeClass("focused");
//       $(".field:nth-child(2) input + label + span").css({ opacity: 0 });
//     }
//   });
// });
