document.addEventListener("DOMContentLoaded", function () {
    const openBtn = document.querySelector(".openbtn");
    const menu = document.querySelector(".menu");
  
    openBtn.addEventListener("click", function () {
      menu.classList.toggle("show");
    });
  });