//Hamburger actions

const hamBurger = document.querySelector(".hamburger");

hamBurger.addEventListener("click", function () {
  document.querySelector(".navbar").classList.toggle("show");
});


// Nav bar responsive and content indicating at h...
const containerArray = document.querySelectorAll('section');
const containerPos = {};

containerArray.forEach((section) => {
  containerPos[section.id] = section.offsetTop;
});